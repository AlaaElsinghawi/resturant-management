@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <div class="panel panel-default">
   <div class="panel-heading">detils Order</div>
      </div>
@stop

@section('content')
 
<div class="container">
  <div class="card">
  <div class="card-header">items</div>
 <table class="table table-border">
        <thead>
      
      <th>name Meal</th>
      <th>number Meal</th>
      <th>number order</th>
      <td></td>
  </thead>



    <tr>
    	<td>order number {{$order[0]->id}}</td>
    	<td>
     <?php
     
        foreach ($order[0]->meals as  $meal) {
            echo"<p'>". $meal->title."</p>";
          }
      ?>
    </td>
    <td>
      <?php
      $order_meal=App\Order_Meal::where('order_id',$order[0]->id)->get();
        foreach ($order_meal as $number) {
            echo "<p>".$number->number_meal."</p>";
        }
      ?>
  </td>
  </tr>
  
    

</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop