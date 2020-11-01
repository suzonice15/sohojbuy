<?php if(isset($products)): ?>
    <?php $i=$products->perPage() * ($products->currentPage()-1);?>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td> <?php echo e(++$i); ?> </td>
            <td><?php echo e($product->sku); ?></td>
            <td>
                <img src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>">
                <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>"> <?php echo e($product->product_title); ?> </a>

            </td>

            <td><?php echo e($product->product_price); ?></td>
            <td><?php echo e($product->discount_price); ?></td>
            <td><?php echo e($product->vendor_price); ?></td>
            <td><?php echo e($product->product_profite); ?> </td>
             <td><?php echo   $product->product_summary ?></td>
            <td><?php if($product->status==1) { ?>

                <span class="label label-success">Publised</span>
                <?php } else { ?>
                <span class="label label-danger">Pending</span>
                <?php } ?>

            </td>



            <td><?php echo e(date('d-m-Y H:m s a',strtotime($product->created_time))); ?></td>
            <td>
                <?php if($product->status==0) { ?>
                <a title="edit" class="btn btn-info" href="<?php echo e(url('admin/vendor/product/published')); ?>/<?php echo e($product->product_id); ?>">
                   Published
                </a>
                    <?php } else { ?>
                <a title="edit" class="btn btn-bitbucket" href="<?php echo e(url('admin/vendor/product/unpublished')); ?>/<?php echo e($product->product_id); ?>">
                Unpublished
                </a>
                    <?php } ?>
                <a  target="_blank" title="edit" href="<?php echo e(url('admin/vendor/product')); ?>/<?php echo e($product->product_id); ?>">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="delete" href="<?php echo e(url('admin/product/delete')); ?>/<?php echo e($product->product_id); ?>" onclick="return confirm('Are you want to delete this Product')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $products->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/vendor/pending_pagination.blade.php ENDPATH**/ ?>