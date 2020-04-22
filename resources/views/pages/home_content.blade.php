@extends('layout')
@section('content')
@include('slider')
<h2 class="title text-center">Features Items</h2>
  <?php
  foreach($all_published_product as $v_published_product) {
    ?>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="{{URL::to($v_published_product->product_image)}}" style="height: 300px;" alt="" />
          <h2>$ {{$v_published_product->product_price}}</h2>
           <p>{{$v_published_product->product_name}}</p> 
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>

        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$ {{$v_published_product->product_price}}</h2>
            <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><p>{{$v_published_product->product_name}}</p></a>
            <a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
      </div>
      
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i>{{$v_published_product->manufacture_name}}</a></li>
          <li><a href="{{URL::to('/view_product/'.$v_published_product->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
        </ul>
      </div>
    </div>
  </div>
    <?php
  }
  ?>     
</div><!--features_items-->
    
<!--category-tab-->
<div class="category-tab">
  <div class="col-sm-12">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#APPETIZER" data-toggle="tab">APPETIZER</a></li>
      <li><a href="#BURGERnSANDWICH" data-toggle="tab">BURGER & SANDWICH</a></li>
      <li><a href="#CHICKEN" data-toggle="tab">CHICKEN</a></li>
      <li><a href="#DRINK" data-toggle="tab">DRINK</a></li>
      <li><a href="#NOODLES" data-toggle="tab">NOODLES</a></li>
      <li><a href="#RICE" data-toggle="tab">RICE</a></li>
    </ul>
  </div>

  <div class="tab-content">
    <?php
    $product_by_category=DB::table('tbl_products')
                            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                            ->select('tbl_products.*','tbl_category.category_name')
                            ->where('tbl_category.category_id',19)
                            ->where('tbl_products.publication_status',1)
                            ->limit(4)
                            ->get();
    ?>
    <div class="tab-pane fade active in" id="APPETIZER" >
      <?php
      foreach($product_by_category as $product) {
        ?>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{URL::to($product->product_image)}}" alt="" />
              <h2>$ {{$product->product_price}}</h2>
              <p>{{$product->product_name}}</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>

            <div class="product-overlay">
              <div class="overlay-content">
                <h2>$ {{$product->product_price}}</h2>
                <p>{{$product->product_name}}</p>
                <a href="{{URL::to('/view_product/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
    </div>
            
    <?php
    $product_by_category=DB::table('tbl_products')
                            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                            ->select('tbl_products.*','tbl_category.category_name')
                            ->where('tbl_category.category_id',20)
                            ->where('tbl_products.publication_status',1)
                            ->limit(4)
                            ->get();
    ?>
    <div class="tab-pane fade" id="BURGERnSANDWICH" >
      <?php
      foreach($product_by_category as $product) {
        ?>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{URL::to($product->product_image)}}" alt="" />
              <h2>$ {{$product->product_price}}</h2>
              <p>{{$product->product_name}}</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>

            <div class="product-overlay">
              <div class="overlay-content">
                <h2>$ {{$product->product_price}}</h2>
                <p>{{$product->product_name}}</p>
                <a href="{{URL::to('/view_product/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
    </div>
    
    <?php
    $product_by_category=DB::table('tbl_products')
                            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                            ->select('tbl_products.*','tbl_category.category_name')
                            ->where('tbl_category.category_id',21)
                            ->where('tbl_products.publication_status',1)
                            ->limit(4)
                            ->get();
    ?>
    <div class="tab-pane fade" id="CHICKEN" >
      <?php
      foreach($product_by_category as $product) {
        ?>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{URL::to($product->product_image)}}" alt="" />
              <h2>$ {{$product->product_price}}</h2>
              <p>{{$product->product_name}}</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>

            <div class="product-overlay">
              <div class="overlay-content">
                <h2>$ {{$product->product_price}}</h2>
                <p>{{$product->product_name}}</p>
                <a href="{{URL::to('/view_product/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
    </div>
    
    <?php
    $product_by_category=DB::table('tbl_products')
                            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                            ->select('tbl_products.*','tbl_category.category_name')
                            ->where('tbl_category.category_id',22)
                            ->where('tbl_products.publication_status',1)
                            ->limit(4)
                            ->get();
    ?>
    <div class="tab-pane fade" id="DRINK" >
      <?php
      foreach($product_by_category as $product) {
        ?>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{URL::to($product->product_image)}}" alt="" />
              <h2>$ {{$product->product_price}}</h2>
              <p>{{$product->product_name}}</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>

            <div class="product-overlay">
              <div class="overlay-content">
                <h2>$ {{$product->product_price}}</h2>
                <p>{{$product->product_name}}</p>
                <a href="{{URL::to('/view_product/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
    </div>
    
    <?php
    $product_by_category=DB::table('tbl_products')
                            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                            ->select('tbl_products.*','tbl_category.category_name')
                            ->where('tbl_category.category_id',23)
                            ->where('tbl_products.publication_status',1)
                            ->limit(4)
                            ->get();
    ?>
    <div class="tab-pane fade" id="NOODLES" >
      <?php
      foreach($product_by_category as $product) {
        ?>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{URL::to($product->product_image)}}" alt="" />
              <h2>$ {{$product->product_price}}</h2>
              <p>{{$product->product_name}}</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>

            <div class="product-overlay">
              <div class="overlay-content">
                <h2>$ {{$product->product_price}}</h2>
                <p>{{$product->product_name}}</p>
                <a href="{{URL::to('/view_product/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
    </div>
    
    <?php
    $product_by_category=DB::table('tbl_products')
                            ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
                            ->select('tbl_products.*','tbl_category.category_name')
                            ->where('tbl_category.category_id',24)
                            ->where('tbl_products.publication_status',1)
                            ->limit(4)
                            ->get();
    ?>
    <div class="tab-pane fade" id="RICE" >
      <?php
      foreach($product_by_category as $product) {
        ?>
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="{{URL::to($product->product_image)}}" alt="" />
              <h2>$ {{$product->product_price}}</h2>
              <p>{{$product->product_name}}</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>

            <div class="product-overlay">
              <div class="overlay-content">
                <h2>$ {{$product->product_price}}</h2>
                <p>{{$product->product_name}}</p>
                <a href="{{URL::to('/view_product/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
<!--/category-tab-->

<!--recommended_items-->
<!--
<div class="recommended_items">
  <h2 class="title text-center">recommended items</h2>
  
  <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active">
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{URL::to('frontend/images/home/5.jpg')}}" alt="" />
                <h2>$ 320</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{URL::to('frontend/images/home/4.jpg')}}" alt="" />
                <h2>$ 325</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{URL::to('frontend/images/home/3.jpg')}}" alt="" />
                <h2>$ 325</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="item">  
        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{URL::to('frontend/images/home/2.jpg')}}" alt="" />
                <h2>$ 325</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{URL::to('frontend/images/home/1.jpg')}}" alt="" />
                <h2>$ 325</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="product-image-wrapper">
            <div class="single-products">
              <div class="productinfo text-center">
                <img src="{{URL::to('frontend/images/home/Beef Fried Rice.jpg')}}" alt="" />
                <h2>$ 160</h2>
                <p>Easy Polo Black Edition</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
    <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
  </div>
</div>
-->
<!--/recommended_items-->

@endsection