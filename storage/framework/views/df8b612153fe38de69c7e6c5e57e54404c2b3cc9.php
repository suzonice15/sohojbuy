<?php $__env->startSection('mainContent'); ?>

<div class="container">
<br/>
    <div class="row">
        <div class="col-md-12">



            <div class="breadcrumb">
                <div class="container">
                    <div class="breadcrumb-inner">
                        <ul class="list-inline list-unstyled">
                            <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class='active'><?php echo e($page->page_name); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12">

            <article class="txt">

               <?php echo $page->page_content; ?>
            </article>
        </div>


    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/page.blade.php ENDPATH**/ ?>