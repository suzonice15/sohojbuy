<h3 class="section-title"> <a href="" class="category_title_section">Related products</a> </h3>
<div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
    <?php

     ?>

    <?php foreach ( $products->unique('product_name') as $product) {

    if ($product->discount_price) {
        $sell_price = $product->discount_price;
    } else {
        $sell_price = $product->product_price;
    }

    ?>

    <div class="item item-carousel">
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
                    <!-- /.image -->
                 </div>
                <!-- /.product-image -->
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

                       <p  style="margin: -3px 1px;" > Code:<?php echo e($product->sku); ?></p>
                        <h3 style="margin-top: 2px;margin-bottom: -2px;"   class="name">
                            <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">

                                <?php echo e($product->product_title); ?>

                            </a>
                        </h3>


                    </div>



                      <!-- /.product-price -->
                </div>
                <!-- /.product-info -->




























                <!-- /.cart -->
            </div>
            <!-- /.product -->
        </div>
        <!-- /.products -->
    </div>

    <?php  }?>

</div>
<!-- /.home-owl-carousel -->
<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/related_product.blade.php ENDPATH**/ ?>