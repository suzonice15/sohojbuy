<?php $__env->startSection('pageTitle'); ?>
    Media Registration Form
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


        <form action="<?php echo e(url('admin/media/store')); ?>" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="box" style="border: 2px solid #ddd;">
                <div class="box-header with-border" style="background-color: green;color:white;">
                    <h3 class="box-title">Media  Information</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12" style="margin-left: 10px">
                            <div class="form-group">
                                <label for="category_title">Media Name<span class="required">*</span></label>
                                <input required type="text" id="media_title" class="form-control the_title"
                                       name="media_title" value="">
                            </div>
                            </div>
                        <div class="col-md-4 col-sm-12" style="margin-left: 10px">
                            <!-- /.form-group -->
                            <div class="form-group ">
                                <label for="category_name">Media Picture<span class="required">*</span></label>
                                <input required type="file" class="form-control the_name" id="media_path"
                                       name="media_path"
                                       value="">

                            </div>



                            <!-- /.form-group -->
                        </div>

                        <div class="col-md-1 col-sm-12" style="margin-left: 10px">
                            <!-- /.form-group -->
                            <div class="form-group ">
                                <br>

                                <input type="submit" class="btn btn-success pull-left" value="Save">

                            </div>



                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->

            </div>





            <div class="box-footer">


            </div>

        </form>

    </div>


    <script>
        $(document).ready(function () {
            $("#category_title").on('input click', function () {
                var text = $("#category_title").val();
                var _token = $("input[name='_token']").val();

                var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                $("#category_name").val(word);
                $.ajax({
                    data: {url: word, _token: _token},
                    type: "POST",
                    url: "<?php echo e(url('category-urlcheck')); ?>",
                    success: function (result) {

                        // $('#categoryError').html(result);
                        var str2 = "es";
                        var word = $("#category_name").val(word);
                        if (result) {
                            var text = $("#category_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            var word = word.concat(str2);
                            $("#category_name").val(word);

                        } else {
                            var text = $("#category_title").val();
                            var word = text.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
                            $("#category_name").val(word);
                        }
                    }
                });
            });


        });
    </script>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/media/create.blade.php ENDPATH**/ ?>