<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Menu;
use App\Item;
use auth;



class menuController extends Controller
{
    public function __construct()
    {
     $this->middleware('admin');   
    }
    public function show()
    {
         $menus=Menu::paginate(3);
    	return view('menus.viewmenus')->with('menus' ,$menus);
    }
    public function create()
    {
        
        return view('menus.creatmenu');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required','string',
             'type'=>'required',
             'description'=>'required','string',
              'status'=>'required',
               'image'=>'required',

    ]);

        if(($request->hasFile('image')))
        { 
            $imageExt=$request->file('image')->getClientOriginalExtension();
            $imagename=time().'image'.$imageExt;
            $request->file('image')->storeAs('public/images',$imagename);
        }
    	$menus= new Menu();
        $menus->title=$request->input('title');
        $menus->type=$request->input('type');
        $menus->description=$request->input('description');
        $menus->status=$request->input('status');
        $menus->image=$imagename;
        $menus->user_id=auth()->user()->id;
        $menus->save();
         $msg='The Menu Creat successfuly';
        return view('menus.creatmenu',compact('msg'));
     
       
    }

  public function delete($id)
    {
        $menu=Menu::find($id)->delete();
        return redirect()->back();
      }
    public function edit($id)
    {
        $menu=Menu::findorfail($id);
        return view('menus.edit')->with('menu',$menu);
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required','string',
             'type'=>'required',
             'description'=>'required','string',
              'status'=>'required',
               'image'=>'required',

    ]);

         if(($request->hasFile('image')))
        { 
            $imageExt=$request->file('image')->getClientOriginalExtension();
            $imagename=time().'image'.$imageExt;
            $request->file('image')->storeAs('public/images',$imagename);
            
        
        }
      $menus=Menu::find($id);
       $menus->title=$request->input('title');
        $menus->type=$request->input('type');
        $menus->description=$request->input('description');
        $menus->status=$request->input('status');
        $menus->image= $imagename;
        $menus->user_id=auth()->user()->id;
        $menus->save();
        return redirect(route('show'));

    }
}
