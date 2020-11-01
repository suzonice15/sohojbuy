<?php $__env->startSection('pageTitle'); ?>
    Add New Category
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


        <form action="<?php echo e(url('admin/category/store')); ?>" class="form-horizontal" method="post"
              enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="box" style="border: 2px solid #ddd;">
                <div class="box-header with-border" style="background-color: green;color:white;">
                    <h3 class="box-title">Category Information</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12" style="margin-left: 10px">
                            <div class="form-group">
                                <label for="category_title">Category Name<span class="required">*</span></label>
                                <input required type="text" id="category_title" class="form-control the_title"
                                       name="category_title" value="">
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group ">
                                <label for="category_name">Parmalink<span class="required">*</span></label>
                                <input required type="text" class="form-control the_name" id="category_name"
                                       name="category_name"
                                       value="">
                                <span id="categoryError"></span>
                            </div>


                            <div class="form-group">
                                <label for="billing_name">Published Status<span class="text-danger">*</span></label>
                                <select name="status" id="payment_type" class="form-control">
                                    <option value="1" style="background-color: red;">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6 col-sm-12" style="margin-left: 20px">
                            <div class="form-group">
                                <label for="parent_id">Select Parent</label>
                                <select required class="form-control select2 " name="parent_id"
                                        tabindex="-1"
                                        aria-hidden="true">
                                    <option value="0" style="background-color: red;">--- choose ---</option>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <option value="<?php echo e($category->category_id); ?>"><?php echo e($category->category_title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="rank_order">Rank Order</label>
                                <input type="text" class="form-control" name="rank_order" value="">
                            </div>
                            <div class="form-group featured-image">
                                <label>Category  Image<span class="required"> (200*200)</span></label>
                                <input   type="file" class="form-control" name="featured_image"/>

                            </div>

                            <div class="form-group featured-image">
                                <label>Share  Image </label>
                                <input   type="file" class="form-control" name="share_image"/>

                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->

            </div>


            <div class="box box-success" style="border: 2px solid #ddd;">
                <div class="box-header" style="background-color: #00a65a;color:white">
                    <h3 class="box-title">SEO Options</h3>
                </div>

                <div class="box-body" style="padding: 26px;">

                    <div class="form-group">
                        <label for="seo_title"> Title</label>
                        <input type="text" class="form-control" name="seo_title" id="seo_title" value="">
                    </div>
                    <div class="form-group "><label for="seo_meta_title">SEO Meta Title</label> <input
                                type="text" class="form-control" name="seo_meta_title" id="seo_meta_title" value="">
                    </div>

                    <div class="form-group "><label for="seo_meta_content"> Meta Description</label> <textarea
                                class="form-control" rows="2" name="seo_meta_content"
                                id="seo_meta_content"></textarea>
                    </div>
                    <div class="form-group "><label for="seo_keywords">Meta Keywords</label>
                        <input type="text"
                               class="form-control"
                               name="seo_keywords"
                               id="seo_keywords"
                               value="">
                    </div>
                    <div class="form-group ">
                        <label for="seo_content"> Content</label>
                            <textarea    class="form-control"
                                      rows="5" name="seo_content"
                                      ></textarea>

                    </div>


                </div>
            </div>


            <div class="box-footer">
                <input type="submit" class="btn btn-success pull-left" value="Save">

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



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/category/create.blade.php ENDPATH**/ ?>