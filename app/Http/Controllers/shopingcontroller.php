<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use  Cart;
class shopingcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    $data=Cart::getContent();
    $res=$data->toArray();

 return view('Cart.showshopincart',compact('res'));


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
         $this->validate($request,[
            'quantity'=>['required','numeric','min:1','max:10']
        ]);

       $input=$request->all();
       $id= $input['mealId'];
       $data=Meal::find($id);

         $data['quantity']=$input['quantity'];
        
         
         
        $add=Cart::add([
            'id'=>$id,
            'name'=>$data['title'],
            'price'=>$data['price'],
            'quantity'=>$data['quantity'], 
            'attributes' =>array(
                     'totalprice' =>$input['quantity']*$data['price'],
                       'image' =>$data['image'])]);
         
             return redirect(route('Shoping.index'));
         
      }
      
       
        
     
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     echo "Hello world";   
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
       Cart::Remove($id);
       return redirect()->back();
    }
}
