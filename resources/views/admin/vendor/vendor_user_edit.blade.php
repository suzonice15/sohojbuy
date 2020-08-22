@extends('layouts.master')
@section('pageTitle')
    Update vendor Registration Form
@endsection
@section('mainContent')
    <style>
        .has-error {
            border-color: red;
        }
    </style>
    <div class="box-body">
        @if (count($errors) > 0)
            <div class=" alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                <ul>

                    @foreach ($errors->all() as $error)

                        <li style="list-style: none">{{ $error }}</li>

                    @endforeach

                </ul>
            </div>
        @endif

        <div class="col-sm-offset-0 col-md-12">
            <form  name="vendor" action="{{ url('admin/vendor/edit/update') }}/{{ $vendor->vendor_id }}" class="form-horizontal"
                   method="post"
                   enctype="multipart/form-data">
                @csrf


                <div class="box" style="border: 2px solid #ddd;">
                    <div class="box-header with-border" style="background-color: green;color:white;">
                        <h3 class="box-title">vendor Information</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12" style="margin-left: 100px">
                                <div class="form-group">
                                    <label for="vendor_percent">Vendor Percent<span class="required">*</span></label>
                                    <input required="" type="text" id="vendor_percent" class="form-control the_title"
                                           name="vendor_percent" value="{{$vendor->vendor_percent}}">
                                </div>
                                <!-- /.form-group -->



                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->

                </div>

 <div class="box-footer">
                    <input type="submit" class="btn btn-success pull-left" value="Update">

                </div>
            </form>


            </form>
        </div>
    </div>

     






@endsection


