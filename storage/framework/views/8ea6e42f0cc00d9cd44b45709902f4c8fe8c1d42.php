<?php $__env->startSection('content'); ?>
<?php echo $__env->make('slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<h2 class="title text-center">Features Items</h2>
  <?php
  foreach($all_published_product as $v_published_product) {
    ?>
  <div class="col-sm-4">
    <div class="product-image-wrapper">
      <div class="single-products">
        <div class="productinfo text-center">
          <img src="<?php echo e(URL::to($v_published_product->product_image)); ?>" style="height: 300px;" alt="" />
          <h2>$ <?php echo e($v_published_product->product_price); ?></h2>
           <p><?php echo e($v_published_product->product_name); ?></p> 
          <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
        </div>

        <div class="product-overlay">
          <div class="overlay-content">
            <h2>$ <?php echo e($v_published_product->product_price); ?></h2>
            <a href="<?php echo e(URL::to('/view_product/'.$v_published_product->product_id)); ?>"><p><?php echo e($v_published_product->product_name); ?></p></a>
            <a href="<?php echo e(URL::to('/view_product/'.$v_published_product->product_id)); ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
          </div>
        </div>
      </div>
      
      <div class="choose">
        <ul class="nav nav-pills nav-justified">
          <li><a href="#"><i class="fa fa-plus-square"></i><?php echo e($v_published_product->manufacture_name); ?></a></li>
          <li><a href="<?php echo e(URL::to('/view_product/'.$v_published_product->product_id)); ?>"><i class="fa fa-plus-square"></i>View Product</a></li>
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
      <li><a href="#blazers" data-toggle="tab">CHICKEN</a></li>
      <li><a href="#sunglass" data-toggle="tab">DRINK</a></li>
      <li><a href="#kids" data-toggle="tab">NOODLES</a></li>
      <li><a href="#poloshirt" data-toggle="tab">SET MENU</a></li>
    </ul>
  </div>

  <div class="tab-content">
    <div class="tab-pane fade active in" id="APPETIZER" >
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Mix Chowmein.jpg')); ?>" alt="" />
              <h2>$ 260</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Prawn Chowmein.jpg')); ?>" alt="" />
              <h2>$ 356</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Special Fried Prawn.jpg')); ?>" alt="" />
              <h2>$ 260</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Vegetable Pasta.jpg')); ?>" alt="" />
              <h2>$ 456</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
            
    <div class="tab-pane fade" id="blazers" >
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Set consists of beef fried rice, mix vegetable, salad and drinks.jpg')); ?>" alt="" />
              <h2>$ 256</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Set menu consists of 2thai soup, 2 rice, 4 pieces chicken fry, 2 vegetable and drinks.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Special Fried Prawn.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/Beef Chili Onion.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane fade" id="sunglass" >
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/11.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/10.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/9.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/8.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane fade" id="kids" >
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/3.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/5.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/3.jpg')); ?>" alt="" />
              <h2>$ 346</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/6.jpg')); ?>" alt="" />
              <h2>$ 550</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="tab-pane fade" id="poloshirt" >
      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/2.jpg')); ?>" alt="" />
              <h2>$ 550</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/7.jpg')); ?>" alt="" />
              <h2>$ 550</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/1.jpg')); ?>" alt="" />
              <h2>$ 550</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="product-image-wrapper">
          <div class="single-products">
            <div class="productinfo text-center">
              <img src="<?php echo e(URL::to('frontend/images/home/6.jpg')); ?>" alt="" />
              <h2>$ 550</h2>
              <p>Easy Polo Black Edition</p>
              <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
          </div>
        </div>
      </div>
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
                <img src="<?php echo e(URL::to('frontend/images/home/5.jpg')); ?>" alt="" />
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
                <img src="<?php echo e(URL::to('frontend/images/home/4.jpg')); ?>" alt="" />
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
                <img src="<?php echo e(URL::to('frontend/images/home/3.jpg')); ?>" alt="" />
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
                <img src="<?php echo e(URL::to('frontend/images/home/2.jpg')); ?>" alt="" />
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
                <img src="<?php echo e(URL::to('frontend/images/home/1.jpg')); ?>" alt="" />
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
                <img src="<?php echo e(URL::to('frontend/images/home/Beef Fried Rice.jpg')); ?>" alt="" />
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>