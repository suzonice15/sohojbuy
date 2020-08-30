
<?php $__env->startSection('mainContent'); ?>
    <div class="breadcrumb">
        <div class="container-fluid">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>

                    <li class='active'><a href="<?php echo e(url('/all-products/')); ?>">All Products</a></li>

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
                                                  <?php echo $__env->make('website.all_product_by_ajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </span>


                                        <div class="ajax-load text-center" style="display:none">

                                            <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More
                                                post</p>

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

    <script type="text/javascript">

        var page = 1;
        //jQuery('.ajax-load').show();
        jQuery(window).scroll(function () {


            page++;

            loadMoreData(page);


        });


        function loadMoreData(page) {
            jQuery.ajax(
                    {

                        url: "<?php echo e(url('/all_ajax_products')); ?>?page=" + page,

                        type: "get",

                        beforeSend: function () {

                            //jQuery('.ajax-load').show();

                        }

                    })

                    .done(function (data) {
                        // console.log(data.html)
                        if (data.html == " ") {

                            jQuery('.ajax-load').html("No more records found");

                            return;

                        }

                        jQuery('.ajax-load').hide();

                        jQuery("#post-data").append(data.html);

                    })

                    .fail(function (jqXHR, ajaxOptions, thrownError) {

                        // alert('server not responding...');

                    });

        }

    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/all_products.blade.php ENDPATH**/ ?>