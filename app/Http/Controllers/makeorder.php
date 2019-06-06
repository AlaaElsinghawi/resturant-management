<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Order_Meal;
use App\Customer;
use App\Order;
use App\Meal;
use Cart;
class makeorder extends Controller
{
   
   public function __construct()
    {
     $this->middleware('admin')->except('store');   
    } /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders=Order::all(); 
        return view('order.showorder',compact('orders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       /*vallidate retuen value $errors array get value*/
         $total=0;
        $input=$request->all();
        $this->validate($request ,[
         'name'=>['required','string'],
         'address'=>['required','string'],
          'phone'=>['required','numeric']]);
        echo "done";
        /*$total=$input['price']*$input['numbermeal'];

           $customer=Customer::where('email',$input['_email'])->first();
                if(!empty($customer))
                {
                    $input['time_order']=$input['date'];
                    $input['total']=$total;
                   $input['customer_id']=$customer->id;
                    $order=Order::create($input);
                Order_Meal::create(['order_id'=>$order->id,'meal_id'=>$input['mealid'],'number_meal'=>$input['numbermeal']]);
                 return redirect()->back();
                }
                else
                {
                echo"invalid Email or pasword";
                }
             }
     else
         {
           
                 $this->validate($request, [
                'name' => ['required', 'string', 'max:20'],
                'email'=> ['required', 'string', 'email', 'max:50', 'unique:customers'],
                'password'=>['required', 'string', 'min:6'],
                'address'=>['required','string'],
                 'phone'=>['required','integer','min:11'],

                 'time_order'=>['required'],
                  'mealnumber'=>['required','integer']
                  ]);
                  $total=$input['price']*$input['mealnumber'];
                $customer=Customer::create($input);
                $input['total']=$total;
                $input['customer_id']=$customer->id;
                $order=Order::create($input);
                Order_Meal::create(['order_id'=>$order->id,'meal_id'=>$input['mealid'],'number_meal'=>$input['mealnumber']]);
                return redirect()->back();
          }       
  
        
        /*foreach ($input['mealitem'] as $value) {
            $meals[]=Meal::find($value);
        }
     
        foreach ($input['numbermeal'] as  $value) {
            if($value !=null)
            { $number[]=$value;}
           
        }

      
        for($i=0 ;$i<count($meals) ;$i++)
        {
            $total+=$meals[$i]->price*$number[$i];
        }
        

 for($i=0 ;$i<count($meals) ;$i++)
        {

     Order_Meal::create(['order_id'=>$order->id,'meal_id'=>$meals[$i]->id,'number_meal'=>$number[$i]]);
        }*/
/*
    $customer=Customer::create($input);
       $input['total']=$total;
       $input['customer_id']=$customer->id;
        $order=Order::create($input);
 Order_Meal::create(['order_id'=>$order->id,'meal_id'=>$input['mealid'],'number_meal'=>$input['numbermeal']]);
     return redirect()->back();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=Order::where('id',$id)->get();

        return view('order.detailsorder',compact('order'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::find($id)->delete();
    }
}
