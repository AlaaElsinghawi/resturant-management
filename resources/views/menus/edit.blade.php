@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <div class="panel panel-default">
   <div class="panel-heading">Edit Menu</div>
 </div>
@stop

@section('content')
<div class="container">        
        
     <form method='post' action="{{route('update',$menu->id)}}" enctype="multipart/form-data">
           {{method_field("PUT")}}
          {{csrf_field()}}
       <div class="row">

              <div class="form-group col-md-4">
                <input type="text" name="title" id="title" value="{{$menu->title}}" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" required/>
                  @if($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                        @endif
            </div>
             <div class="form-group col-md-4">
                  <select class='form-control' name='type'>
                          <option value='Food'>Food</option>
                          <option value='hot Drink'>Hot Drink</option>
                          <option value='col drink'>Col Drink</option>
                  </select>
                     @if($errors->has('type'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('type')}}</strong>
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
                  <textarea name='description' class='form-control textarea' row='4'>{{$menu->description}}</textarea>
              </div>
                @if($errors->has('status'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                      @endif
              <div class="form-group col-md-2">
             
                <img src="{{asset('storage/images/'.$menu->image)}}" class="img-responsive img"/>
              </div>

               <div class="form-group col-md-5">
                  <input type='file' name='image' class='form-control'>
                   @if($errors->has('image'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('image')}}</strong>
                        </span>
                        @endif

              </div>
              
              
               <div class="form-group col-md-2">
                  <input type='submit' name="addmenu" value="Update" class="btn btn-primary btn-block">
              </div>
            </div>
     </form>
   

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="{{asset('../css/dialog.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop