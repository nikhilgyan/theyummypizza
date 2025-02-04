<?php $__env->startSection('admin_content'); ?>
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">update product</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>update product</h2>
		</div>

		<p class="alert-success">
			<?php
			$message=Session::get('message');
			if($message) {
				echo $message;
				Session::put('message',null);
			}
      ?>
		</p>

		<div class="box-content">
			<form class="form-horizontal" action="<?php echo e(url('/update-product',$product_info->product_id)); ?>" method="post" enctype="multipart/form-data">
				<?php echo e(csrf_field()); ?>

			  <fieldset>
					<div class="control-group">
					  <label class="control-label" for="date01">Product Name</label>
					  <div class="controls">
						<input type="text" class="input-xlarge" name="product_name" value="<?php echo e($product_info->product_name); ?>" >
					  </div>
					</div>
	        
	        <div class="control-group">
						<label class="control-label" for="selectError3">Product category</label>
						<div class="controls">
						  <select id="selectError3" name="category_id"> 
	              <?php
	              $all_published_category=DB::table('tbl_category')
	                                          ->where('publication_status',1)
	                                          ->get();
	              foreach($all_published_category as $v_product) {
	              	$sel_cat = ($v_product->category_id == $product_info->category_id)?'selected':'';
	              	?>
								<option value="<?php echo e($v_product->category_id); ?>" <?php echo e($sel_cat); ?>><?php echo e($v_product->category_name); ?></option>	
									<?php
								}
								?>
						  </select>
						</div>
				  </div>

				  <div class="control-group hidden-phone">
					  <label class="control-label" for="textarea2">Product short description </label>
					  <div class="controls">
						<textarea class="cleditor" name="product_short_description" rows="3" >
							<?php echo e($product_info->product_short_description); ?>

						</textarea>
					  </div>
					</div>

					<div class="control-group hidden-phone">
					  <label class="control-label" for="textarea2">Product Long description </label>
					  <div class="controls">
						<textarea class="cleditor" name="product_long_description" rows="3" >
							<?php echo e($product_info->product_long_description); ?>

						</textarea>
					  </div>
					</div>

					<div class="control-group">
					  <label class="control-label" for="date01">Product Price</label>
					  <div class="controls">
						<input type="text" class="input-xlarge" name="product_price" value="<?php echo e($product_info->product_price); ?>">
					  </div>
					</div>
	        
	        <div class="control-group">
					  <label class="control-label" for="fileInput">Image </label>
					   <img style="height: 80px; width: 80px;" src="<?php echo e(URL::to($product_info->product_image)); ?>" ><hr>
					  <div class="controls">
						<input class="input-file uniform_on" name="product_image" id="fileInput" type="file" value="<?php echo e($product_info->product_image); ?>">
					  </div>
					</div>  
					
					<div class="control-group">
					  <label class="control-label" for="date01">Product Size</label>
					  <div class="controls">
							<select id="selectError3" name="product_size"> 
	              <?php
	              $all_size = (object)['Small','Medium','Large'];
	              foreach($all_size as $size) {
	              	$sel_cat = ($size == $product_info->product_size)?'selected':'';
	              	?>
								<option value="<?php echo e($size); ?>" <?php echo e($sel_cat); ?>><?php echo e($size); ?></option>	
									<?php
								}
								?>
						  </select>
					  </div>
					</div>
					
					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">update Product </button>
					  <button type="reset" class="btn">Cancel</button>
					</div>
			  </fieldset>
			</form>
		</div>
	</div><!--/span-->

</div><!--/row-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>