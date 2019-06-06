@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <div class="panel panel-default">
   <div class="panel-heading">Show all Order</div>
      </div>
@stop

@section('content')
 
<div class="container">
    
  
    

 <div class="card">
  <div class="card-header">items</div>
 <table class="table table-border">
        <thead>
      <th>Id</th>
      
      <th>Detail Order</th>
      <th>date meal</th>
       <th>Customer name</th>
       <th>Phone</th>
       <th>address</th>
      <th> cost Meal</th>
       <th class='col-md-2'>Cancel order</th>
            
        </thead>
        <tbody>
    @foreach($orders as $order)
    <tr>
    <td>{{$order->id}}</td>
    <td><a href="{{route('Order.show',$order->id)}}" class='btn btn-primary'>Detials</td>
    <td>{{$order->time_order}}</td>
    <td>{{$order->customer->name}}</td>
    <td>{{$order->customer->phone}}</td>
    <td>{{$order->customer->address}}</td>
     <td>{{$order->total}}</td>

    <td>
   <form method="POST" action="{{route('Order.destroy',$order->id)}}">
         {{csrf_field()}} 
         {{method_field("DELETE")}}    
          <input type="submit"  name="destroy" value="X" class="btn btn-danger">
      </form>
    </td>
 </tr>
    @endforeach
 </tbody>
    </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop