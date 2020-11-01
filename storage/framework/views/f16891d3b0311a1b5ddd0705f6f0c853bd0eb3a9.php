<?php $__env->startSection('mainContent'); ?>


    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Handbags</li>
                </ul>
            </div>
        </div>
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

                                        <?php if($products): ?>
                                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <?php
                                                if ($product->discount_price) {
                                                    $sell_price = $product->discount_price;
                                                } else {
                                                    $sell_price = $product->product_price;
                                                }
                                                ?>

                                                <div class="col-xs-6 col-sm-6 col-md-2 wow fadeInUp">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image">
                                                                    <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">
                                                                        <img
                                                                            src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>"
                                                                            alt="">
                                                                    </a>
                                                                </div>


                                                            </div>
                                                            <div class="product-info text-left">
                                                                <div class="product-price">
                                <span class="price">


                                  <?php echo '৳' . $sell_price; ?>
                                </span>
                                                                    <?php
                                                                    if($product->discount_price){


                                                                    ?>
                                                                    <span class="price-before-discount"
                                                                          style="color:red">  <?php echo '৳' . $product->product_price; ?> </span>

                                                                    <?php


                                                                    }
                                                                    ?>
                                                                </div>

                                                                <h3 style="margin-top: 2px;margin-bottom: -2px;"   class="name">
                                                                    <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">

                                                                        <?php echo e($product->product_title); ?>

                                                                    </a>
                                                                </h3>
                                                            </div>





























                                                        </div>
                                                    </div>
                                                </div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>


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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/search.blade.php ENDPATH**/ ?>