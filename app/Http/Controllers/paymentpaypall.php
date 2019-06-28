<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PayPal\Rest\ApiContext ;
use PayPal\Auth\OAuthTokenCredential ;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PaymentExecution;
use Cart;

class paymentpaypall extends Controller
{
    private $apiContext ;
    private $secret ;
    private $clientId ;

    public function __construct()
    {
        if( config( 'paypal.settings.mode' ) == 'live' )  
        {
            $this->clientId = config('paypal.live_client_id' ) ;
            $this->secret = config('paypal.live_secret') ; 
        }
        else 
        {
            $this->clientId = config( 'paypal.sandbox_client_id' ) ;
            $this->secret = config( 'paypal.sandbox_secret' ) ; 
            
        }

          $this->apiContext = new ApiContext( new OAuthTokenCredential( $this->clientId, $this->secret)) ; 
         
          $this->apiContext->setConfig(config('paypal.settings'));
    }

   public function payWithPaypal(Request $req)
    {
     /*$this->validate(request(), [
        'amount'    => ['required','numeric']
        ]);*/
        $input=$req->all();
        echo $input['amount'];
        //dd($input);
        $pay_amount =50;
        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Deposit Money')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku("123123")
            ->setPrice($pay_amount);
     

        $itemList = new ItemList();
        $itemList->setItems(array($item1));

         
        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal($pay_amount); 

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Deposit money in Shopaholic Wallet")
            ->setInvoiceNumber(uniqid());

        //$baseUrl = getBaseUrl();
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl(route('paypalOk'))
        ->setCancelUrl(route('paypalCancel'));

        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
        
        //$request = clone $payment;

        try {
            $payment->create($this->apiContext);
        } catch (PayPalConnectionException $ex){
            return back()->withError('Some error occur, sorry for inconvenient');
        } catch (Exception $ex) {
            return back()->withError('Some error occur, sorry for inconvenient');
        }

        
        $approvalUrl = $payment->getApprovalLink();
         if(!empty($approvalUrl)) {
        
            request()->session()->put('amount', $pay_amount);
            return redirect($approvalUrl);
        }else {         
            return redirect()->route('wallet.index')->with( ['status' => 0,'paypal_res' => 1,'message' => 'Something went wrong...']);
            
        }
    }
       public function paypalOk(Request $request)
       {
        if(empty($request->input('PayerID')) || empty($request->input('token')))
        {
            die('Payment Filed !');
        }
       
            $paymentId=$request->get('paymentId');
            $payment=Payment::get($paymentId,$this->apiContext);
            $execution= new PaymentExecution();
            $execution->setPayerId($request->input('PayerID'));
            $result=$payment->execute($execution ,$this->apiContext);
             if($result->getState() =='approved')
             {
                echo "Thank you. The Money Good";
             }
             echo "Failed";
             dd($result);
       }
      
       public function paypalCancel()
       {
          echo "Cancel";
       }

}
