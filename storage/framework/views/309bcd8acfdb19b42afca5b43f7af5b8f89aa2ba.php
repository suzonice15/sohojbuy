<?php $__env->startSection('mainContent'); ?>

    <style>
        .vertical-menu {
            width: 200px;
        }

        .vertical-menu a {
            background-color: #eee;
            color: black;
            display: block;
            padding: 12px;
            text-decoration: none;
        }

        .vertical-menu a:hover {
            background-color: #ccc;
        }

        .vertical-menu a.active {
            background-color: #4CAF50;
            color: white;
        }
    </style>
<br>
<br>
<br>
    <div class="container">

        <div class="row">



            <div class="col-md-3">


                <br>

                <?php
                if(isset($user->picture)){
                ?>
                <img  class="img-fluid"  src="<?php echo e(url('/')); ?>/public/uploads/users/<?php echo e($user->picture); ?>">
<?php } else { ?>
                <img  class="img-fluid"  src="http://localhost/suhojbuy.com/public/uploads/60/thumb/60.car-home-massage-pillow.jpeg">

            <?php } ?>
                <div class="vertical-menu">
                    <?php echo $__env->make('website.customer.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

            </div>


            <div class="col-md-9">

                <?php echo $__env->yieldContent('profile_master'); ?>


            </div>


        </div>


    </div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/customer/dashboard.blade.php ENDPATH**/ ?>