<?php if(isset($medias)): ?>
    <?php $i=0;?>
    <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($category->media_id); ?></td>
            <td><?php echo e($category->media_title); ?> </td>
            <td><?php echo e($category->product_code); ?> </td>
            <td>
                <?php if($category->product_code==null) {?>
                    <img width="30" src="<?php echo e(url('/public')); ?>/<?php echo e($category->media_path); ?>">
                <?php }  else { ?>
                <img width="30" src="<?php echo e(url('/public')); ?>/<?php echo e($category->media_path); ?>">
                <?php } ?>

            </td>
            <td>
                <input type="text" id="url_<?php echo e($category->media_id); ?>"  value="<?php echo e(url('/public')); ?>/<?php echo e($category->media_path); ?>">
                <input type="button"  id="<?php echo e($category->media_id); ?>" class="btn btn-success copy_class" value="Copy"> </td>

            <td><?php echo e(date('d-m-Y h:i:s a',strtotime($category->created_time))); ?></td>
            <td>
                  <a title="delete" href="<?php echo e(url('admin/media/delete')); ?>/<?php echo e($category->media_id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a>
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="7" align="center">
            <?php echo $medias->links(); ?>

        </td>
    </tr>
<?php endif; ?>

<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/media/pagination.blade.php ENDPATH**/ ?>