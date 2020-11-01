<!DOCTYPE html>
<html lang="en">
<head>


    <?php


    $customer_id = Session::get('customer_id');


    if (isset($page_title)) {
        $title = $page_title . '-' . get_option('site_title');
    } else {

        $title = get_option('site_title');
    }




    ?>
            <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title><?=$title?></title>
    <link rel="shortcut icon" href="<?=get_option('icon')?>">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/bootstrap.min.css">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/main.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/blue.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/rateit.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/search.css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/stellarnav.css">


    <meta name="title" content="<?php if (isset($seo_title)) {
        echo $seo_title;
    }?>"/>
    <meta name="keywords" content="<?php if (isset($seo_keywords)) {
        echo $seo_keywords;
    }?>"/>
    <meta name="description" content="<?php if (isset($seo_description)) {
        echo $seo_description;
    }?>"/>

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <meta name="_base_url" content="<?php echo e(url('/')); ?>">

    <meta name="robots" content="index,follow"/>


    <link rel="canonical" href="<?php echo e(url()->current()); ?>"/>
    <meta property="og:locale" content="EN"/>
    <meta property="og:url" content="<?php echo e(url()->current()); ?>"/>
    <meta property="og:type" content="<?php if (isset($seo_description)) {
        echo $seo_description;
    }?>"/>
    <meta property="og:title" content="<?php if (isset($seo_title)) {
        echo $seo_title;
    }?>"/>
    <meta property="og:description" name="description" content="<?php if (isset($seo_description)) {
        echo $seo_description;
    }?>"/>
    <meta property="og:image" content="<?php if (isset($share_picture)) {
        echo $share_picture;
    } ?>"/>
    <meta property="og:site_name" content="<?php if (isset($seo_keywords)) {
        echo $seo_keywords;
    }?>"/>


    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/bootstrap-select.min.css">
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/font_end/')); ?>/css/font-awesome.css">
    <script src="<?php echo e(asset('assets/font_end/')); ?>/js/jquery-1.11.1.min.js"></script>


    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<style>


    /* Style the navigation menu */
    .topnav {
        overflow: hidden;
        background-color: black;
        position: relative;
        margin-top: 3px;
        z-index: 9999;
        width: 330px;
        margin-left: 14px;
    }

    /* Hide the links inside the navigation menu (except for logo/home) */
    .topnav #myLinks {
        display: none;
    }

    /* Style navigation menu links */
    .topnav a {
        color: white;
        padding: 14px 15px;
        text-decoration: none;
        font-size: 12px;
        display: block;
    }

    /* Style the hamburger menu */
    .topnav a.icon {
        background: black;
        display: block;
        position: absolute;
        right: 0;
        top: 0;
    }

    /* Add a grey background color on mouse-over */
    .topnav a:hover {
        background-color: #ddd;
        color: black;
    }

    /* Style the active link (or home/logo) */
    .top_welcome {
        background-color: #4CAF50;
        color: white;
    }
</style>
<body class="cnt-home">
<!--  HEADER  -->
<header class="header-style-1">
    <div class="top-bar animate-dropdown">
        <div class="container-fluid">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a  target="_blank" href="https://sohojaffiliates.com/"><i class="icon fa fa-bullhorn"></i>Affiliate</a></li>
                        <li><a href="<?php echo e(url('/vendor/login')); ?>"><i class="icon fa fa-user"></i>Vendor</a></li>
                        <li><a href="<?php echo e(url('/track-your-order')); ?>"><i class="icon fa fa-search"></i>Track Order</a></li>
                        <li><a href="<?php echo e(url('/')); ?>/wishlist"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                        <li><a href="<?php echo e(url('/cart')); ?>"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                        <li><a href="<?php echo e(url('/checkout')); ?>"><i class="icon fa fa-check"></i>Checkout</a></li>

                        <?php if(isset($customer_id)) {

                        ?>
                        <li><a href="<?php echo e(URL::to('/customer/dasboard')); ?>"><i class="icon fa fa-user"></i>My Account</a>
                        </li>

                        <?php
                        } else { ?>
                        <li><a href="<?php echo e(URL::to('/customer/login')); ?>"><i class="icon fa fa-lock"></i>Login</a></li>

                        <?php } ?>

                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="topnav">
        <a href="<?php echo e(url('/')); ?>" class="top_welcome">Welcome to Sohojbuy Online Shop
        </a>
        <!-- Navigation links (hidden by default) -->
        <div id="myLinks">
            <li><a href="<?php echo e(url('/track-your-order')); ?>"><i class="icon fa fa-search"></i>Track Order</a></li>

            <li><a href="<?php echo e(url('/')); ?>/wishlist"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="<?php echo e(url('/cart')); ?>"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            <li><a href="<?php echo e(url('/checkout')); ?>"><i class="icon fa fa-check"></i>Checkout</a></li>
            <li><a href="<?php echo e(url('/vendor/login')); ?>"><i class="icon fa fa-check"></i>Vendor</a></li>

            <?php if(isset($customer_id)) {

            ?>
            <li><a href="<?php echo e(URL::to('/customer/dasboard')); ?>"><i class="icon fa fa-user"></i>My Account</a></li>


            <?php } else { ?>
            <li><a href="<?php echo e(URL::to('/customer/login')); ?>"><i class="icon fa fa-lock"></i>Login</a></li>

            <?php } ?>
        </div>
        <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <style>

        @media  screen and (max-width: 776px) {
            form.example input[type=text] {
                padding: 8px;
                font-size: 17px;
                border: 1px solid grey;

                width: 72% !important;
                background: #f1f1f1;
                margin-left: 50px;
            }

            form.example button {
                float: left;
                width: 11% !important;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
            }
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 10%;
            padding: 10px;
            background: green;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            cursor: pointer;
        }

        form.example button:hover {
            background: green;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>

    <div class="main-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 logo-holder">
                    <div class="logo">
                        <a href="<?php echo e(url('/')); ?>">
                            <img src="<?php echo e(get_option('logo')); ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                    <div class="search-area" id="search">


                        <form class="example" action="<?php echo e(url('search')); ?>?search=" method="get">
                            <input type="text" id="searc_query" placeholder="Search Products......." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>

                        <ul class="dropdown-menu search-item-responsive">

                        </ul>

                    </div>
                    <!-- SEARCH AREA : END -->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 mobile-phone ">

                    <h2 style="color: black;font-weight: bold;margin-top: 13px;margin-left: -61px;"><img
                                style="width: 50px;" src="<?php echo e(url('/public/')); ?>/call.gif"><?=get_option('phone')?></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">

                    <!-- SHOPPING CART DROPDOWN -->
                    <div class="dropdown dropdown-cart">
                        <a href="<?php echo e(url('/cart')); ?>" class="dropdown-toggle lnk-cart main_parent_category"
                           data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>

                                <?php  $items = \Cart::getContent();

                                $total = 0;
                                $quantity = 0;
                                foreach ($items as $row) {

                                    $total = \Cart::getTotal();

                                    $quantity = Cart::getContent()->count();

                                }

                                ?>
                                <div class="basket-item-count"><span class="count"><?=$quantity?></span></div>
                                <div class="total-price-basket">
                                    <span class="lbl">cart -</span>
                                    <span class="total-price">
                      <span class="sign"></span><span class="value"><?php echo '৳' . $total; ?></span>
                      </span>
                                </div>
                            </div>
                        </a>

                    </div>
                    <!-- SHOPPING CART DROPDOWN : END -->
                </div>
            </div>
        </div>
    </div>
    <!--  NAVBAR -->
    <div class="header-nav animate-dropdown desktop_menu">
        <div class="container-fluid">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                            class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav desktop-menu-responsive">
                                <li class="dropdown ">
                                    <a href="<?php echo e(url('/all-products')); ?>">All Products</a>
                                </li>

                                <?php

                                $categories = DB::table('category')->select('category_id', 'category_title', 'category_name')->where('parent_id', 0)->where('status', 1)->paginate(13);


                                if($categories){



                                foreach ($categories as $first){
                                $firstCategory_id = $first->category_id;
                                $secondCategories = DB::table('category')->select('category_id', 'category_title', 'category_name')->where('parent_id', $firstCategory_id)->orderBy('category_id', 'ASC')->get();

                                if(count($secondCategories) > 0){



                                ?>
                                <li class="dropdown yamm mega-menu">
                                    <a href="<?php echo e(url('/category')); ?>/<?php echo e($first->category_name); ?>" data-hover="dropdown"
                                       class="dropdown-toggle main_parent_category"
                                       data-toggle="dropdown"><?php echo e($first->category_title); ?></a>
                                    <ul class="dropdown-menu container">
                                        <li>
                                            <div class="yamm-content ">
                                                <div class="row">

                                                    <?php foreach ($secondCategories as $second){

                                                    $secondCategory_id = $second->category_id;
                                                    $thirdCategories = DB::table('category')->select('category_title', 'category_name')->where('parent_id', $secondCategory_id)->orderBy('category_id', 'ASC')->get();

                                                    ?>
                                                    <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                        <h2 class="title"><a
                                                                    href="<?php echo e(url('/category')); ?>/<?php echo e($second->category_name); ?>"><?php echo e($second->category_title); ?></a>
                                                        </h2>
                                                        <ul class="links">
                                                            <?php if(count($thirdCategories) > 0) {
                                                            foreach ($thirdCategories as $third){

                                                            ?>
                                                            <li>
                                                                <a href="<?php echo e(url('/category')); ?>/<?php echo e($third->category_name); ?>"><?php echo e($third->category_title); ?></a>
                                                            </li>
                                                            <?php } } ?>

                                                        </ul>
                                                    </div>

                                                    <?php } ?>


                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <?php } else {   ?>

                                <li class="dropdown ">
                                    <a href="<?php echo e(url('/category')); ?>/<?php echo e($first->category_name); ?>"><?php echo e($first->category_title); ?></a>
                                </li>

                                <?php

                                }
                                }
                                }
                                ?>




                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    $mobile = $agent->isMobile();
    $tablet = $agent->isTablet();



    if($mobile == 1 or $tablet == 1) {
    ?>
    <div class="stellarnav mobile-menu-responsive">
        <ul>
 

            <li><a href="<?php echo e(url('/all-products')); ?>">All Products</a></li>

        <?php

            $categories = DB::table('category')->select('category_id', 'category_title', 'category_name')->where('parent_id', 0)->where('status', 1)->get();


            if($categories){



            foreach ($categories as $first){
            $firstCategory_id = $first->category_id;
            $secondCategories = DB::table('category')->select('category_id', 'category_title', 'category_name')->where('parent_id', $firstCategory_id)->orderBy('category_id', 'ASC')->get();

            if(count($secondCategories) > 0){



            ?>
            <li><a href="<?php echo e(url('/category')); ?>/<?php echo e($first->category_name); ?>"><?php echo e($first->category_title); ?></a>
                <ul>
                    <?php foreach ($secondCategories as $second){

                    $secondCategory_id = $second->category_id;
                    $thirdCategories = DB::table('category')->select('category_title', 'category_name')->where('parent_id', $secondCategory_id)->orderBy('category_id', 'ASC')->get();
                    if(count($thirdCategories) > 0){
                    ?>

                    <li><a href="#"><?php echo e($second->category_title); ?></a>
                        <ul>
                            <?php foreach ($thirdCategories as $third) {?>
                            <li><a href="<?php echo e(url('/category')); ?>/<?php echo e($third->category_name); ?>"><?php echo e($third->category_title); ?></a>
                            </li>
                            <?php } ?>

                        </ul>
                    </li>
                    <?php } else { ?>
                    <li><a href="<?php echo e(url('/category')); ?>/<?php echo e($second->category_name); ?>"><?php echo e($second->category_title); ?></a></li>


                    <?php } }?>


                </ul>
            </li>

            <?php } else { ?>

            <li><a href="<?php echo e(url('/category')); ?>/<?php echo e($first->category_name); ?>"><?php echo e($first->category_title); ?></a></li>

            <?php
            }

            }
            }
            ?>


        </ul>
    </div><!-- .stellarnav -->

    <?php  }?>
</header>

<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/includes/header.blade.php ENDPATH**/ ?>