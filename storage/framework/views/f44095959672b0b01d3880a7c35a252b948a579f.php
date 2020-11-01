<?php $__env->startSection('pageTitle'); ?>
    All Sliders List
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

<div class="box-body">
    <div class="table-responsive" >
        <table id="example1" class="table table-bordered table-striped table-responsive ">
            <thead>
            <tr>
                <th>Sl</th>
                <th>Name </th>
                <th>Picture</th>
                <th> Slider link</th>
                <th>Published status </th>
                <th> Created date </th>
                <th> Modified date </th>
                <th >Action </th>
            </tr>
            </thead>
            <tbody>

                <?php if(isset($sliders)): ?>
<?php $i=0;?>
            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($slider->homeslider_title); ?> </td>
                <td>
                  <?php if(isset($slider->homeslider_picture)): ?>
                    <img src="<?php echo e(URL::to('/public')); ?>/uploads/sliders/<?php echo e($slider->homeslider_picture); ?>" width="50" height="50"/>

                   <?php else: ?>
                    <img src="<?php echo e(URL::to('/public')); ?>/uploads/user/user.png" width="50" height="50"/>
                    <?php endif; ?>
                </td>

                <td><?php echo e($slider->target_url); ?></td>
                <td><?php if($slider->status==1){ echo 'Publised'; } else { echo "Unpublised";} ?></td>
                <td><?php echo e(date('d-m-Y',strtotime($slider->created_time))); ?></td>
                <td><?php echo e(date('d-m-Y',strtotime($slider->modified_time))); ?></td>
                <td>
                    <a title="edit" href="<?php echo e(url('/admin/slider/')); ?>/<?php echo e($slider->homeslider_id); ?>">
                        <span class="glyphicon glyphicon-edit btn btn-success"></span>
                    </a>


                    <a title="delete" href="<?php echo e(url('/admin/slider/delete')); ?>/<?php echo e($slider->homeslider_id); ?>" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/slider/index.blade.php ENDPATH**/ ?>