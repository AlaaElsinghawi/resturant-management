<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Menu;
use App\Meal_Item;
use App\Item;
use Illuminate\Support\Facades\DB; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void 
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Rend erable
     */
    public function show_website()
    {
        return view ('welcome');
    }
    public function index()
    {
        return view ('home');
    }
    public function make_reservation($id)
    {

        if($id==1)
        {  
            $titleDepartement='Food-List';
            $meals=Meal::all();
            foreach ($meals as $meal) {
                $item_meals[]=meal_item::where('meal_id',$meal->id)->first(); 
            }
           for($i=0;$i<count($item_meals) ;$i++)
                { 
                $items[]=Item::find($item_meals[$i]->item_id);
                if($items[$i]->menus->type=='Food')
                {
                    $FoodMeal[]=Meal::find($item_meals[$i]->meal_id);
                }
        }
        return view('reservation.showmeals' ,compact('FoodMeal','titleDepartement'));
         
        

    }
    if($id==2)
        {  
            $titleDepartement='Hot-Drinks';
            $meals=Meal::all();
            foreach ($meals as $meal) {
                $item_meals[]=meal_item::where('meal_id',$meal->id)->first(); 
            }
           for($i=0;$i<count($item_meals) ;$i++)
                { 
                $items[]=Item::find($item_meals[$i]->item_id);
                if($items[$i]->menus->type=='hot Drink')
                {
                    $FoodMeal[]=Meal::find($item_meals[$i]->meal_id);
                }
        }
        return view('reservation.showmeals' ,compact('FoodMeal','titleDepartement'));
         
        

    }
    if($id==3)
        {  
            $titleDepartement='Col-Drinks';
            $meals=Meal::all();
            foreach ($meals as $meal) {
                $item_meals[]=meal_item::where('meal_id',$meal->id)->first(); 
            }
           for($i=0;$i<count($item_meals) ;$i++)
                { 
                $items[]=Item::find($item_meals[$i]->item_id);
                if($items[$i]->menus->type=='col drink')
                {
                    $FoodMeal[]=Meal::find($item_meals[$i]->meal_id);
                }
        }
        return view('reservation.showmeals' ,compact('FoodMeal','titleDepartement'));
         
        

    }
    else
    {
        echo "Can't This Department Please try aganin";
    }


}
public function search(Request $re)
    {
        $titleDepartement='Result Search';
        $search=$re->get('search');
        $FoodMeal=Meal::where('title','like','%'.$search.'%')->get();
        return view('reservation.showmeals' ,compact('FoodMeal','titleDepartement'));
        
    }
}
