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
      $total=$req->input('quantity');

        $data=Cart::getContent();
        $res=$data->toArray();

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");


foreach ($res as $value) {

    

     $quantity[]=$value['quantity'];
      $item = new Item();
        $item->setName($value['name'])
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($value['price']);

     

   }

       

        $itemList = new ItemList() ;
        $itemList->setItems( [ $item ] );


        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal( $total );


        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("amount");
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl('http://localhost:8000/ok')
                      ->setCancelUrl('http://localhost:8000/cancel');
     
            $payment = new Payment();
            $payment->setIntent("payment ok")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);
           
        try 
        {
           $payment->create($this->apiContext);
        } 

   catch(PayPalConnectionException $e){
       echo $e->getCode(); // Prints the Error Code
       echo $e->getData();
       die($e);
   }catch (Exception $ex) {
       die($ex);
     }
      
        $approvalUrl = $payment->getApprovalLink();

        return redirect( $approvalUrl ) ;
   
       }

       public function paypalOk()
       {
          echo "Ok";
       }
      
       public function paypalCancel()
       {
          echo "Cancel";
       }

}
