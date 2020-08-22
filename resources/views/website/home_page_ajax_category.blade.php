<?php
 $home_cat_section = explode(",", get_option('home_cat_section'));
Arr::forget($home_cat_section,'0');


$categories=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();
if($home_cat_section){
foreach ($home_cat_section as  $category) {
  //  $category_id=$category->category_id;
$category_info = get_category_info($category);


$products= DB::table('product')->select('product.product_id','product_title','product_name','discount_price','product_price','folder','feasured_image','sku')->join('product_category_relation','product.product_id','=','product_category_relation.product_id')
       ->where('product_category_relation.category_id',$category)->where('status','=',1)->orderBy('modified_time','desc')->paginate(10);
?>
<section class="section featured-product wow ">
    <h3 class="section-title">
        <a
class="category_title_section" href="{{ url('/') }}/category/{{ $category_info->category_name}}">{{ $category_info->category_title }}</a>
    </h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

        <?php


        if($products){
        foreach ($products as  $product){

        if ($product->discount_price) {
            $sell_price = $product->discount_price;
        } else {
            $sell_price = $product->product_price;
        }
        ?>
        <div class="item item-carousel" style="border: 1px solid #ddd;border-right:0px solid #ddd;padding: 5px 5px;margin-bottom: 7px;" >
            <div class="products" >


                <div class="product">
                    <div class="product-image" style="margin-right: -16px;">
                        <div class="image">
                            <a href="{{ url('/') }}/{{$product->product_name}}">
                                <img
                                    src="{{ url('/public/uploads') }}/{{ $product->folder }}/thumb/{{ $product->feasured_image }}"
                                    alt="">
                            </a>                        </div>

                    </div>
                    <div class="product-info text-left">
                        <div class="product-price">
                                <span class="price">


                                  @money($sell_price)
                                </span>
                            <?php
                            if($product->discount_price){


                            ?>
                            <span class="price-before-discount"
                                  style="color:red">  @money($product->product_price) </span>

                            <?php


                            }
                            ?>
                        </div>

                        <h3 style="margin-top: 2px;margin-bottom: -2px;"   class="name">
                            <a href="{{ url('/') }}/{{$product->product_name}}">

                                {{ $product->product_title }}
                            </a>
                        </h3>
                    </div>
{{--                    <div class="cart clearfix animate-effect">--}}
{{--                        <div class="action">--}}
{{--                            <ul class="list-unstyled">--}}

{{--                                <li class="add-cart-button">--}}
{{--                                    <button data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}" class="btn btn-primary add_to_cart"--}}
{{--                                            type="button">Add to cart--}}
{{--                                    </button>--}}
{{--                                </li>--}}
{{--                                <li class="add-cart-button btn-group">--}}

{{--                                    <button data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}" class="btn btn-primary buy-now-cart icon"--}}
{{--                                            data-toggle="dropdown"--}}
{{--                                            type="button">--}}
{{--                                        <i class="fa fa-shopping-cart"></i>--}}
{{--                                    </button>--}}

{{--                                </li>--}}
{{--                                <li class="lnk wishlist">--}}
{{--                                    <a class="add-to-wishlist" data-product_id="{{ $product->product_id}}" href="javascript:void(0)" title="Wishlist">--}}
{{--                                        <i class="icon fa fa-heart"></i>--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}


                </div>


            </div>
        </div>
            <?php } } ?>


    </div>
</section>

<?php

}
}
?>
