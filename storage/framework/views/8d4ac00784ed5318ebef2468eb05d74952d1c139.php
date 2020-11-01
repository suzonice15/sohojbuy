
<?php $__env->startSection('pageTitle'); ?>
    Vendor Shop Name Change
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <div class="box-body">
        <div class="row">
        	<div class="table-responsive">

	            <table id="example" class="table table-striped table-bordered" style="width:100%">
			        <thead>
			            <tr>
			                <th>Shop Name</th>
			                <th>Shop Link</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php $__currentLoopData = $requestInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            <tr>
			                <td><?php echo e($request->request_shop_name); ?></td>
			                <td><?php echo e($request->request_shop_link); ?></td>
			                
			                <td>
			                	<a href="#" data-toggle="modal" data-target="#myModal<?php echo e($request->vendor_id); ?>">
						          <span class="glyphicon glyphicon-tag"></span>
						        </a>
			                </td>
			            </tr>

			            <!-- The Modal -->
						  <div class="modal" id="myModal<?php echo e($request->vendor_id); ?>">
						    <div class="modal-dialog">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="modal-header">
						          <h4 class="modal-title">Withdraw Status Change</h4>
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						        </div>
						        <form method="post" action="<?php echo e(url('admin/vendor/published/shop-name-change')); ?>">
						        <?php echo csrf_field(); ?>
							        <!-- Modal body -->
							        <div class="modal-body">
							            <div class="form-group">
										  <label for="sel1">Select Status :</label>
										  <select class="form-control" id="sel1" name="status">
										    
										    <option value="2" <?php if($request->request_status=='2'){echo "selected";} ?> >Accepted</option>
										    <option value="3" <?php if($request->request_status=='3'){echo "selected";} ?> >Cancle</option>
										    
										  </select>
										  <input type="hidden" name="vendorId" value="<?php echo e($request->vendor_id); ?>">
										</div>
										<div class="form-group">
											<input type="submit" name="update">
										</div>
							        </div>
						        </form>
						        <!-- Modal footer -->
						        <div class="modal-footer">
						          <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
						        </div>
						      </div>
						    </div>
						  </div>
			            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			        </tbody>
			            
			    </table>

	        </div>
        </div>
    </div>
<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	} );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/vendor/vendor_shop_status.blade.php ENDPATH**/ ?>