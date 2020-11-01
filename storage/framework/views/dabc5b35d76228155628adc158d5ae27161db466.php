<?php $__env->startSection('mainContent'); ?>

    <style>
        /*# review rating #*/
        form.reviewform .form-group {
            float: left;
            width: 100%;
        }

        form.reviewform .srating {
            border: none;
            float: left;
        }

        form.reviewform .srating.validation-error {
            border: 1px solid #eb2a2e;
        }

        form.reviewform .srating > input {
            display: none;
        }

        form.reviewform .srating > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        form.reviewform .srating > .half:before {
            content: "\f089";
            position: absolute;
        }

        form.reviewform .srating > label {
            color: #ddd;
            float: right;
        }

        form.reviewform .srating > input:checked ~ label,
        form.reviewform .srating:not(:checked) > label:hover,
        form.reviewform .srating:not(:checked) > label:hover ~ label {
            color: #FFD700;
        }

        form.reviewform .srating > input:checked + label:hover,
        form.reviewform .srating > input:checked ~ label:hover,
        form.reviewform .srating > label:hover ~ input:checked ~ label,
        form.reviewform .srating > input:checked ~ label:hover ~ label {
            color: #FFED85;
        }

        .rating span {
            position: absolute;
            left: 0;
            top: 0;
            height: 18px;
            background: url(http://www.kalerhaat.com/images/stars.png) 0 -18px repeat-x;
        }

        .rating-overall > div {
            margin: 4px 0 5px;
            color: #444;
            font-size: 13px;
            font-weight: 600px;
        }

        .rating-overall .track {
            position: relative;
            display: inline-block;
            margin: 0 8px;
            width: 120px;
            height: 13px;
            background: #ddd;
            vertical-align: middle;
        }

        .rating-overall .track.one-star {
            margin-left: 15px;
        }

        .rating-overall .track span {
            position: absolute;
            left: 0;
            top: 0;
            height: 13px;
            background: #999;
        }

        .rating-overall .track .bar20 {
            width: 48px;
        }

        .reviews .review-right .rating-overall-desc {
            display: block;
            padding: 0px 0px 20px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            overflow: hidden;
        }

        .reviews .review-right .rating-overall-desc p {
            margin: 0px;
            line-height: normal;
        }

        .reviews .review-left .heading3 {
            margin: 0 0 15px;
            font-weight: 600;
            font-size: 16px;
        }

        .reviews .review-right .rating-overall-desc .rating, .reviews .review-right .rating-overall-desc p {
            display: inline-block;
            margin-right: 5px;
            font-weight: 600;
            vertical-align: middle;
            float: left;
        }

        .reviews .review-right ul.commentlist {
            margin: 20px 0 !important;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .reviews .review-right ul.commentlist li {
            left: 0 !important;
        }

        .reviews .review-right ul li {
            padding: 0 0 20px;
        }

        .reviews2 .review-right ul li {
            margin-left: 30px !important;
        }

        .reviews li {
            float: left;
            padding: 10px 0 6px;
            width: 100%;
            border-bottom: 1px solid #ddd;
        }

        .reviews .review-right ul.commentlist li .review-user.review-header {
            text-align: left !important;
            width: 100% !important;
            padding-top: 8px;
        }

        .reviews li .review-user {
            float: left;
            width: 18%;
            text-align: right;
        }

        .reviews .review-header .rating {
            display: inline-block;
            margin-right: 10px;
            vertical-align: middle;
        }

        .reviews .review-header h5 {
            display: inline-block;
            font-weight: 600;
            margin: 0;
        }

        .reviews #comments em.verified {
            background-color: #C95891;
            display: inline-block;
            padding: 2px 5px;
            color: #fff;
            font-size: 10px;
            text-transform: uppercase;
            font-style: normal;
            margin-right: 10px;
        }

        .reviews li .review-user small {
            display: inline-block;
            color: #555;
        }

        .reviews .review-right ul.commentlist li .review-body {
            clear: both;
        }

        .review-header h5 {
            display: inline-block;
            font-weight: 600;
            margin: 0;
        }

        .rating {
            position: relative;
            display: inline-block;
            width: 90px;
            height: 17px;
            background: url(http://www.kalerhaat.com/images/stars.png) 0 0 repeat-x;
            float: left;
        }

        .review-right .rating-overall-desc {
            display: block;
            padding: 0px 0px 20px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            overflow: hidden;
        }

        .review-right .rating-overall-desc .rating, .reviews .review-right .rating-overall-desc p {
            display: inline-block;
            margin-right: 5px;
            font-weight: 600;
            vertical-align: middle;
            float: left;
        }

        .review-right .rating-overall-desc p {
            margin: 0px;
            line-height: normal;
        }

        .review-right ul.commentlist {
            margin: 20px 0 !important;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .review-right ul.commentlist li {
            left: 0 !important;
        }

        .reviews .review-right ul li {
            padding: 0 0 20px;
        }

        .reviews li {
            float: left;
            padding: 10px 0 6px;
            width: 100%;
            border-bottom: 1px solid #ddd;
        }

        .review-right ul.commentlist li .review-user.review-header {
            text-align: left !important;
            width: 100% !important;
            padding-top: 8px;
        }
    </style>
    <?php


    $vendor_id = $product->vendor_id;
    $review_count = DB::table('review')->where('product_id', $product->product_id)->count();
    $reviews = DB::table('review')->where('product_id', $product->product_id)->get();

    if ($vendor_id > 0) {
        $vendor = DB::table('vendor')->select('vendor_link', 'vendor_shop')->where('vendor_id', $vendor_id)->first();
        $shop_link = $vendor->vendor_link;
        $shop_name = $vendor->vendor_shop;
    }

    /*# product stock availability #*/
    $product_availabie = $product->product_stock;
    $product_availability = '<span class="text-success"> In Stock</span>';
    if ($product_availabie == 0) {
        $product_availability = '<span class="text-danger">Out Of Stock</span>';

    }
    $product_id_related = $product->product_id;
    ?>

    <div class="breadcrumb">
        <div class="container-fluid">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <?php if(isset($category_name_first)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_first); ?>"><?php echo e($category_title_first); ?></a></li>
                    <?php } ?>
                    <?php if(isset($category_name_middle)) { ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_middle); ?>"><?php echo e($category_title_middle); ?></a></li>
                    <?php } ?>
                    <li><a href="<?php echo e(url('/category/')); ?>/<?php echo e($category_name_last); ?>"><?php echo e($category_title_last); ?></a></li>
                    <li class='active'><?php echo e($product->product_title); ?></li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container-fluid'>
            <div class='row single-product'>

                <?php
                use Jenssegers\Agent\Agent;

                $agent = new Agent();

                $desktop = $agent->isDesktop();
                if($desktop == 1) {
                ?>
                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container" style="margin-top:-30px">


                        <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
                            <span class="hot_deal_product"></span>

                        </div>


                    </div>
                </div>
                <?php } ?>

                        <!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="detail-block">
                        <div class="row  wow ">
                            <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                <div class="product-item-holder size-big single-product-gallery small-gallery">
                                    <div id="owl-single-productg">
                                        <div class="single-product-gallery-item ">
                                            <img class="xzoom img-responsive" alt=""
                                                 src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"
                                                 xoriginal="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"/>


                                        </div>

                                    </div>
                                    <!-- /.single-product-slider -->
                                    <div class="single-product-gallery-thumbs gallery-thumbs">
                                        <div id="owl-single-product-thumbnails">
                                            <?php
                                            if($product->galary_image_1){
                                            ?>

                                            <div class="item">
                                                <img class="img-responsive thum_image_hover " width="85" alt=""
                                                     data-echo="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->feasured_image); ?>"/>

                                            </div>
                                            <?php } ?>
                                            <?php
                                            if($product->galary_image_1){
                                            ?>

                                            <div class="item">
                                                <img class="img-responsive thum_image_hover " width="85" alt=""
                                                     data-echo="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_1); ?>"/>

                                            </div>
                                            <?php } ?>
                                            <?php
                                            if($product->galary_image_2){
                                            ?>

                                            <div class="item">
                                                <img class="img-responsive thum_image_hover " width="85" alt=""
                                                     data-echo="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_2); ?>"/>

                                            </div>
                                            <?php } ?>
                                            <?php
                                            if($product->galary_image_3){
                                            ?>

                                            <div class="item">
                                                <img class="img-responsive thum_image_hover " width="85" alt=""
                                                     data-echo="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_3); ?>"/>

                                            </div>
                                            <?php } ?>
                                            <?php
                                            if($product->galary_image_4){
                                            ?>

                                            <div class="item">
                                                <img class="img-responsive thum_image_hover " width="85" alt=""
                                                     data-echo="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_4); ?>"/>

                                            </div>
                                            <?php } ?>
                                            <?php
                                            if($product->galary_image_5){
                                            ?>

                                            <div class="item">
                                                <img class="img-responsive thum_image_hover " width="85" alt=""
                                                     data-echo="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_5); ?>"/>

                                            </div>
                                            <?php } ?>
                                            <?php
                                            if($product->galary_image_6){
                                            ?>

                                            <div class="item">
                                                <img class="img-responsive thum_image_hover " width="85" alt=""
                                                     data-echo="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/<?php echo e($product->galary_image_6); ?>"/>

                                            </div>
                                            <?php } ?>


                                        </div>
                                        <!-- /#owl-single-product-thumbnails -->
                                    </div>
                                    <!-- /.gallery-thumbs -->
                                </div>
                                <!-- /.single-product-gallery -->


                            </div>
                            <!-- /.gallery-holder -->
                            <div class='col-sm-6 col-md-7 product-info-block'>
                                <div class="product-info">
                                    <h3 class="name"><?php echo e($product->product_title); ?></h3>
                                    <p style="font-size: 16px;background: #64C284;color: #fff; display: inline-block;padding: 7px 12px;border-radius: 20px;">
                                        Product Code: <?php echo e($product->sku); ?></p>
                                    <?php
                                    if(isset($shop_link)){
                                    ?>
                                    <h4>Shop : <a href="<?php echo e(URL::to('shop/'.$shop_link)); ?>"><?php echo e($shop_name); ?></a></h4>
                                    <?php }?>
                                    <div class="rating-reviews m-t-20">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div><span style="
    color: #6b6b0c;
    font-size: 24px;
" class="stars-container stars-0">★★★★★</span></div>

                                            </div>
                                            <div class="col-sm-8">
                                                <div class="reviews">
                                                    <h5>(<?php echo e($review_count); ?> Reviews)</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.rating-reviews -->
                                    <div class="stock-container info-container m-t-2"
                                         style="margin-top: 0px;font-size: 3px;margin-bottom: -5px;">
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span style="font-size: 14px;font-weight: bold;" class="label">In Stock :</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <span class="value"
                                                          style="font-weight: bold;color:green;"><?php echo e($product->product_stock); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <div class="stock-container info-container m-t-2"
                                         style="margin-top: 0px;font-size: 3px;margin-bottom: -5px;">
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <div class="stock-box">
                                                    <span style="font-size: 14px;font-weight: bold;" class="label">Availability :</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="stock-box">
                                                    <span class="value"
                                                          style="font-weight: bold"><?=$product_availability?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.stock-container -->
                                    <?php if($product->product_specification): ?>
                                        <div class="description-container m-t-20">

                                            <?php echo $product->product_specification ?>

                                        </div>
                                        <?php endif; ?>
                                                <!-- /.description-container -->
                                        <div class="price-container info-container m-t-2">
                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <div class="price-box">
                                                        <?php
                                                        if ($product->discount_price) {
                                                            $sell_price = $product->discount_price;
                                                        } else {
                                                            $sell_price = $product->product_price;
                                                        }
                                                        ?>
                                                        <span class="price" style="color:black">


                                  <?php echo '৳' . $sell_price; ?>
                                </span>


                                                        <?php
                                                        if($product->discount_price){


                                                        ?>
                                                        <span class="price-strike"
                                                              style="color:red;font-weight: bold">  <?php echo '৳' . $product->product_price; ?> </span>

                                                        <?php


                                                        }
                                                        ?>
                                                        <br>
                                                        <?php if($product->product_point > 0) { ?>
                                                        <span style="color:#f96b25;font-weight:bold"> Earn <?php echo $product->product_point;?>
                                                            Shopping Points </span>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.row -->
                                        </div>
                                        <!-- /.price-container -->
                                        <div class="quantity-container info-container">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <span class="label">Quantity :</span>
                                                </div>
                                                <div class="col-sm-2">
                                                    <div class="cart-quantity">
                                                        <div class="quant-input">
                                                            <div class="arrows">
                                                                <div class="arrow plus gradient"><span class="ir"><i
                                                                                class="icon fa fa-sort-asc"></i></span>
                                                                </div>
                                                                <div class="arrow minus gradient"><span class="ir"><i
                                                                                class="icon fa fa-sort-desc"></i></span>
                                                                </div>
                                                            </div>
                                                            <input type="text" id="quantity_of_sell" value="1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                if($product->product_stock == 0)
                                                {
                                                ?>
                                                <div class="col-sm-8">
                                                    <a data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>"
                                                       class="btn btn-danger btn disabled"
                                                       href="javascript:void(0)"> ADD TO CART</a>
                                                    <a href="javascript:void(0)"
                                                       data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>"
                                                       class="btn btn-danger btn disabled"
                                                    > BUY NOW </a>

                                                </div>
                                                <?php
                                                }else{
                                                ?>
                                                <div class="col-sm-8">
                                                    <a data-product_id="<?php echo e($product->product_id); ?>"
                                                       data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>"
                                                       class="btn btn-primary add_to_cart"
                                                       href="javascript:void(0)"> ADD TO CART</a>
                                                    <a href="javascript:void(0)"
                                                       data-product_id="<?php echo e($product->product_id); ?>"
                                                       data-picture="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>"
                                                       class="btn btn-success buy-now-cart icon"
                                                    > BUY NOW </a>
                                                    <button data-product_id="<?php echo e($product->product_id); ?>"
                                                            class="btn btn-success add-to-wishlist icon"
                                                            data-toggle="dropdown"
                                                            type="button">
                                                        <i class="icon fa fa-heart"></i>
                                                    </button>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <div class="quantity-container info-container">
                                            <div class="row">
                                                <div class="col-sm-12 col-xs-12" style="padding:0">
                                                    <h4 style="font-weight:bold;color:red"><i
                                                                class="fa fa-address-book"> </i> ফোনে অর্ডারের জন্য
                                                        ডায়াল করুন</h4>
                                                    <div class="col-sm-6 col-xs-12" style="padding:0">
                                                        <h4 style="font-size:22px;margin: 15px 0 15px 0;text-align:center;color:red;font-weight:900;text-align: left">


                                                            <?=get_option('phone_order')?>
                                                        </h4>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12  col-xs-12" style="padding: 0">
                                                        <img style="width: 60px;padding: 10px"
                                                             class="img-responsive pull-left mobile-icon"
                                                             src="http://www.egbazar.com//front_asset/d.png"
                                                             alt="Call azibto" title="Call azibto">
                                                        <h3 class="font-size-title-mobile"
                                                            style="font-weight: bold;font-size: 18px;text-align:left">
                                                            ঢাকায় ডেলিভারি খরচ:
                                                            ৳ <?=$product->delivery_in_dhaka?></h3>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0">
                                                        <img style="width: 60px;padding: 10px"
                                                             class="img-responsive pull-left  mobile-icon"
                                                             src="http://www.egbazar.com//front_asset/od.png"
                                                             alt="Call azibto" title="Call azibto">
                                                        <h3 class="font-size-title-mobile"
                                                            style="font-weight: bold;font-size: 18px;text-align:left">
                                                            ঢাকার বাইরের ডেলিভারি খরচ: ৳<?=$product->delivery_out_dhaka?>
                                                        </h3>
                                                    </div>

                                                    <div class="col-sm-12 col-md-12 col-xs-12" style="padding:0">
                                                        <img style="width: 60px;padding: 10px"
                                                             class="img-responsive pull-left  mobile-icon"
                                                             src="http://www.egbazar.com//front_asset/bk.png"
                                                             alt="Call azibto" title="Azibto  ">
                                                        <h3 class="font-size-title-mobile"
                                                            style="font-weight: bold;font-size: 18px;text-align:left">
                                                            বিকাশ নাম্বার: <?=get_option('bkash')?>
                                                        </h3>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.row -->
                                        </div>

                                        <!-- /.quantity-container -->
                                </div>
                                <!-- /.product-info -->
                            </div>
                            <!-- /.col-sm-7 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="product-tabs inner-bottom-xs  wow fadeInUp">
                        <div class="row">
                            <div class="col-sm-4">
                                <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                    <li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
                                    <li><a data-toggle="tab" href="#video">Video</a></li>
                                    <li><a data-toggle="tab" href="#tearm">terms and condition</a></li>
                                    <li><a data-toggle="tab" href="#review">REVIEW</a></li>

                                </ul>
                                <!-- /.nav-tabs #product-tabs -->
                            </div>
                            <div class="col-sm-8">
                                <div class="tab-content">
                                    <div id="description" class="tab-pane in active">
                                        <div class="product-tab">

                                            <?php echo $product->product_description; ?>

                                        </div>
                                    </div>


                                    <div id="video" class="tab-pane">
                                        <div class="product-tab">

                                            <iframe width="500" height="345"
                                                    src="<?php echo $product->product_video;?>">
                                            </iframe>

                                        </div>
                                    </div>

                                    <div id="tearm" class="tab-pane">
                                        <div class="product-tab">

                                            <?php echo get_option('default_product_terms'); ?>

                                        </div>
                                    </div>
                                    <!-- /.tab-pane -->
                                    <div id="review" class="tab-pane">
                                        <div class="product-tab">
                                            <div class="col-sm-12 text-left" style="padding:0 20px">

                                                <?php

                                                $user_id = Session::get('user_id');
                                                if($user_id){
                                                ?>


                                                <div class="col-sm-6  col-xs-12 review-left" style="padding-left: 0;">
                                                    <h4 class="heading3">Write a Review</h4>
                                                    <form class="form-vertical reviewform">
                                                        <?php echo csrf_field(); ?>
                                                        <fieldset class="field field-rating srating">
                                                            <input type="radio" id="star5" name="rating" value="5">
                                                            <label class="full" for="star5" title="5 stars"></label>
                                                            <input type="radio" id="star4" name="rating" value="4">
                                                            <label class="full" for="star4" title="4 stars"></label>
                                                            <input type="radio" id="star3" name="rating" value="3">
                                                            <label class="full" for="star3" title="3 stars"></label>
                                                            <input type="radio" id="star2" name="rating" value="2">
                                                            <label class="full" for="star2" title="2 stars"></label>
                                                            <input type="radio" id="star1" name="rating" value="1">
                                                            <label class="full" for="star1" title="1 star"></label>
                                                        </fieldset>
                                                        <div class="form-group">
                                                            <input type="hidden" name="name" id="name"
                                                                   class="form-control field field-name"
                                                                   value="<?php echo e(Session::get('name')); ?>" placeholder="Name"
                                                                   style="width: 100% !important;">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="hidden" name="email" id="email"
                                                                   class="form-control field field-email"
                                                                   value="<?php echo e(Session::get('email')); ?>" placeholder="Email"
                                                                   style="width: 100% !important;">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea rows="3" name="comment" id="comment"
                                                                      class="form-control field field-comment"
                                                                      placeholder="Comments"></textarea>
                                                        </div>

                                                        <input type="hidden" name="product_id" id="product_review_id"
                                                               value="<?php echo e($product->product_id); ?>">

                                                        <button style="background:#4267b2;color:#fff;border-radius:5px;margin-top:10px;margin-bottom:20px"
                                                                type="button" id="reviewbtn"
                                                                class="btn btn-new form-control">continue
                                                        </button>
                                                    </form>
                                                </div>
                                                <?php } else {  ?>
                                                <a href="<?php echo e(URL::to('customer/login')); ?>" target="_blank"
                                                   class="btn btn-success">To Write A Review Login First</a>
                                                <?php }?>


                                                <div class="col-sm-6 col-xs-12 review-right">
                                                    <div class="rating-overall-desc">

                                                        <div class="rating"><span style="width:0%"></span></div>

                                                        <p><?php echo e($review_count); ?> Customer Reviews</p></div>
                                                    <ul class="commentlist">

                                                        <?php
                                                        if($reviews){


                                                        foreach ($reviews as $review){
                                                        ?>
                                                        <li class="comment even thread-even depth-1">
                                                            <div class="review-user review-header">
                                                                <div class="rating">
                                                                    <span style="width:<?php echo 20 * $review->rating ?>%"></span>
                                                                </div>
                                                                <br/>
                                                                <h5 itemprop="author"><?php echo e($review->name); ?></h5>
                                                                <em class="verified">verified</em>
                                                                <small><?php echo e(date('d-M-Y h:i:s',strtotime($review->created_time))); ?></small>
                                                            </div>
                                                            <div class="review-body">
                                                                <div class="review-text" itemprop="description">
                                                                    <p><?php echo e($review->comment); ?></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <?php } } ?>

                                                    </ul>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- /.product-tab -->
                                    </div>

                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.product-tabs -->

                    <section class="section featured-product wow fadeInUp">
                        <span id="related_product"></span>

                    </section>


                    <section class="section featured-product wow fadeInUp">

                        <div class="sidebar-module-container">
                            <?php


                            $agent = new Agent();
                            $mobile = $agent->isMobile();
                            $tablet = $agent->isTablet();

                            if($mobile == 1 or $tablet == 1) {
                            ?>

                            <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
                                <span class="hot_deal_product"></span>

                            </div>

                            <?php } ?>


                        </div>


                    </section>
                    <!-- /.section -->
                </div>
                <!-- /.col -->
                <div class="clearfix"></div>
            </div>

        </div>
        <!-- /.container -->
    </div>





    <!-- /.body-content -->
    <input type="hidden" id="related_product_id" name="product_id" value="<?php echo $product_id_related; ?>">


    <script>
        $(".thum_image_hover").on("mouseover", function () {
            let image = $(this).attr('src');
            $(".xzoom").attr('src', image);
            $(".xzoom").attr('xoriginal', image);
        });


    </script>

    <script>
        jQuery(document).ready(function () {


            $.ajax({

                url: "<?php echo e(url('hotdeal/product')); ?>",
                method: "get",
                success: function (data) {

                    jQuery(".hot_deal_product").html(data.html);
                    jQuery(".sidebar-carousel").owlCarousel({
                        items: 1,
                        navigation: true,
                        itemsTablet: [768, 3],
                        itemsDesktopSmall: [979, 2],
                        itemsDesktop: [1199, 2],
                        itemsMobile: [768, 2],
                        slideSpeed: 300,
                        pagination: false,
                        paginationSpeed: 400,
                        navigationText: ["", ""]
                    });

                }
            });
        });

    </script>

    <script>
        jQuery(document).ready(function () {


            var product_id = jQuery('#related_product_id').val();


            $.ajax({

                url: "<?php echo e(url('related/product')); ?>?product_id=" + product_id,
                method: "get",
                success: function (data) {

                    jQuery("#related_product").html(data.html);
                    jQuery(".home-owl-carousel").owlCarousel({
                        items: 6,
                        navigation: true,
                        itemsTablet: [768, 3],
                        itemsDesktopSmall: [979, 2],
                        itemsDesktop: [1199, 2],
                        itemsMobile: [768, 2],
                        slideSpeed: 300,
                        pagination: false,
                        paginationSpeed: 400,
                        navigationText: ["", ""]
                    });

                }
            });
        });

    </script>

    <script>


        $('#reviewbtn').on('click', function () {


            var rating = $('input[name=rating]:checked').val();
            var name = $('#name').val();
            var email = $('#email').val();
            var comment = $('#comment').val();
            var product_id = $('#product_review_id').val();
            var base_url = '<?php echo e(url('/')); ?>/';


            if (typeof (rating) == 'undefined') {
                alert("Enter rating value");
                return false;
            }

            if (comment == '') {
                alert("Enter your comment")
                return false;
            }

            var ajax_url = base_url + 'add_to_review';

            $.ajax({
                type: 'POST',
                data: {
                    "rating": rating,
                    "name": name,
                    "email": email,
                    "comment": comment,
                    "product_id": product_id,
                    "_token": "<?php echo e(csrf_token()); ?>"
                },
                url: ajax_url,

                success: function (result) {

                    location.reload();
                }
            });
        });

    </script>
    <input type="hidden" name="_token" id="token" value="<?php echo e(csrf_token()); ?>">


    <!--              share with social media    -->
    <script type="text/javascript"
            src="<?php echo e(asset('assets/font_end/')); ?>/dist/jquery.floating-social-share.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('assets/font_end/')); ?>/dist/jquery.floating-social-share.min.css"/>

    <!--             X-Zoom plagin    -->

    <script type="text/javascript" src="<?php echo e(asset('assets/font_end/')); ?>/dist/xzoom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/font_end/')); ?>/dist/xzoom.css"/>




    <script>
        var url = window.location.href;

        $("body").floatingSocialShare({
            buttons: [
                "facebook", "linkedin", "pinterest",
                "twitter", "whatsapp"
            ],
            text: "share with:",
            url: document.URL,

        });

    </script>
    <script>

        $(".xzoom").xzoom({tint: '#333', Xoffset: 15});

    </script>

    <script>

        var product_id = jQuery('#related_product_id').val();


        $.ajax({

            url: "<?php echo e(url('product/click')); ?>",
            method: "post",
            data: {product_id: product_id, "_token": $('#token').val()},
            success: function (data) {


            }
        });

    </script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/product.blade.php ENDPATH**/ ?>