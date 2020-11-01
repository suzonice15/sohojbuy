<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo e(url('public/uploads/users')); ?>/<?php echo e(Session::get('picture')); ?>" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Session::get('name')); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <?php
        $status= Session::get('status');

        ?>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?php echo e(url('/dashboard')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>

            <?php
            if($status=='super-admin' or $status=='office-staff') {
            ?>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Orders</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/order/create')); ?>"><i class="fa fa-circle-o"></i>Add New Order</a></li>
                    <li><a href=" <?php echo e(url('admin/orders')); ?>"><i class="fa fa-circle-o"></i>All Orders</a></li>


                </ul>
            </li>

            <?php } ?>

            <?php
            if($status=='editor') {
            ?>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Orders</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/order/create')); ?>"><i class="fa fa-circle-o"></i>Add New Order</a></li>
                    <li><a href=" <?php echo e(url('admin/orders')); ?>"><i class="fa fa-circle-o"></i>All Orders</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/product/create')); ?>"><i class="fa fa-circle-o"></i>Add New Product </a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/products')); ?>"><i class="fa fa-circle-o"></i>All Products List</a></li>


                </ul>
            </li>

            <?php } ?>



            <?php


            if($status=='super-admin') {
            ?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/product/create')); ?>"><i class="fa fa-circle-o"></i>Add New Product </a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/products')); ?>"><i class="fa fa-circle-o"></i>All Products List</a></li>
                    <li><a href=" <?php echo e(url('admin/staff-products')); ?>"><i class="fa fa-circle-o"></i>Staff Products List</a></li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Categories</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/category/create')); ?>"><i class="fa fa-circle-o"></i>Create category</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/categories')); ?>"><i class="fa fa-circle-o"></i>All Categories</a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span> Vendors</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/vendors')); ?>"><i class="fa fa-circle-o"></i>Vendor users</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/vendor/pending/products')); ?>"><i class="fa fa-circle-o"></i>Vendor Pending Products</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/vendor/published/products')); ?>"><i class="fa fa-circle-o"></i>Vendor Published Products</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/vendor/published/Withdrow')); ?>"><i class="fa fa-circle-o"></i>Vendor Withdrow Amount</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/vendor/published/shop-name')); ?>"><i class="fa fa-circle-o"></i>Shop Name Request</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/vendor/published/history')); ?>"><i class="fa fa-circle-o"></i>Vendor Profit History</a>
                    </li>

                </ul>
            </li>

            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/user/create')); ?>"><i class="fa fa-circle-o"></i>Create User</a></li>
                    <li><a href=" <?php echo e(url('admin/users')); ?>"><i class="fa fa-circle-o"></i>Admin Users</a></li>
                    <li><a href=" <?php echo e(url('admin/generel/users')); ?>"><i class="fa fa-circle-o"></i>Generel Users</a></li>

                    <li><a href=" <?php echo e(url('admin/generel/message')); ?>"><i class="fa fa-circle-o"></i>User Message</a></li>

                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Sliders</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/slider/create')); ?>"><i class="fa fa-circle-o"></i>Add Slider </a></li>
                    <li><a href=" <?php echo e(url('admin/sliders')); ?>"><i class="fa fa-circle-o"></i>All Sliders</a></li>


                </ul>
            </li>




            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Reports</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/report/order_report')); ?>"><i class="fa fa-circle-o"></i>Order Reports</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/limited/product')); ?>"><i class="fa fa-circle-o"></i>Limited Product</a></li>
                    <li><a href=" <?php echo e(url('admin/product/click')); ?>"><i class="fa fa-circle-o"></i>Product Click Product</a></li>


                </ul>
            </li>



            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Courier</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/courier/create')); ?>"><i class="fa fa-circle-o"></i>Add New Courier </a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/couriers')); ?>"><i class="fa fa-circle-o"></i>All Couriers List</a></li>


                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Media</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/media/create')); ?>"><i class="fa fa-circle-o"></i>Add New Media Image
                        </a></li>
                    <li><a href=" <?php echo e(url('admin/media')); ?>"><i class="fa fa-circle-o"></i>All Product Images List</a>
                    </li>

                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Pages</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/page/create')); ?>"><i class="fa fa-circle-o"></i>Add New Page </a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/pages')); ?>"><i class="fa fa-circle-o"></i>All Pages </a></li>


                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Setting</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('admin/default/setting')); ?>"><i class="fa fa-circle-o"></i>Default Setting</a>
                    </li>
                    <li><a href=" <?php echo e(url('admin/homepage/setting')); ?>"><i class="fa fa-circle-o"></i>Home Page Setting</a></li>
                    <li><a href=" <?php echo e(url('admin/social/setting')); ?>"><i class="fa fa-circle-o"></i>Social Media Setting</a></li>
                    <li><a href=" <?php echo e(url('/clear-cache')); ?>"><i class="fa fa-circle-o"></i>clear-cache</a></li>

                    <li><a href=" <?php echo e(url('/admin/default/mailSetting')); ?>"><i class="fa fa-circle-o"></i>Mail Setting</a></li>


                </ul>
            </li>


        <?php } ?>









<?php
            if($status=='vendor') {
            ?>
            
            <li>
                <a href="<?php echo e(url('vendor/profile')); ?>/<?php echo e(Session::get('id')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Profile</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Orders</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('vendor/orders/show')); ?>"><i class="fa fa-circle-o"></i>All Orders</a></li>


                </ul>
            </li>

            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Products</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=" <?php echo e(url('vendor/product/create')); ?>"><i class="fa fa-circle-o"></i>Add New Product</a></li>
                    <li><a href=" <?php echo e(url('vendor/products/show')); ?>"><i class="fa fa-circle-o"></i>All Products</a></li>


                </ul>
            </li>

            <li>
                <a href="<?php echo e(url('vendor/bank-account')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Bank Account</span>
                    <span class="pull-right-container">

            </span>
                </a>

            </li>

            <li>
                <a href="<?php echo e(url('vendor/withdrow-amount')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Withdrow Amount</span>
                    <span class="pull-right-container"></span>
                </a>

            </li>
            <li>
                <a href="<?php echo e(url('vendor/change-shop-name')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Change Shop Name</span>
                    <span class="pull-right-container"></span>
                </a>

            </li>

            <li>
                <a href="<?php echo e(url('vendor/amount-history')); ?>">
                    <i class="fa fa-dashboard"></i> <span>Amount History</span>
                    <span class="pull-right-container"></span>
                </a>

            </li>

        <?php } ?>

    </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/layouts/includes/sidebar.blade.php ENDPATH**/ ?>