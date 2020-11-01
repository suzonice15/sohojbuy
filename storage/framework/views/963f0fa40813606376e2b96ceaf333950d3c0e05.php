
<?php $__env->startSection('pageTitle'); ?>
    Profit Vendor Product Amount
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
			                <th>Product Title</th>
			                <th>Amount</th>
			                <th>Date</th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php $__currentLoopData = $historyInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			            <tr>
			                <td><?php echo e($history->vendor_shop); ?></td>
			                <td><?php echo e($history->vendor_f_name); ?></td>
			                <td><?php echo e($history->product_title); ?></td>
			                <td><?php echo e($history->amount); ?></td>
			                <td><?php echo e($history->date); ?></td>
			                
			            </tr>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/vendor/vandorAmountHistory.blade.php ENDPATH**/ ?>