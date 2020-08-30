
<?php $__env->startSection('pageTitle'); ?>
  Limited Products
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>



    <div class="box-body">



        <div class="table-responsive">

            <table  class="table table-bordered table-striped ">
                <thead>
                <tr>

                    <th>Product Code</th>
                    <th>Product</th>
                    <th>Purchase Price</th>
                    <th>Sell Price</th>
                    <th>Discount Price</th>
                    <th>Product Profite</th>

                    <th>Published Status</th>
                    <th>Registration date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php if(isset($products)): ?>

                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>


                            <td><?php echo e($product->sku); ?></td>
                            <td>
                                <img src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>">
                                <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>"> <?php echo e($product->product_title); ?> </a>

                            </td>
                            <td><?php echo e($product->purchase_price); ?></td>
                            <td><?php echo e($product->product_price); ?></td>
                            <td><?php echo e($product->discount_price); ?></td>
                            <td><?php echo e($product->product_profite); ?></td>

                            <td><?php if($product->status==1) {echo "Publised" ;}else{ echo "Unpublished";} ?> </td>
                            <td><?php echo e(date('d-m-Y H:m s',strtotime($product->created_time))); ?></td>
                            <td>
                                <a title="edit" href="<?php echo e(url('admin/product')); ?>/<?php echo e($product->product_id); ?>">
                                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                                </a>

                                <a title="delete" href="<?php echo e(url('admin/product/delete')); ?>/<?php echo e($product->product_id); ?>" onclick="return confirm('Are you want to delete this Product')">
                                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                                </a></td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php endif; ?>
                </tbody>

            </table>

        </div>





    </div>





<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/report/stock_product.blade.php ENDPATH**/ ?>