@extends('website.master')
@section('mainContent')


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

                                        @if($products)
                                            @foreach($products as $product)

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
                                                                    <a href="{{ url('/') }}/{{$product->product_name}}">
                                                                        <img
                                                                            src="{{ url('/public/uploads') }}/{{ $product->folder }}/thumb/{{ $product->feasured_image }}"
                                                                            alt="">
                                                                    </a>
                                                                </div>


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
{{--                                                            <div class="cart clearfix animate-effect">--}}
{{--                                                                <div class="action">--}}
{{--                                                                    <ul class="list-unstyled">--}}

{{--                                                                        <li class="add-cart-button">--}}
{{--                                                                            <button data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}" class="btn btn-primary add_to_cart"--}}
{{--                                                                                    type="button">Add to cart--}}
{{--                                                                            </button>--}}
{{--                                                                        </li>--}}
{{--                                                                        <li class="add-cart-button btn-group">--}}

{{--                                                                            <button data-product_id="{{ $product->product_id}}" data-picture="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image}}" class="btn btn-primary buy-now-cart icon"--}}
{{--                                                                                    data-toggle="dropdown"--}}
{{--                                                                                    type="button">--}}
{{--                                                                                <i class="fa fa-shopping-cart"></i>--}}
{{--                                                                            </button>--}}

{{--                                                                        </li>--}}
{{--                                                                        <li class="lnk wishlist">--}}
{{--                                                                            <a class="add-to-wishlist" data-product_id="{{ $product->product_id}}" href="javascript:void(0)" title="Wishlist">--}}
{{--                                                                                <i class="icon fa fa-heart"></i>--}}
{{--                                                                            </a>--}}
{{--                                                                        </li>--}}

{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                      --}}

                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach
                                        @endif


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


@endsection
