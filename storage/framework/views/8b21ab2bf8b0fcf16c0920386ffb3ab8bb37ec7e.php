<?php if(isset($categories)): ?>
    <?php $i=0;?>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php
            if(empty($category->medium_banner)){
                $image='https://www.dhakabaazar.com/uploads/nova-black-berry-moving-room-fan-heater-35643564-min_thumb.png';
            } else {
                $image=url('public/uploads/category').'/'.$category->medium_banner;
            }
           $total_prodcut= DB::table('product_category_relation')->where('category_id',$category->category_id)->count();

        ?>

        <tr>
            <td><?php echo e($category->category_id); ?></td>
            <td>
            <img width="50" src="<?php echo e($image); ?>" >
            </td>


            <td><?php echo e($category->category_title); ?> </td>


            </td>
            <td><?php echo e($category->category_name); ?> </td>
            <td>

            <?php if($category->parent_id==0){ ?>

                <span class="label label-success">Main Parent</span>
                <?php } ?>
            </td>
            <td><?php echo e($total_prodcut); ?> </td>
            <td><?php if($category->status==1) {echo "Publised" ;}else{ echo "Unpublished";} ?> </td>
            <td><?php echo e(date('d-m-Y',strtotime($category->registered_date))); ?></td>
            <td>
                <a title="edit" href="<?php echo e(url('admin/category')); ?>/<?php echo e($category->category_id); ?>">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>


                <a title="delete" href="<?php echo e(url('admin/category/delete')); ?>/<?php echo e($category->category_id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                </a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="6" align="center">
            <?php echo $categories->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/category/pagination.blade.php ENDPATH**/ ?>