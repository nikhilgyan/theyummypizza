<?php $__env->startSection('content'); ?>

<section id="cart_items">
	<div class="container col-sm-12">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
		</div>

		<div class="table-responsive cart_info">
			<?php
			$contents = Cart::content();
			?>
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Image</td>
						<td class="description">Name</td>
						<td class="price">Price</td>
						<td class="quantity">Quantity</td>
						<td class="total">Total</td>
						<td>Action</td>
					</tr>
				</thead>

				<tbody>
					<?php
					if(count($contents)) {
						foreach($contents as $v_contents) {
							?>
					<tr>
						<td class="cart_product"><a href=""><img src="<?php echo e(URL::to($v_contents->options->image)); ?>" height="80px" width="80px" alt=""></a></td>
						<td class="cart_description"><h4><a href=""><?php echo e($v_contents->name); ?></a></h4></td>
						<td class="cart_price"><p><?php echo e($v_contents->price); ?></p></td>
						<td class="cart_quantity">
						<div class="cart_quantity_button">
							<form action="<?php echo e(url('/update-cart')); ?>" method="post">
								<?php echo e(csrf_field()); ?>

								<input class="cart_quantity_input" type="text" name="qty" value="<?php echo e($v_contents->qty); ?>" autocomplete="off" size="2" />
								<input  type="hidden" name="rowId" value="<?php echo e($v_contents->rowId); ?>" />
								<input type="submit" name="submit" value="update" class="btn btn-sm btn-default" />
							</form>
						</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price"><?php echo e($v_contents->total); ?></p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="<?php echo e(URL::to('/delete-to-cart/'.$v_contents->rowId)); ?>"><i class="fa fa-times"></i></a>
						</td>
					</tr>
            	<?php
            }
          }
          else {
          	?>
          <tr>
          	<td colspan="6" style="text-align:center;">
	          	<div class="alert alert-danger">
						    <strong>Your cart is empty!</strong>
						  </div>
	          </td>
          </tr>
          	<?php
          }
          ?>
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<?php
if(count($contents)) {
	?>
<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="row">		
			<div class="col-sm-8">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span><?php echo e(Cart::subtotal()); ?></span></li>
						<li>Eco Tax <span><?php echo e(Cart::tax()); ?></span></li>
						<li>Shipping Cost <span>Free</span></li>
						<li>Total Quantity <span><?php echo e(Cart::count()); ?></span></li>
						<li>Total items <span><?php echo e(Cart::content()->count()); ?></span></li>
						<li>Total Amount<span><?php echo e(cart::total()); ?></span></li>
					</ul>

					<a class="btn btn-default update" href="">Update</a>

          <?php $customer_id = Session::get('customer_id'); ?>
					<?php if($customer_id != Null): ?>
						<a class="btn btn-default check_out" href="<?php echo e(URL::to('/checkout')); ?>">Checkout</a>
					<?php else: ?>  
						<a class="btn btn-default check_out" href="<?php echo e(URL::to('/login-check')); ?>">Checkout</a>
					<?php endif; ?>                    
				</div>
			</div>
		</div>
	</div>
</section>
	<?php
}
?>
<!--/#do_action-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>