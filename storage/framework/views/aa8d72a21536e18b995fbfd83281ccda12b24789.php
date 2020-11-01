<?php $__env->startSection('pageTitle'); ?>
  Dashboard View
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
<br>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <a href="<?php echo e(url('admin/orders')); ?>" style="text-decoration: none">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo e($new); ?></h3>
                    <h4><?php echo '৳' . $new_sum; ?></h4>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>

            </div>
        </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo e($pending_payment); ?></h3>
                    <h4><?php echo '৳' . $pending_sum; ?></h4>

                    <p>Pending for Payment</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo e($processing); ?></h3>
                    <h4><?php echo '৳' . $processing_sum; ?></h4>

                    <p>On Process</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php echo e($on_courier); ?></h3>
                    <h4><?php echo '৳' . $on_courier_sum; ?></h4>

                    <p>With Courier</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                
            </div>
        </div>
        <!-- ./col -->
    </div>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($delivered); ?></h3>
                <h4><?php echo '৳' . $delivered_sum; ?></h4>

                <p>Delivered</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($refund); ?></h3>
                <h4><?php echo '৳' . $refund_sum; ?></h4>

                <p>Refunded</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($cancled); ?></h3>
                <h4><?php echo '৳' . $cancled_sum; ?></h4>

                <p>Cancelled</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($completed); ?></h3>
                <h4><?php echo '৳' . $completed_sum; ?></h4>

                <p>Completed</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
</div>


<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($today_order); ?></h3>
                <h4><?php echo '৳' . $today_order_sum; ?></h4>

                <p>Today Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($products); ?></h3>
                <h4></h4>

                <p>All Products</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo e($category); ?></h3>
                <h4></h4>

                <p>All Category</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3> <a href="<?php echo e(url('/admin/limited/product')); ?>" style="color: white;" ><?php echo e($limited_products); ?></a></h3>
                <h4></h4>

                <p>Limited Products</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            
        </div>
    </div>
    <!-- ./col -->
</div>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <a href="<?php echo e(url('admin/vendor/published/history')); ?>" style="color: white;" >
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3> <?php echo e($vendor_profit); ?></h3>
                    <h4></h4>
                    <p>Vendor Profit</p>
                </div>
                
            </div>
        </a>
    </div> 
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <a href="<?php echo e(url('admin/vendor/pending/products')); ?>" style="color: white;" >
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3> <?php echo e($vendor_pending_product); ?></h3>
                    <h4></h4>
                    <p>Vendor Pending Product</p>
                </div>
                
            </div>
        </a>
    </div> 
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>