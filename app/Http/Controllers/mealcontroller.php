<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Menu;
use auth;
use App\Meal_Item;
class mealcontroller extends Controller
{
    public function __construct()
    {
     $this->middleware('admin')->except('show');   
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $meal=Meal::paginate(2);
        return view('meals.showmeals')->with('meals',$meal);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $menus=Menu::all();
            
        return view('meals.create',compact('menus'));
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
            'title'=>'required','string',
            'price'=>'required','numeric',
            'image'=>'required','file',
            'description'=>'required','string',
            'status'=>'required',
            'items'=>'required',



        ]);
       if($request->hasFile('image'))
       {
        $Extimage=$request->file('image')->getClientOriginalExtension();

        $imagename=time().".".$Extimage;
        $request->file('image')->storeAs('public/images',$imagename);

       } 
       $input=$request->all();
      $input['image']=$imagename;
       $input['user_id']=auth::user()->id;
       $mealing=Meal::create($input);
      foreach($input['items'] as $item)
      {
    Meal_Item::create(['meal_id'=>$mealing->id ,'item_id'=>$item ,'discount'=>$input['discount'][$item]]);
      }
       $menus=Menu::all();
       $msg='The Meal Add Succssfuly !';
        return view('meals.create',compact('menus','msg'));
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $meal=Meal::findorfail($id);
        return view('reservation.registerorder',compact('meal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal=Meal::find($id);
        $menus=Menu::all();
        return view('meals.edit',compact('meal','menus'));
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
        $this->validate($request,[
            'title'=>'required','string',
            'price'=>'required','numeric',
            'image'=>'required','file',
            'description'=>'required','string',
            'status'=>'required',
            'items'=>'required',



        ]);
      
         if($request->hasFile('image'))
        {
            $Extimage=$request->file('image')->getClientOriginalExtension();
                                                 
            $imagename=time().".".$Extimage;
            $request->file('image')->storeAs('public/images',$imagename);
        }

        $input=$request->all();
        

        $input['image']=$imagename;
        
        $input['user_id']=auth::user()->id;
        $meal=Meal::findorfail($id);
        $meal->update($input);
       Meal_Item::where('meal_id',$id)->delete();
 
       foreach($input['items'] as $item)
      {
      Meal_Item::create(['meal_id'=>$meal->id ,'item_id'=>$item ,'discount'=>$input['discount'][$item]]);
      }

      return redirect(route('Meals.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $meal=Meal::findorfail($id)->destroy($id);
        return redirect()->back();
    }
}
