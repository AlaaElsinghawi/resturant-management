@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <div class="panel panel-default">
   <div class="panel-heading">Show New Menu</div>
 </div>
@stop

@section('content')
<div class="container">
  <div class="card">
  <div class="card-header">Menus</div>
 <table class="table table-border">
        <thead>
      <th>Id</th>
      <th>Title</th>
      <th>Type</th>
      <th>description</th>
      <th>status</th>
      <th>Image</th>
      <th>Delete</th>
      <th>Edit</th>             
        </thead>
    </tbody>
    @foreach($menus as $menu)
    <tr>
    <td>{{$menu->id}}</td>
    <td>{{$menu->title}}</td>
    <td>{{$menu->type}}</td>
    <td class='col-md-4'>{{$menu->description}}</td>
    <td>{{$menu->status}}</td>
    
   <!-- <td> <img src="{{$menu->image}}" class=' img-responsive imgthum'></td>-->
   <td class='col-md-2'>
    <img src="{{asset('storage/images/'.$menu->image)}}" class="img-responsive" width="100%" height="80px" />
  </td>

    <td>
   <form method="POST" action="{{route('delete',$menu->id)}}">
         {{csrf_field()}} 
         {{method_field("DELETE")}}    
          

           <div class='frez-layer' id='frez' style="display: none;"></div>
      <div class="dialog-container" id='dialocont'>
      <div class="dialog-header">Confirm dialog</div>
      <div class='dialog-body' id='dialogbody'>Do you want Delete This Menus</div>
      <div class='dialog-footer'>
      <input type="submit"  name="destroy"  class='ok'  value='OK'>
           <span onclick="messconfirm.close()">Cancel</span>
   </div>
 </div> 
          <p class="btn btn-danger" onclick="messconfirm.show('Hello',messageconfirm)">X</p>
      </form>
    </td>

    <td class='col-md-2'>
        <a href="/Menus/edit/{{$menu->id}}"><span class="glyphicon glyphicon-edit"></span></a>
    </td>
 </tr>
    @endforeach
 </tbody>
    </table>

</div>
</div>
<div>{{$menus->render()}}</div>
</div>


@stop

@section('css')

    <link rel="stylesheet" type="text/css" href="{{asset('../css/dialog.css')}}">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

<script src="{{ asset('../js/dialog.js') }}" defer></script> 
@stop

