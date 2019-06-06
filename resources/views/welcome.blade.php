<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	 <meta name="csrf-token" content="{{ csrf_token() }}">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Resturant</title>
         <link rel="stylesheet" href="css/animate.css">
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
	     <link rel="stylesheet" type="text/css" href="css/welcome.css">

       <!--IE-->
	     <script type="text/javascript" src="js/html5shiv.min.js"></script>
   	   <script type="text/javascript" src="js/respond.min.js"></script>
       <script src="{{ asset('js/app.js') }}" defer></script>
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script type="text/javascript" src='js/plug.js'></script>

	  	 
	  
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class='container'>
    
    <a class="navbar-brand" href="#">Resturant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="#about">About US <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('reservation',1)}}">Reservation</a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Department
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('reservation',1)}}">Foods</a>
          <a class="dropdown-item" href="{{route('reservation',2)}}">Hot Drinks</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{route('reservation',3)}}">Col Drinks</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="{{route('Shoping.index')}}"><i  class="fa fa-shopping-cart fa-3x"></i>Cart</a>
      
      </li>
    </ul>
   
  </div>
   </div>
</nav>
 
  

<!-- start Carouser-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="storage/slider/01.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="storage/slider/02.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="storage/slider/03.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End Carouser-->
<!-- start section about us-->

 <!--
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                    <img style="margin-bottom:80px" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms" src="../storage/images/cooker-img.png" alt="cookerblog-img">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Your <span>Restaurant’s</span> </br> Website Has To Look <span>Good</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </br>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
<!-- End section about us-->
 <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Latest <span>From</span> the <span>Blog</span></h1>
                        <ul>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                <div class="blog-img">
                                    <img src="storage/images/blog-img-1.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="400ms">
                                <div class="blog-img">
                                    <img src="../storage/images/blog-img-2.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="500ms">
                                <div class="content-left">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                                <div class="blog-img-2">
                                    <img src="../storage/images/blog-img-3.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="600ms">
                                <div class="content-left">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                                <div class="blog-img-2">
                                    <img src="../storage/images/blog-img-4.jpg" alt="blog-img">
                                </div>
                            </li>
                            <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="700ms">
                                <div class="blog-img">
                                    <img src="../storage/images/blog-img-5.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="800ms">
                                <div class="blog-img">
                                    <img src="../storage/images/blog-img-6.jpg" alt="blog-img">
                                </div>
                                <div class="content-right">
                                    <h3>Homestyle Chicken Pot Pie</h3>
                                    <p>Prepared in true New England fash-ion. Tender all-white meat chicken simmered...</p>
                                </div>
                            </li>
                        </ul>
                       
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->
<!-- start section our Product-->
<section class="product">
  <div class="container">
    <h3 class="wow flash" data-wow-duration="5s" data-wow-delay="400ms">Our Amazing Product</h3>
  <div class="row">
     <div class="col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="400ms">
      <span style="color:#2176bd;font-size:20px ;font-family: fantasy;"> Foods </span>
      <ul class="list-unstyled">
        <li>Fast</li>
        <li>Good</li>
        <li>Inexpensive</li>
        <li>Fresh</li>
      </ul>
      <a href="{{route('reservation',1)}}" class="btn btn-primary">Order Now</a>
     </div>
  <div class="col-md-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="400ms">
    <span style="color:#4aa0e6 ;font-size:20px ;font-family: fantasy;"> Col Drink </span>
  <ul class="list-unstyled">
        <li>Fast</li>
        <li>Good</li>
        <li>Inexpensive</li>
        <li>Fresh</li>
      </ul>
        <a href="{{route('reservation',3)}}" class="btn btn-info">Order Now</a>
    </div>
  <div class="col-md-4 wow fadeInRight" data-wow-duration="1s" data-wow-delay="400ms"">
    <sapn style="color: red ;font-size:20px;font-family: fantasy;">  Hot Drink </sapn>
 
  <ul class="list-unstyled">
        <li>Fast</li>
        <li>Good</li>
        <li>Inexpensive</li>
        <li>Fresh</li>
      </ul>
 <a href="{{route('reservation',2)}}" class="btn btn-danger">Order Now</a>
    </div>
    </div>
  </div>
  </div>
  
 
</section>
<!-- End section our Product-->
<!-- strat section contact us-->
<section class='contact-us text-center'>
    <div class='container'>
        <i class='fa fa-headphones fa-5x'></i>
        <h3>Tell Us What You Fell</h3>
     
         <form>
             <div class="row">
            <div class='col-md-6'>
            <div class='form-group'>
                 <input type="text" name="name" class='form-control' placeholder="Name">
            </div>
            <div class='form-group'>
                  <input type="email" name="email" class='form-control' placeholder="write Your email">

            </div>
            <div class="form-group">
                <input type="phone" name="phone"  class='form-control' placeholder="writePhone">
            </div>
           </div>
           <div class='col-md-6'>
               <div class='form-group'>
                   <textarea class="form-control" name='massage' placeholder="Send Message"></textarea>
               </div>
                <div class='form-group'>
                     <input type="submit" name="send"  value ='Tell us'class="btn btn-primary btn-block">
                </div>
                    
              </div>
           </div>

         </form>


</div>   
</section>
<!-- End section contact us-->
<!-- start section  footer -->
<section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="200ms">
                        <h3>CONTACT <span>INFO</span></h3>
                        <div class="info">
                            <ul>
                              <li>
                                  <h4><i class="fa fa-envelope"></i>E mail</h4>
                                  <p>alaaelsin96@gmail.com</p>
                                  
                                </li>
                                <li>
                                  <h4>
                                    <i class="fa fa-map-marker">
                                    </i>Address</h4>
                                   <p>Ash Sharqia Governorate Egypte</p>
                                    </li>
                                    <li>
                                  <h4><i class="fa fa-phone"></i>Telefone</h4>
                                  <p>01140972654</p>
                                    
                                </li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="700ms">
                        <h3>LATEST <span>BLOG POSTS</span></h3>
                        <div class="blog">
                            <ul>
                                <li>
                                    <h4><a href="#">Nov 9-2018</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien</p>
                                </li>
                                <li>
                                    <h4><a href="#">Sep 8-2018</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Curabitur ut blandit sapien</p>
                                </li>
                            </ul>                
                        </div>
                    </div>
                </div>
                <!-- .col-md-4 close -->
                <div class="col-md-4">
                    <div class="block wow fadeInLeft"  data-wow-delay="1100ms">
                        <div class="gallary">
                            
      
                        <div class="social-media-link">
                            <h3>Follow <span>US</span></h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                </li>
                                 <li>
                                    <a href="#">
                                        
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
                <!-- .col-md-4 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #footer close -->
 <section class='footer'>
      <div class='container'>
        <div class='row'>
           <p class=' col-md-8 Copyright'> &copy;2018 Copyright Design </p>
            <p class='col-md-4 desingname'>Alaa Mohammed PHP Developer</p>
          </div>
   
    </section>
    <!-- Endsection Footer-->
<!--start section loading
<section class='loading'>
  <div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>
</section>-->
<!-- End section loading-->
<script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript">
        
              new WOW().init();
    </script>
</body>
</html>
<!--
	md-visible
	md-hidden
	col-lg-offset-4
	col-lg-push-4
	col-lg-pull-8
-->