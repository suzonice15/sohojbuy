@extends('layouts.master')
@section('pageTitle')
  Dashboard View
@endsection
@section('mainContent')
<br>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <a href="{{url('admin/orders')}}" style="text-decoration: none">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$new}}</h3>
                    <h4>@money($new_sum)</h4>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
{{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </a>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$pending_payment}}</h3>
                    <h4>@money($pending_sum)</h4>

                    <p>Pending for Payment</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$processing}}</h3>
                    <h4>@money($processing_sum)</h4>

                    <p>On Process</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$on_courier}}</h3>
                    <h4>@money($on_courier_sum)</h4>

                    <p>With Courier</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>
        <!-- ./col -->
    </div>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$delivered}}</h3>
                <h4>@money($delivered_sum)</h4>

                <p>Delivered</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$refund}}</h3>
                <h4>@money($refund_sum)</h4>

                <p>Refunded</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$cancled}}</h3>
                <h4>@money($cancled_sum)</h4>

                <p>Cancelled</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$completed}}</h3>
                <h4>@money($completed_sum)</h4>

                <p>Completed</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
</div>


<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$today_order}}</h3>
                <h4>@money($today_order_sum)</h4>

                <p>Today Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$products}}</h3>
                <h4></h4>

                <p>All Products</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>{{$category}}</h3>
                <h4></h4>

                <p>All Category</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3> <a href="{{url('/admin/limited/product')}}" style="color: white;" >{{$limited_products}}</a></h3>
                <h4></h4>

                <p>Limited Products</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
        </div>
    </div>
    <!-- ./col -->
</div>

@endsection

