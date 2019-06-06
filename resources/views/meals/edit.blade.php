@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
     <div class="panel panel-default">
   <div class="panel-heading">Edit Meal </div>
 </div>
@stop

@section('content')
<div class="container">
    
          
     <form method='post' action="{{route('Meals.update',$meal->id)}}" enctype="multipart/form-data">
           {{method_field("PUT")}}
          {{csrf_field()}}
       <div class="row">

              <div class="form-group col-md-4">
                    <input type="text" name="title" id="title" value="{{$meal->title}}" class="form-control">
                     @if($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                        @endif
            </div> 
             <div class="form-group col-md-4">
               <input type="text" name="price" value="{{$meal->price}}" class='form-control'>
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
                  <textarea name='description' class='form-control textarea' row='4'>{{$meal->description}}</textarea>
                   @if($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                        @endif
              </div>
              <div class="form-group col-md-2">
              
                <img src="{{asset('storage/images/'.$meal->image)}}" class="img-responsive img"/>
              </div>
               <div class="form-group col-md-10">
                  <input type='file' name='image' class='form-control' required>
                  @if($errors->has('image'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('image')}}</strong>
                        </span>
                        @endif

              </div>
             

              @foreach($menus as $menu)
              @if(count($menu->items)>0)
              <div>
              <div class="form-group col-md-4">
              <span class='title'>  {{$menu->title}}</span>

              @foreach($menu->items as $item)

              <li>

                  <input type='checkbox' value='{{$item->id}}' name='items[]'>
                  <input type='number' placeholder="discount %" name='discount[{{$item->id}}]' class='discount'>
                   {{$item->title}}

                                  
              </li>
               @endforeach
              </div>
               
                
                  @endif
                  @endforeach
              </div>
              <div class='col-md-4'>
                @if($errors->has('items'))
                        <p class="invalid-feedback">
                            <strong><br>You shoud select item from any menus !</strong>
                        </p>
                  @endif
              </div>
               

             
            <div class="form-group col-md-4">
                  <input type='submit' name="add$meal" value="Update" class="btn btn-primary btn-block">
              </div>
              
            </div>
     </form>
   </div>
 </div>

@stop

@section('css')
    
    <link rel="stylesheet" type="text/css" href="{{asset('../css/dialog.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop