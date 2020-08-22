@extends('layouts.master')
@section('pageTitle')
    All Vendor list
@endsection
@section('mainContent')

    <div class="box-body">
        <div class="table-responsive" >
            <table id="example1" class="table table-bordered table-striped table-responsive ">
                <thead>
                <tr>
                    <th>Sl</th>

                    <th >Name </th>

                    <th >Email </th>
                    <th >Phone </th>
                    <th >Address </th>
                    <th >Vendor Percent </th>
                    <th >Status </th>

                    <th >date </th>
                    <th >Action </th>
                </tr>
                </thead>
                <tbody>

                @if(isset($vendors))
                    <?php $i=0;?>
                    @foreach ($vendors as $user)
                        <tr>
                            <td>{{ ++$i }}</td>

                            <td>{{$user->vendor_f_name.' '.$user->vendor_l_name}} </td>
                            <td>{{$user->vendor_email}} </td>
                            <td>{{$user->vendor_phone}} </td>
                            <td>{{$user->vendor_address}} </td>
                            <td>{{$user->vendor_percent}} </td>

                            <td>
                                <?php

                            if($user->status==0){
                            ?>
                                <label class="label label-danger">Pending</label>
                                <?php } else { ?>
                                    <label class="label label-success">Active</label>
                                <?php } ?>
                            </td>
                            <td>{{date('d-m-Y',strtotime($user->registered_date))}}</td>
                            <td>
                                <a title="edit" class="btn btn-success" href="{{ url('/admin/vendor/active') }}/{{ $user->vendor_id }}">
                                    Active
                                </a>

                                <a title="edit" href="{{ url('/admin/vendor/edit') }}/{{ $user->vendor_id }}" >
                                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                                </a>
                                <a title="edit"  class="btn btn-danger"href="{{ url('/admin/vendor/inactive') }}/{{ $user->vendor_id }}">
                                    Inactive
                                </a>
                                <a title="delete" href="{{ url('/admin/vendor/delete') }}/{{ $user->vendor_id }}" onclick="return confirm('Are you want to delete this information :press Ok for delete otherwise Cancel')">
                                    <span class="glyphicon glyphicon-trash btn btn-danger"></span>
                                </a>
                            </td>
                        </tr>

                    @endforeach
                @endif
                </tbody>

            </table>

        </div>



    </div>


@endsection
