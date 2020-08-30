<?php $__env->startSection('mainContent'); ?>
    <div class="breadcrumb">
        <div class="container-fluid">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <?php if(isset($category_name_first)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_first); ?>" ><?php echo e($category_title_first); ?></a></li>
                    <?php } ?>
                    <?php if(isset($category_name_middle)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_middle); ?>" ><?php echo e($category_title_middle); ?></a></li>
                    <?php } ?>
                    <li  class='active'><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_last); ?>" ><?php echo e($category_title_last); ?></a></li>

                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <div class="body-content outer-top-xs">
        <div class='container-fluid'>
            <div class='row'>

                <div class='col-md-12'>
                    <div class="search-result-container">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">


                                            <span id="post-data">
                                                  <?php echo $__env->make('website.category_ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </span>


                                        <div class="ajax-load text-center" style="display:none">

                                            <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>

                                        </div>
                                    </div>
                                </div>
                                <!-- /.category-product -->
                            </div>

                        </div>
                        <!-- /.tab-content -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <input type="hidden"  id="category_name" name="category_name" value="<?php echo e($category_name); ?>">

    <script type="text/javascript">

        var page = 1;
        //jQuery('.ajax-load').show();
        jQuery(window).scroll(function() {


                page++;

                loadMoreData(page);



        });


        function loadMoreData(page){
   var category_name=$('#category_name').val();
            jQuery.ajax(

                {

                    url:"<?php echo e(url('/ajax_category')); ?>?page="+page+"&category_name="+category_name,

                    type: "get",

                    beforeSend: function()

                    {

                        //jQuery('.ajax-load').show();

                    }

                })

                .done(function(data)

                {
                // console.log(data.html)
                    if(data.html == " "){

                        jQuery('.ajax-load').html("No more records found");

                        return;

                    }

                    jQuery('.ajax-load').hide();

                    jQuery("#post-data").append(data.html);

                })

                .fail(function(jqXHR, ajaxOptions, thrownError)

                {

                   // alert('server not responding...');

                });

        }

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/category.blade.php ENDPATH**/ ?>