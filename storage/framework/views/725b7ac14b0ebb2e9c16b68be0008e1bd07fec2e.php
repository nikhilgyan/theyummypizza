<?php $__env->startSection('content'); ?>


	<p class="alert-success">
			<?php
			$message=Session::get('message');
			if($message)
			{
				echo $message;
				Session::put('message',null);

			}
           ?>
		</p>
	<div class="box-content col-md-8" >
		<form action="<?php echo e(url('/save-contact')); ?>" method="post">
			<?php echo csrf_field(); ?>
				<div class="form-group">
					<label for="name">FIrst Name</label>
					<input type="text" name="first_name" id="first_name" class="form-control">
				</div>

				<div class="form-group">
					<label for="name">Last Name</label>
					<input type="text" name="last_name" id="last_name" class="form-control">
				</div>
		
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" class="form-control">
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Body</label>
				  <div class="controls">
					<textarea class="cleditor" name="body" rows="5" ></textarea>
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Publication status</label>
				  <div class="controls">
					<input type="checkbox" name="publication_status" value="1">
				  </div>
				</div>

				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Contact</button>
				</div>
			</form>
</div>	

	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>