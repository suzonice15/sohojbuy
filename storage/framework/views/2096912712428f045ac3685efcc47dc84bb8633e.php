<?php $__env->startSection('pageTitle'); ?>
    Update Product
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

        <div class="col-sm-offset-0 col-md-12">


            <form  name="product" action="<?php echo e(url('admin/product/update')); ?>/<?php echo e($product->product_id); ?>" class="form-horizontal"
                   method="post"
                   enctype="multipart/form-data">
                <?php echo csrf_field(); ?>



                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="box box-primary" style="border: 2px solid #ddd;">
                                <div class="box-header" style="background-color: #bdbdbf;">
                                    <h3 class="box-title">Product Information</h3>
                                </div>
                                <div class="box-body" style="padding: 22px;">
                                    <div class="form-group">
                                        <label for="product_title">Product Title<span
                                                    class="required">*</span></label>
                                        <input required type="text" class="form-control the_title"
                                               name="product_title" id="product_title"
                                               value="<?php echo e($product->product_title); ?>" autocomplete="off">
                                    </div>

                                    <div class="form-group ">
                                        <label for="product_name">Permalink<span class="required">*</span></label>
                                        <input required type="text" class="form-control the_name"
                                               name="product_name" id="product_name"
                                               value="<?php echo e($product->product_name); ?>" autocomplete="off">

                                    </div>

                                    <input  type="hidden" class="form-control"
                                            name="folder" id="folder"
                                            value="<?php echo e($product->folder); ?>" >




                                    <div class="form-group ">
                                        <label for="sku">Product Code(sku)<span class="required">*</span></label>
                                        <input required type="text" class="form-control" name="sku" id="sku"
                                               value="<?php echo e($product->sku); ?>" autocomplete="off">
                                        <span class="text-danger" id="sku_error"></span>
                                    </div>
                                    <?php
                                    $status= Session::get('status');
                                    if ($status != 'editor') {
                                    ?>
                                    <div
                                            class="form-group ">
                                        <label for="purchase_price">Purchase Price<span
                                                    class="required">*</span></label>
                                        <input type="text" class="form-control" name="purchase_price"
                                               id="purchase_price"
                                               value="<?php echo e($product->purchase_price); ?>" autocomplete="off">
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="form-group ">
                                        <label for="sell_price">Regular Price<span class="required">*</span></label>
                                        <input required type="text" class="form-control" name="product_price"
                                               id="product_price" value="<?php echo e($product->product_price); ?>" autocomplete="off">
                                    </div>


                                    <div class="form-group ">
                                        <label for="discount_price"> Discount Price</label>
                                        <input type="text" class="form-control" name="discount_price"
                                               id="discount_price"
                                               value="<?php echo e($product->discount_price); ?>" autocomplete="off">
                                    </div>


                                    <div class="form-group ">
                                        <label for="product_availability">Product Published
                                            Status</label>
                                        <select name="status"     class="form-control">
                                            <option value="1"  >Published</option>
                                            <option value="0" >Unpublished</option>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group ">
                                        <label for="">Hot Product</label>
                                        <select name="hot_product"     class="form-control">
                                            <option value="0"  >No</option>
                                            <option value="1" >Yes</option>
                                        </select>
                                    </div> -->
                                    <div class="form-group ">
                                        <label for="stock_qty">Stock Qty.</label>
                                        <input type="text" class="form-control" name="product_stock" id="product_stock"
                                               value="<?php echo e($product->product_stock); ?>" autocomplete="off">
                                    </div>
                                    <div class="form-group" hidden>
                                        <label for="stock_qty">Stock Alert.</label>
                                        <input type="text" class="form-control" name="stock_alert" id="stock_alert"
                                               value="<?php echo e($product->stock_alert); ?>" autocomplete="off">
                                    </div>


                                    <div class="form-group ">
                                        <label for="product_type">Product Location</label>
                                        <select name="product_type" id="product_type"
                                                class="form-control">
                                            <option value="general">General</option>
                                            <option value="home">Home</option>
                                            <option value="hot">Hot Sell</option>
                                        </select>

                                    </div>


                                    <div class="form-group ">
                                        <label for="product_video">Youtube Video Link</label>
                                        <input type="text" class="form-control" name="product_video"
                                               id="product_video" value="<?php echo e($product->product_video); ?>" autocomplete="off">
                                    </div>

                                    <div class="form-group ">
                                        <label for="discount_price">Delivery Charge Inside Dhaka</label>
                                        <input type="text" class="form-control" name="delivery_in_dhaka"
                                               id="discount_price"
                                               value="<?php echo e($product->delivery_in_dhaka); ?>" autocomplete="off">
                                    </div>
                                    <div class="form-group ">
                                        <label for="discount_price">Delivery Charge Outside Dhaka</label>
                                        <input type="text" class="form-control" name="delivery_out_dhaka"
                                               id="discount_price"
                                               value="<?php echo e($product->delivery_out_dhaka); ?>" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="box box-primary" style="border: 2px solid #ddd;height: 600px">
                                <div class="box-header" style="background-color: #bdbdbf;">

                                    <h3 class="box-title">Image and Gallary</h3>
                                </div>
                                <div class="box-body" style="padding: 22px;">

                                    <div class="form-group featured-image">
                                        <label>Featured Image<span class="required">* Size(800*800)</span></label>
                                        <img src="<?=url('/')?>/public/uploads/<?php echo $product->folder;?>/small/<?php echo $product->feasured_image;?>">

                                        <input type="file" class="form-control" name="featured_image"/>

                                    </div>
                                </div>

                                <div class="box-body" style="padding: 22px;">

                                    <div class="form-group featured-image">
                                        <label>Product Gallary<span class="required">* Size(800*800)</span></label>
                                        <br>
                                        <?php if($product->galary_image_1){ ?>
                                        <img width="50" src="<?=url('/')?>/public/uploads/<?php echo $product->folder;?>/<?php echo $product->galary_image_1;?>">
                                        <?php } ?>
                                        <input type="file" class="form-control" name="product_image1"/>

                                        <br>
                                        <?php if($product->galary_image_2){ ?>
                                        <img width="50" src="<?=url('/')?>/public/uploads/<?php echo $product->folder;?>/<?php echo $product->galary_image_2;?>">
                                        <?php } ?>
                                        <input type="file" class="form-control" name="product_image2"/>
                                        <br>
                                        <?php if($product->galary_image_3){ ?>
                                        <img width="50" src="<?=url('/')?>/public/uploads/<?php echo $product->folder;?>/<?php echo $product->galary_image_3;?>">
                                        <?php } ?>
                                        <input type="file" class="form-control" name="product_image3"/>
                                        <br>
                                        <?php if($product->galary_image_4){ ?>
                                        <img width="50" src="<?=url('/')?>/public/uploads/<?php echo $product->folder;?>/<?php echo $product->galary_image_4;?>">
                                        <?php } ?>
                                        <input type="file" class="form-control" name="product_image4"/>
                                        <br>
                                        <br>
                                        <?php if($product->galary_image_5){ ?>
                                        <img width="50" src="<?=url('/')?>/public/uploads/<?php echo $product->folder;?>/<?php echo $product->galary_image_5;?>">
                                        <?php } ?>
                                        <input type="file" class="form-control" name="product_image5"/>
                                        <br>

                                        <?php if($product->galary_image_6){ ?>
                                        <img width="50" src="<?=url('/')?>/public/uploads/<?php echo $product->folder;?>/<?php echo $product->galary_image_6;?>">
                                        <?php } ?>

                                        <input type="file" class="form-control" name="product_image6"/>
                                        <br>
                                        <br>
                                        <br>




                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="box box-primary" style="border: 2px solid #ddd;">
                                    <div class="box-header" style="background-color: #bdbdbf;">

                                        <h3 class="box-title">Categories<span class="required">*</span></h3>
                                    </div>
                                    <div class="box-body" style="padding: 22px;height: 300px;overflow: scroll">
                                        <div class="form-group">
                                            <?php




                                            if (isset($categories)) {
                                            foreach ($categories as $category) {

                                            if($category->category_id==1){
                                                continue;
                                            }
                                            $subCategory_id = $category->category_id;
                                            $subCategories=DB::table('category')->where('parent_id',$subCategory_id)->orderBy('category_id','ASC')->get();


                                            ?>
                                            <input type="checkbox"

                                                   <?php foreach ($product_categories as $product_category){
                                                      if($product_category->category_id==$category->category_id){
                                                          echo "checked";
                                                      } else {
                                                          echo "";
                                                      }

                                                   }
                                                   ?>
                                                   name="category_id[]" value="<?php echo $category->category_id;?>">
                                            <span><?php echo $category->category_title;?></span>
                                            <br>
                                            <?php

                                            if($subCategories) {
                                            foreach ($subCategories as $subCategory) {

                                            $childCategory_id = $subCategory->category_id;
                                            $childCategories=DB::table('category')->where('parent_id',$childCategory_id)->orderBy('category_id','ASC')->get();

                                            ?>



                                            <input type="checkbox"
                                                   <?php foreach ($product_categories as $product_category){
                                                       if($product_category->category_id==$subCategory->category_id){
                                                           echo "checked";
                                                       } else {
                                                           echo "";
                                                       }

                                                   }
                                                   ?>

                                                   style="margin-left: 30px" name="category_id[]" value="<?php echo $subCategory->category_id;?>">
                                            <span><?php echo $subCategory->category_title;?></span>
                                            <br/>

                                            <?php

                                            if($childCategories){
                                            foreach ($childCategories as $childCategory) {
                                            ?>
                                            <input type="checkbox"

                                                   <?php foreach ($product_categories as $product_category){
                                                       if($product_category->category_id==$childCategory->category_id){
                                                           echo "checked";
                                                       } else {
                                                           echo "";
                                                       }

                                                   }
                                                   ?>
                                                   style="margin-left: 60px" name="category_id[]" value="<?php echo $childCategory->category_id;?>">
                                            <span><?php echo $childCategory->category_title;?></span>
                                            <br/>

                                            <?php
                                            }
                                            }  }

                                            }

                                            }


                                            }


                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>


                    <div class="box box-primary" style="border: 2px solid #ddd;">
                        <div class="box-header" style="background-color: #ddd;">
                            <h3 class="box-title">Product Summary
                            </h3>
                        </div>
                        <div class="box-body" style="padding: 22px; ">
                            <div class="form-group ">
                            <textarea class="form-control ckeditor" rows="10" name="product_specification"
                                      id="product_specification"> <?php echo e($product->product_specification); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="box box-primary" style="border: 2px solid #ddd;">
                        <div class="box-header" style="background-color: #bdbdbf;">

                            <h3 class="box-title">Description</h3>
                        </div>
                        <div class="box-body" style="padding: 22px; ">
                            <div class="form-group ">
                <textarea  class="form-control ckeditor" rows="10" name="product_description"
                          id="product_description"><?php echo e($product->product_description); ?></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="box box-primary" style="border: 2px solid #ddd;">
                        <div class="box-header" style="background-color: #bdbdbf;">

                            <h3 class="box-title">Terms &amp; Conditions</h3>
                        </div>
                        <div class="box-body" style="padding: 22px; ">
                            <div class="form-group ">
									<textarea class="form-control ckeditor " rows="5" name="product_terms"
                                              id="product_terms"><?php echo e($product->product_terms); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="box box-primary" style="border: 2px solid #ddd;">
                        <div class="box-header" style="background-color: #bdbdbf;">

                            <h3 class="box-title">SEO Options</h3>
                        </div>


                        <div class="box-body" style="padding: 22px; ">
                            <div class="form-group  ">
                                <label for="seo_title"> Title</label>
                                <input type="text" class="form-control" name="seo_title" id="seo_title"
                                       value="<?php echo e($product->seo_title); ?>">
                            </div>


                            <div class="form-group  ">
                                <label for="seo_content">Meta description</label>
								<textarea class="form-control" rows="5" name="seo_content"
                                          id="seo_content"><?php echo e($product->seo_content); ?></textarea>
                            </div>

                            <div class="form-group  ">
                                <label for="seo_keywords">Meta Keywords</label>

                                <input type="text" class="form-control" name="seo_keywords" id="seo_title"
                                       value="<?php echo e($product->seo_keywords); ?>">


                            </div>
                        </div>
                    </div>
                    <div class="box-footer">

                        <button type="submit" class="btn btn-success pull-left">Update</button>
                    </div>
                </div>


            </form>

        </div>
    </div>

    <script>

        document.forms['product'].elements['status'].value = "<?php echo e($product->status); ?>";
        document.forms['product'].elements['product_type'].value = "<?php echo e($product->product_type); ?>";


    </script>

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



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>