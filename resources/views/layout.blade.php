<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | The Yummy Pizza</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL::to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL::to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL::to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">

    <style type="text/css">
      .paymentWrap {
        padding: 50px;
      }

      .paymentWrap .paymentBtnGroup {
        max-width: 800px;
        margin: auto;
      }

      .paymentWrap .paymentBtnGroup .paymentMethod {
        padding: 40px;
        box-shadow: none;
        position: relative;
      }

      .paymentWrap .paymentBtnGroup .paymentMethod.active {
        outline: none !important;
      }

      .paymentWrap .paymentBtnGroup .paymentMethod.active .method {
        border-color: #4cd264;
        outline: none !important;
        box-shadow: 0px 3px 22px 0px #7b7b7b;
      }

      .paymentWrap .paymentBtnGroup .paymentMethod .method {
        position: absolute;
        right: 3px;
        top: 3px;
        bottom: 3px;
        left: 3px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        border: 2px solid transparent;
        transition: all 0.5s;
      }

      .paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
        background-image: url("http://citinewslive.com/wp-content/uploads/2017/01/cash-handed-over.jpg");
      }

      .paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
        background-image: url("https://www.paypalobjects.com/webstatic/mktg/logo-center/PP_Acceptance_Marks_for_LogoCenter_266x142.png");
      }

      .paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
        background-image: url("http://www.theindependentbd.com/assets/news_images/bkash.jpg");
      }

      .paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
        background-image: url("https://cdn0.iconfinder.com/data/icons/50-payment-system-icons-2/480/Payza.png");
      }

      .paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
        background-image: url("http://www.busbooking.lk/img/carousel/BusBooking.lk_ezCash_offer.png");
      }

      .paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
        border-color: #4cd264;
        outline: none !important;
      }
    </style>
  </head><!--/head-->

  <body>
    <!--header-->
    <header id="header">
      <!--header_top-->
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="contactinfo">
                <ul class="nav nav-pills">
                  <li><a href="#"><i class="fa fa-phone"></i> (+91) 995-339-4165</a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i> nikhil_gyan@yahoo.co.in</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-6">
              <div class="social-icons pull-right">
                <ul class="nav navbar-nav">
                  <li><a href="https://www.facebook.com/nikhil.gyan.1" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="https://twitter.com/nikhil_gyan" target="_blank"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="https://www.linkedin.com/in/nikhil-gyan-a9b95845/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header_top-->
        
      <!--header-middle-->
      <div class="header-middle">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="logo pull-left">
                <a href="{{URL::to('/')}}"><!-- <img src="{{URL::to('frontend/images/home/logo.png')}}" alt="The Yummy Pizza" /> --><h3>The Yummy Pizza</h3></a>
              </div>

              <!--
              <div class="btn-group pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                    USA
                    <span class="caret"></span>
                  </button>
              
                  <ul class="dropdown-menu">
                    <li><a href="#">America</a></li>
                    <li><a href="#">Netherland</a></li>
                  </ul>
                </div>
                            
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                    USD ($)
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="#">USD ($)</a></li>
                    <li><a href="#">EUR (&euro;)</a></li>
                  </ul>
                </div>
              </div>
              -->
            </div>

            <div class="col-sm-8">
              <div class="shop-menu pull-right">
                <ul class="nav navbar-nav">
                  <?php
                  $customer_id=Session::get('customer_id');
                  $shipping_id=Session::get('shipping_id');
                  
                  if($customer_id ==NULL && $shipping_id==NULL) {
                    ?>
                  <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                    <?php
                  }

                  if($customer_id !=NULL && $shipping_id==NULL) {
                    ?>
                  <li><a href="{{URL::to('/checkout')}}">Checkout</a></li>
                    <?php
                  }

                  if($customer_id !=NULL && $shipping_id!=NULL) {
                    ?>
                  <li><a href="{{URL::to('/payment')}}">Checkout</a></li>
                    <?php
                  }
                  ?>

                  <li><a href="{{URL::to('/show-cart')}}"><i class="fa fa-shopping-cart"></i> Cart</a></li>

                  <?php
                  if($customer_id != NULL) {
                    ?>
                  <li><a href="{{URL::to('/customer_logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                    <?php
                  }
                  else {
                    ?>
                  <li><a href="{{URL::to('/login-check')}}"><i class="fa fa-lock"></i> Login</a></li>
                    <?php
                  }
                  ?>           
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/header-middle-->
    
      <div class="header-bottom"><!--header-bottom-->
        <div class="container">
          <div class="row">
            <div class="col-sm-9">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <div class="mainmenu pull-left">
                <ul class="nav navbar-nav collapse navbar-collapse">
                  <li><a href="{{URL::to('/')}}" class="active">Home</a></li>
                  <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                    <ul role="menu" class="sub-menu">
                      <?php $customer_id=Session::get('customer_id'); ?>
                      <?php if($customer_id != NULL){?>
                      <li><a href="{{URL::to('/checkout')}}"> Checkout</a></li>
                      <?php  }else{?>
                      <li><a href="{{URL::to('/login-check')}}"> Checkout</a></li>
                      <?php } ?>
                      <li><a href="{{URL::to('/show-cart')}}">Cart</a></li>
                    </ul>
                  </li>
                  <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                </ul>
              </div>
            </div>
            <!-- <div class="col-sm-3">
              <div class="search_box pull-right">
                <input type="text" placeholder="Search"/>
              </div>
            </div> -->
          </div>
        </div>
      </div><!--/header-bottom-->
    </header><!--/header-->

    <?php
    $all_published_slider=DB::table('tbl_slider')
                            ->where('publication_status',1)
                            ->get(); 
    ?>

    @yield('slider');
 
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="left-sidebar">
            <h2>Category</h2>
            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
              <div class="panel panel-default">
                <?php
                $all_published_category=DB::table('tbl_category')
                                      ->where('publication_status',1)
                                      ->orderBy('category_id', 'ASC')
                                      ->get();
                foreach($all_published_category as $v_category) {
                  ?>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></h4>
                  </div>
                </div>
                  <?php
                }
                ?> 
              </div><!--/category-products-->
            </div>
                        
            <div class="shipping text-center"><!--shipping-->
              <img src="images/home/shipping.jpg" alt="" />
            </div><!--/shipping-->
          </div>
        </div>
        
        <div class="col-sm-9 padding-right">
          <div class="features_items"><!--features_items-->
            @yield('content')
          </div>
        </div>
      </div>
    </section>
    
    <!--Footer-->
    <footer id="footer">
      <!-- <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
              <div class="companyinfo">
                <h2><span>The Yummy Pizza</span>-Ordering</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
              </div>
            </div>
      
            <div class="col-sm-7">
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{URL::to('frontend/images/home/Beef Masala.jpg')}}" alt="" />
                    </div>
      
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>08 July 2018</h2>
                </div>
              </div>
                        
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{URL::to('frontend/images/home/Prawn Masala.jpg')}}" alt="" />
                    </div>
      
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>08 July 2018</h2>
                </div>
              </div>
                        
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{URL::to('frontend/images/home/Beef Masala.jpg')}}" alt="" />
                    </div>
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>08 July 2018</h2>
                </div>
              </div>
                        
              <div class="col-sm-3">
                <div class="video-gallery text-center">
                  <a href="#">
                    <div class="iframe-img">
                      <img src="{{URL::to('frontend/images/home/Beef Chili Onion1.jpg')}}" alt="" />
                    </div>
                    <div class="overlay-icon">
                      <i class="fa fa-play-circle-o"></i>
                    </div>
                  </a>
                  <p>Circle of Hands</p>
                  <h2>08 July 2018</h2>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="address">
                <img src="{{URL::to('frontend/images/home/Beef Chili Onion.jpg')}}" alt="" />
                <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
        
      <div class="footer-widget">
        <div class="container">
          <div class="row">
            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Service</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Online Help</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Order Status</a></li>
                  <li><a href="#">Change Location</a></li>
                  <li><a href="#">FAQ’s</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Quick Food</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">PIZZA</a></li>
                  <li><a href="#">APPETIZER</a></li>
                  <li><a href="#">BURGER & SANDWICH</a></li>
                  <li><a href="#">CHICKEN</a></li>
                  <li><a href="#">PRAWN</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="single-widget">
                <h2>Policies</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Terms of Use</a></li>
                  <li><a href="#">Privecy Policy</a></li>
                  <li><a href="#">Refund Policy</a></li>
                  <li><a href="#">Billing System</a></li>
                  <li><a href="#">Ticket System</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-2">
              <div class="single-widget">
                <h2>About The Yummy Pizza</h2>
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="#">Company Information</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Store Location</a></li>
                  <li><a href="#">Affillate Program</a></li>
                  <li><a href="#">Copyright</a></li>
                </ul>
              </div>
            </div>

            <div class="col-sm-3 col-sm-offset-1">
              <div class="single-widget">
                <h2>About The Yummy Pizza</h2>
                <form action="#" class="searchform">
                  <input type="text" placeholder="Your email address" />
                  <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                  <p>Get the most recent updates from <br />our site and be updated your self...</p>
                </form>
              </div>
            </div>          
          </div>
        </div>
      </div>
        
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <p class="pull-left">Copyright © <?= date("Y") ?> The Yummy Pizza. All rights reserved.</p>
            <p class="pull-right">Developed by <span><a target="_blank" href="https://stackoverflow.com/users/5452282/nikhil-gyan">Nikhil Gyan</a></span></p>
          </div>
        </div>
      </div>
    </footer><!--/Footer-->

    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.j')}}s"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
  </body>
</html>