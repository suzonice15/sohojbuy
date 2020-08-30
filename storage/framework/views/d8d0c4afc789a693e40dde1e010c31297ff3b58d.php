<?php if(isset($users)): ?>
    <?php $i=$users->perPage() * ($users->currentPage()-1);?>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td> <?php echo e(++$i); ?> </td>
            <td><?php echo e($user->name); ?></td>

            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->phone); ?></td>
            <td><?php echo e($user->address); ?></td>
            <td><?php echo e(date('d,M,Y',strtotime($user->created_date))); ?></td>

        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="9" align="center">
            <?php echo $users->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/user/generel_user_pagination.blade.php ENDPATH**/ ?>