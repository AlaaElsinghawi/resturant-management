@extends('reservation.header')
@section('order')
<section class='list-Food'>
<div class='container'>
  <div class="row">
      <div class="col-md-3">Shoping cart</div>
      <div class="col-md-3">Shoping cart</div>
      <div class="col-md-2">Quantity</div>
      <div class="col-md-2">Total Price</div>
      <div class="col-md-2">Add to cart</div>
  </div>
  <hr>
  <!--{{route('Shoping.store')}}-->
    <form method='POST' action="{{route('Shoping.store')}}">
            {{csrf_field()}}
<div class='row'>
        <div class='col-md-3'>  
           <img src='../storage/images/{{$meal->image}}' height="350px" class='imagestyles'>
        </div>
        <div class='col-md-3'>
           <div class='prod-body'>
         <h5>{{$meal->title}}</h5>
           <p class='prod-text'>{{$meal->description}}</p>
        <p class='prod-price' id='price'>{{$meal->price}}</p>$
    
        </div>
         </div>

            <div class="col-md-2">
              <input type="number" id="input" name="quantity" min="1" max="5"  onkeyup="
             calculate()" class="form-control {{($errors->has('quantity')) ?'is-invalid':''}}" required="required">
             @if($errors->has('quantity'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('quantity') }}</strong>
               
            </span>
             @endif
              
            
            </div>  

        <div class='col-md-2'>
           <div class='reservation'>
            <p class='Total'>
              <h5></h5>
              <span id="calc"></span>$
             </p>
           </div>
         </div>
         
            <div class='col-md-2'>
             
              <input type="hidden" name="mealId" value="{{$meal->id}}">  
             <p class='btn btn-primary btn-block' onclick="messconfirm.show('Hello',messageconfirm)">Add To Cart</p>
           </div>
                <div class='frez-layer' id='frez' style="display: none;"></div>
                <div class="dialog-container" id='dialocont'>
                <div class="dialog-header">Confirm dialog</div>
                <div class='dialog-body' id='dialogbody'>Do you want add This Meal</div>
                <div class='dialog-footer'>
              
                 <input type="submit" name="ordersave"  class='ok' onclick="messconfirm.ok()" value='OK'>
               <span href=""onclick="messconfirm.close()">Cancel</span>
             </div>
              </div>
          </div>
           </form>
          </div>

        </div>
     
  </section>
  
  

 

   
  <script src="{{ asset('js/special.js') }}" defer></script> 
@endsection('order')