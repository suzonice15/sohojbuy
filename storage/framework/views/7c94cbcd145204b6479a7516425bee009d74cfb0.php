
<?php $__env->startSection('pageTitle'); ?>
    Vendor Withdraw Amount
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
			                <th>Vendor Name</th>
			                <th>Email</th>
			                <th>Phonr</th>
			                <th>Amount</th>
			                <th>Date</th>
			                <th>Status</th>
			                <th>Action</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php $__currentLoopData = $withdrowInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdrow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            <tr>
			                <td><?php echo e($withdrow->vendor_shop); ?></td>
			                <td><?php echo e($withdrow->vendor_f_name . $withdrow->vendor_l_name); ?></td>
			                <td><?php echo e($withdrow->vendor_email); ?></td>
			                <td><?php echo e($withdrow->vendor_phone); ?></td>
			                <td><?php echo e($withdrow->withdrawAmount); ?></td>
			                <td><?php echo e($withdrow->date); ?></td>
			                <td>
			                	<?php
			                		if ($withdrow->status=='0') {
			                			echo "Unpaid";
			                		}else if($withdrow->status=='1'){
			                			echo "Paid";
			                		}else if($withdrow->status=='2'){
			                			echo "Cancle";
			                		}else{
			                			echo "Refund";
			                		}
			                	?>
			                </td>
			                <?php
			                	if ($withdrow->status!='3') {
			                ?>
			                <td>
			                	<a href="#" data-toggle="modal" data-target="#myModal<?php echo e($withdrow->id); ?>">
						          <span class="glyphicon glyphicon-tag"></span>
						        </a>
			                </td>

			                <?php		

			                	}else{
			                ?>
			                <td>
			                	Unable to edit
			                </td>
			                <?php
			                	}
			                ?>
			            </tr>

			            <!-- The Modal -->
						  <div class="modal" id="myModal<?php echo e($withdrow->id); ?>">
						    <div class="modal-dialog">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="modal-header">
						          <h4 class="modal-title">Withdraw Status Change</h4>
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						        </div>
						        <form method="post" action="<?php echo e(url('admin/vendor/published/WithdrowStatusChange')); ?>">
						        <?php echo csrf_field(); ?>
							        <!-- Modal body -->
							        <div class="modal-body">
							            <div class="form-group">
										  <label for="sel1">Select Status :</label>
										  <select class="form-control" id="sel1" name="status">
										    <option value="0" <?php if($withdrow->status=='0'){echo "selected";} ?> >Unpaid</option>
										    <option value="1" <?php if($withdrow->status=='1'){echo "selected";} ?> >Paid</option>
										    <option value="2" <?php if($withdrow->status=='2'){echo "selected";} ?> >Cancle</option>
										    <option value="3" <?php if($withdrow->status=='3'){echo "selected";} ?> >Refund</option>
										  </select>
										  <input type="hidden" name="vendorId" value="<?php echo e($withdrow->vendorId); ?>">
										  <input type="hidden" name="id" value="<?php echo e($withdrow->id); ?>">
										  <input type="hidden" name="withdrawAmount" value="<?php echo e($withdrow->withdrawAmount); ?>">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/vendor/vendor_withdraw_amount.blade.php ENDPATH**/ ?>