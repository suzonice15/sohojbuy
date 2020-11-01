<?php $__env->startSection('pageTitle'); ?>
Add New Courier

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">
        <?php if(count($errors) > 0): ?>
            <div class=" alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <ul>

                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li style="list-style: none"><?php echo e($error); ?></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </div>
        <?php endif; ?>


        <form action="<?php echo e(url('admin/courier/store')); ?>" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="box" style="border: 2px solid #ddd;">
                <div class="box-header with-border" style="background-color: green;color:white;">
                    <h3 class="box-title">Courier Information</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8 col-sm-12" style="margin-left: 10px">
                            <div class="form-group">
                                <label for="category_title">Category Name<span class="required">*</span></label>
                                <input required="" type="text" id="courier_name" class="form-control the_title"
                                       name="courier_name" value=" ">
                            </div>
                            <!-- /.form-group -->




                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-12" style="margin-left: 20px">

                            <div class="form-group">
                                <label for="billing_name">Location<span class="text-danger">*</span></label>
                                <select name="courier_status" id="courier_status" class="form-control">
                                    <option value="1" >Inside Dhaka</option>
                                    <option value="2" >Outside Dhaka</option>

                                </select>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->

            </div>


            <div class="box-footer">
                <input type="submit" class="btn btn-success pull-left" value="Save">

            </div>
        </form>

    </div>





<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/courier/create.blade.php ENDPATH**/ ?>