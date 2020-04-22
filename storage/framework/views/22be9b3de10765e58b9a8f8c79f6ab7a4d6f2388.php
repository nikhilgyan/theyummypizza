<?php $__env->startSection('admin_content'); ?>
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">View Message</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>View Message</h2>
		</div>
		<div class="box-content">
			<form class="form-horizontal" action="<?php echo e(url('/ok-message',$view_message_info->contact_id)); ?>" method="post">
				<?php echo e(csrf_field()); ?>

			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="date01">First Name</label>
				  <div class="controls">
				<input type="text" class="input-xlarge" name="last_name" value="<?php echo e($view_message_info->first_name); ?>" readonly>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="date01">Last Name</label>
				  <div class="controls">
				<input type="text" class="input-xlarge" name="last_name" value="<?php echo e($view_message_info->last_name); ?>" readonly>
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="date01">Email</label>
				  <div class="controls">
				<input type="text" class="input-xlarge" name="email" value="<?php echo e($view_message_info->email); ?>" readonly>
				  </div>
				</div>
       
       		<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Body</label>
				  <div class="controls">
					<textarea class="cleditor" name="product_short_description" rows="3" readonly>
						<?php echo e($view_message_info->body); ?>

					</textarea>
				  </div>
				</div>
				
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">OK</button>		 
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div><!--/row-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin_layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>