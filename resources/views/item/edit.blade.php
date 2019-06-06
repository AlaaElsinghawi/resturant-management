@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <div class="panel panel-default">
   <div class="panel-heading">Edit Items</div>
      </div>
@stop

@section('content')
<div class="container">
    
        
          
     <form method='post' action="{{route('Items.update',$arr['items']->id)}}" enctype="multipart/form-data">
           {{method_field("PUT")}}
          {{csrf_field()}}
       <div class="row">

              <div class="form-group col-md-4">
                    <input type="text" name="title" id="title" value="{{$arr['items']->title}}" class="form-control" required/>
                    @if($errors->has('title'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('title')}}</strong>
                        </span>
                        @endif
            </div> 
            
             <div class="form-group col-md-4">
                  <select class='form-control' name='menu_id'>
                         @foreach($arr['menu'] as $men)
                          <option value="{{$men->id}}">{{$men->title}}</option>
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
                  <textarea name='description' class='form-control textarea' row='4'>{{$arr['items']->description}}</textarea>
                   @if($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('description')}}</strong>
                        </span>
                        @endif
              </div>
              
              <div class="form-group col-md-2">
             
                <img src="{{asset('storage/images/'.$arr['items']->image)}}" class="img-responsive img"/>
              </div>
               <div class="form-group col-md-5">
                  <input type='file' name='image' class='form-control' required>
                   @if($errors->has('image'))
                        <span class="invalid-feedback">
                            <strong>{{$errors->first('image')}}</strong>
                        </span>
                        @endif
              </div>
               <div class="form-group col-md-2">
                  <input type='submit' name="addItem" value="Update" class="btn btn-primary btn-block">
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