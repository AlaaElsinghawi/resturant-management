<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Menu;
use App\User;
use Auth; 
class ItemsController extends Controller
{
    
    public function __construct()
    {
     $this->middleware('admin');   
    }/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index()
    {
        $items=Item::paginate(1);
        $menus=Menu::all();
        $arr=array('items'=>$items,'menus'=>$menus);
        return view('item.showitem',compact('arr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items=Item::paginate(1);
        $menus=Menu::all();
        $arr=array('items'=>$items,'menus'=>$menus);
        return view('item.createitems',compact('arr'));
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'title'=>'required','string',
            'status'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
       if(($request->hasFile('image')))
        { 
            $imageExt=$request->file('image')->getClientOriginalExtension();
            $imagename=time().'image'.$imageExt;
            $request->file('image')->storeAs('public/images',$imagename);
            
        
        }
        $input=$request->all();
       
        $input['user_id']=auth::user()->id;
        $input['image']=$imagename;
        Item::create($input);

         $items=Item::paginate(1);
        $menus=Menu::all();
        $arr=array('items'=>$items,'menus'=>$menus);
        $msg='The Item add succssfuly';
        return view('item.createitems',compact('arr' ,'msg'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $item=Item::find($id);
          $menus=Menu::all();
          $arr=array('items'=>$item,'menu'=>$menus);
       return view('item.edit',compact('arr'));
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
        $this->validate($request ,[
            'title'=>'required','string',
            'status'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);
        if($request->hasFile('image'))
        {
            $imageExt=$request->file('image')->getClientOriginalExtension();
            $imagename=time().'.'.$imageExt;
            $request->file('image')->storeAs('public/images',$imagename);
        }
        $input=$request->all();
         $input['image']=$imagename;
         $input['user_id']=auth::user()->id;
        $item=Item::find($id);
        $item->update($input);
        return redirect(route('Items.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item=Item::findorfail($id);
          $item->destroy($id);
        return redirect()->back();
    }
}
