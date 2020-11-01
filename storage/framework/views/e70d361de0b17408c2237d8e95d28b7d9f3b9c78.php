
<?php $__env->startSection('pageTitle'); ?>
    Update Mail Setting
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

<div class="box-body">
        <div class="col-sm-offset-0 col-md-12">
            <form  name="category" action="<?php echo e(url('admin/social/smtpAdd')); ?>" class="form-horizontal"
                  method="post"
                  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="box" style="border: 2px solid #ddd;">
                    <div class="box-header with-border" style="background-color: green;color:white;">
                        <h3 class="box-title">Smtp Mail Information</h3>
                    </div>
                    <div class="box-body" style="padding: 29px;">
                        <div class="form-group ">
                            <label for="facebook">Smtp Driver</label>
                            <input type="text" class="form-control" name="driver" id="" value="<?php echo e($mailInfo->driver); ?>">
                        </div>
                    </div>
                    <div class="box-body" style="padding: 29px;">
                        <div class="form-group ">
                            <label for="facebook">Smtp Host</label>
                            <input type="text" class="form-control" name="host" id="" value="<?php echo e($mailInfo->host); ?>">
                        </div>
                    </div>
                    <div class="box-body" style="padding: 29px;">
                        <div class="form-group ">
                            <label for="facebook">Smtp Port</label>
                            <input type="text" class="form-control" name="port" id="" value="<?php echo e($mailInfo->port); ?>">
                        </div>
                    </div>
                    <div class="box-body" style="padding: 29px;">
                        <div class="form-group ">
                            <label for="facebook">Smtp UserName</label>
                            <input type="text" class="form-control" name="username" id="" value="<?php echo e($mailInfo->username); ?>">
                        </div>
                    </div>
                    <div class="box-body" style="padding: 29px;">
                        <div class="form-group ">
                            <label for="facebook">Smtp Password</label>
                            <input type="text" class="form-control" name="password" id="" value="<?php echo e($mailInfo->password); ?>">
                        </div>
                    </div>
                    <div class="box-body" style="padding: 29px;">
                        <div class="form-group ">
                            <label for="facebook">Smtp Encryption</label>
                            <input type="text" class="form-control" name="encryption" id="" value="<?php echo e($mailInfo->encryption); ?>">
                            <input type="hidden" name="id" value="<?php echo e($mailInfo->id); ?>">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Update</button>
                    </div>
                </div>

            </form>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/setting/mailSetting.blade.php ENDPATH**/ ?>