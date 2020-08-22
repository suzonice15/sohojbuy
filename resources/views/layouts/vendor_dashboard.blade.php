@extends('layouts.master')
@section('pageTitle')
   Vendor Dashboard
@endsection
@section('mainContent')
    <br>


    <div class="row">

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$products}}</h3>
                    <h4></h4>

                    <p>My Products</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                {{--                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>--}}
            </div>
        </div>

    </div>

@endsection

