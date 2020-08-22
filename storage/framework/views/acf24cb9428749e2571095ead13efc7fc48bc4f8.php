<!-- BEST SELLER  -->
<div class="best-deal wow  outer-bottom-xs">
    <h3 class="section-title"> <a  class="category_title_section" href="#"> Best seller</a></h3>
    <div class="sidebar-widget-body outer-top-xs">
        <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
            <?php if($products): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php

                    if ($product->discount_price) {
                        $sell_price = $product->discount_price;
                    } else {
                        $sell_price = $product->product_price;
                    }

                    ?>

                    <div class="item">
                        <div class="products best-product">

                            <div class="product">
                                <div class="product-micro">
                                    <div class="row product-micro-row">
                                        <div class="col col-xs-5">
                                            <div class="product-image">
                                                <div class="image">
                                                    <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">

                                                        <img  src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2 col-xs-7">
                                            <div class="product-info">
                                                <h3 class="name"><a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>"><?php echo e($product->product_title); ?></a></h3>
                                               <br/>
                                                <p>Product Code:  <?php echo e($product->sku); ?></p>
                                                <div class="product-price">
                                <span class="price">
                              <?php echo '৳' . $sell_price; ?> 				</span>
                                                    <?php
                                                    if($product->discount_price){


                                                    ?>
                                                    <span class="price-before-discount"
                                                          style="color:red">  <?php echo '৳' . $product->product_price; ?></span>

                                                    <?php


                                                    }
                                                    ?>
                                                </div>
                                            </div>


                                            
                                                
                                                    

                                                        
                                                            
                                                                    
                                                            
                                                        
                                                        

                                                            
                                                                    
                                                                    
                                                                
                                                            

                                                        
                                                        
                                                            
                                                                
                                                            
                                                        

                                                    
                                                
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </div>
    </div>
</div>
<!-- FEATURED PRODUCTS  -->
<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/hot_home_ajax_product.blade.php ENDPATH**/ ?>