@extends('reservation.header')
@section('order')
<div class='row showcart'>
  <section class='col-md-10'>
    <table class='table'>
  <tr>
    <td>Image</td>
  <td>name</td>
  <td>price</td>
  <td>Quantity</td>
  <td>Total Price</td>
  <td>Remove</td>


  </tr>

    
  <?php $total=0?>  
@foreach ($res as  $value) 
  
<?php

  $total+=$value['quantity'] * $value['price'];
 echo "<tr><td><img src=../storage/images/{$value['attributes']['image']} width='250px'></td>
      <td>{$value['name']}</td>
      <td>{$value['price']}</td>
      <td>{$value['quantity']}</td>
      <td>".$value['quantity'] * $value['price']."</td>";?>
      <td>
      <form method="POST" action="{{route('Shoping.destroy',$value['id'])}}">
          {{csrf_field()}} 
         {{method_field("DELETE")}}    
      <button type='submit' name='delete' value='del' class='button'><i class='delete fa fa-trash-o fa-2x'></i></button>
    </form>
      </a>
      </td>
       </tr>
    
    



 @endforeach
   <tr>
    <td colspan="5">Total</td>
    <td><?= $total ?></td>
   </tr>  
   
</table>

  </section>
  <section class="col-md-2">
    @if(!empty($res))
    <form method="POST" action="{{route('pay')}}">
              {{csrf_field()}} 
              <input type="hidden" name="quantity" value="{{$total}}">
       <input type="submit" name="paypall" class='btn btn-secondary' value='Proceed To checkout'>
      }
      }
    </form>
     @endif
  </section> 
   
  
  
</div>

@endsection('order')