<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/app.js') }}" defer></script> 
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	</head>
	<body>
    <!--  start section header-->
    <section class='header'>
      <div class='overlay'>
      
        <div class='container'>
        <h1>Reserved Your Order Now</h1>
      </div>
    </div>
    </section>
    
    <!-- End secion header-->
    <!-- start section Foods-->
<section class='list-Food'>
<div class='container'>
  <h2><?=$titleDepartement?></h2>
<div class='row'>
   <?php
   if(isset($FoodMeal))
   {
    foreach($FoodMeal as $meal)
       {
                  echo "<div class='col-md-4'>
                     <img src=../storage/images/".$meal->image." class='imagestyles'>
                     <div class='prod-body'>
                        <h5>".$meal->title."</h5>
                        <p class='prod-text'>".$meal->description."</p>
                        <h5 class='prod-price'>".$meal->price."</h5>
                        <a href=/registerorder/".$meal->id." class='btn'>shop Now</a>
                     </div>
                    </div>";
                  }

   }
   else
                  {
                    echo"<h3 class='product'>Not Found Product in   $titleDepartement <h3>";
                  }
    
            
?>
</div><!-- End Row-->
</div><!-- End Container-->
</section>
<!-- start section footer-->
    <section class='footer'>
      <div class='container'>
        <div class='row'>
           <p class=' col-md-8 Copyright'> &copy;2018 Copyright Design </p>
            <p class='col-md-4 desingname'>Alaa Mohammed PHP Developer</p>
          </div>
   
    </section>
    <!-- End section footer-->
	</body>
</html>