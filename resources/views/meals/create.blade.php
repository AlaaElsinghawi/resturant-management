@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@if(isset($msg))
   <div class="dialog-container" id='dialocont'>
               
                <div class='dialog-body' id='dialogbody'>
                  {{$msg}}
                  <span class='glyphicon glyphicon-remove-circle
dele' onclick="show();">
</span>
                </div>
                
              </div>
    @endif
    <div class="panel panel-default">

         <div class="panel-heading">add New meals</div>
       </div>
         
@stop
@section('content')    
        <div class="container">
     <form action="{{route('Meals.store')}}" method="post" enctype="multipart/form-data">
                 {{csrf_field()}}
                 
       <div class="row">
       
          <div class="form-group col-md-4">
              <input type="text" name="title" id="title" placeholder="meals Title" class="form-control" required/>
                @if($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                        @endif
          </div> 
            
               <div class="form-group col-md-4">
        <input type="text" name="price" id="price" placeholder="pric of Meal" class="form-control" required/>
          @if($errors->has('price'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('price')}}</strong>
                        </span>
                        @endif
      </div>
               <div class="form-group col-md-4">
                 <input type="radio" name="status" value="1">
                 <label>Active</label>
                 <input type="radio" name="status" value="0">
                 <label>InActive</label>
              </div>
                @if($errors->has('status'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('status')}}</strong>
                        </span>
                        @endif
              
               <div class="form-group col-md-10">   
                  <textarea name='description' class='form-control textarea' row='4'></textarea>
              </div>
               <div class="form-group col-md-9">
                  <input type='file' name='image' class='form-control' required>
              </div>
                @if($errors->has('image'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('image')}}</strong>
                        </span>
                        @endif
              @foreach($menus as $menu) 
              @if(count($menu->items)>0 || $menu->type=='hot Drink' ||$menu->type=='col drink' )
               <div class="form-group col-md-4">
               <span class='title'>  {{$menu->title}}</span>
              @if (!empty($menu->items))

              @foreach($menu->items as $item)
              <li>
                  <input type='checkbox' value='{{$item->id}}' name='items[]'>
                  <input type='number' placeholder="discount %" name='discount[{{$item->id}}]' class='discount'>
                               {{$item->title}}    
              </li>
               @endforeach
               @endif
              
           

               
               
              </div>
              @endif
              @endforeach
              <div class='col-md-3'>
                
                 @if($errors->has('items'))
                        <span class="invalid-feedback">
                            <strong>You shoud select item from any menus !</strong>
                        </span>
                    @endif
              </div>
                  
            </div>
             <div class="row">
                <div class="form-group col-md-3 col-md-push-4">
                <input type='submit' name="addmeals" value="Add Meals" class="btn btn-primary btn-block">
                 </div>
              
              </div>

     </form>
   </div>
 </div>

</div>





@stop

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('../css/styles.css')}}">
   
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('../js/hiddenenmsg.js')}}" defer></script>
@stop