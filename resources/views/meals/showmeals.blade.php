@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <div class="panel panel-default">
   <div class="panel-heading">Show All Meals</div>
 </div>
@stop

@section('content')
<div class="container">

 <table class="table table-border">
        <thead>
      <th>Id</th>
      <th>Title</th>
      <th>description</th>
      <th>status</th>
       <th>price</th>
      <th>Image</th>
      <th>Delete</th>
      <th>Edit</th>             
        </thead>
    
<tbody>
    @foreach($meals as $meal)
    <tr>
    <td>{{$meal->id}}</td>
    <td>{{$meal->title}}</td>
    <td class='col-md-4'>{{$meal->description}}</td>
    <td>{{$meal->status}}</td>
    <td>{{$meal->price}}$</td>

    
    
    
   <td><img src="{{asset('storage/images/'.$meal->image)}}" class="img-responsive imgthum"/></td>

    <td>
   <form method="POST" action="{{route('Meals.destroy',$meal->id)}}">
         {{csrf_field()}} 
         {{method_field("DELETE")}}    
          <div class='frez-layer' id='frez' style="display: none;"></div>
      <div class="dialog-container" id='dialocont'>
      <div class="dialog-header">Confirm dialog</div>
      <div class='dialog-body' id='dialogbody'>Do you want Delete This Meal</div>
      <div class='dialog-footer'>
      <input type="submit"  name="destroy"  class='ok'  value='OK'>
           <span onclick="messconfirm.close()">Cancel</span>
   </div>
 </div> 
          <p class="btn btn-danger" onclick="messconfirm.show('Hello',messageconfirm)">X</p>
      </form>
    </td>

    <td class='col-md-2'>
        <a href="{{route('Meals.edit',$meal->id)}}"><span class="glyphicon glyphicon-edit"></span></a>
    </td>
 </tr> 
    @endforeach
 </tbody>
    </table>

</div>
<div class="paginations col-1g-12">
{{$meals->render()}}
</div>
</div>



@stop

@section('css')
 <link rel="stylesheet" type="text/css" href="{{asset('../css/dialog.css')}}">
   
@stop

@section('js')
    <script> console.log('Hi!'); </script>
     <script src="{{ asset('../js/dialog.js') }}" defer></script> 
@stop