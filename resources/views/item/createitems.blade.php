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
   <div class="panel-heading">add New Items</div>
      </div>
@stop

@section('content')
<div class="container">
    
    
        
     <form action="{{route('Items.store')}}" method="post" enctype="multipart/form-data">
                 {{csrf_field()}}
                 
       <div class="row">
       
          <div class="form-group col-md-4">
              <input type="text" name="title" id="title" placeholder="items Title" class="form-control" required/>
               @if($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                        @endif
          </div> 
             <div class="form-group col-md-4">
                  <select class='form-control' name='menu_id'>
                    @foreach($arr['menus'] as $menu)
                       <option value='{{$menu->id}}'>{{$menu->title}}</option> 

                        @endforeach
                  </select>
                        
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
                  @if($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                        @endif
              </div>
               <div class="form-group col-md-8">
                  <input type='file' name='image' class='form-control' required>
                   @if($errors->has('image'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('image')}}</strong>
                        </span>
                        @endif
              </div>
               <div class="form-group col-md-2">
                  <input type='submit' name="additems" value="add items" class="btn btn-primary btn-block">
              </div>
            </div>
     </form>
   </div>


   
@stop

@section('css')
  
    <link rel="stylesheet" type="text/css" href="{{asset('../css/styles.css')}}">

@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('../js/hiddenenmsg.js')}}" defer></script>
@stop
    