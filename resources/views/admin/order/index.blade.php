@extends('layouts.master')
@section('pageTitle')
    All Orders  List
@endsection
@section('mainContent')
<div class="box-body">
    <div class="row">
        <div class="col-md-5  pull-right">
            <input type="text" id="serach" name="search" placeholder="Search Order By Order Id,Customer Phone" class="form-control" >
            <br>
        </div>
    </div>
    <div class="table-responsive">

        <table  class="table table-bordered table-striped ">
            <thead>
            <tr>

                <th>Order Id</th>
                <th>Customer</th>
                <th>Phone</th>

                <th>Product</th>
                <th>Vendor</th>
                <th>Created By</th>
                <th>Order Owner</th>
                <th>Amount</th>

                <th>Status</th>
               <th>Order Date</th>
               {{--<th>Shipping Date</th>--}}
               {{--<th>Order Modified</th>--}}
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

               @include('admin.order.pagination')
            </tbody>

        </table>

    </div>

    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />

</div>

<script>
    $(document).ready(function(){


        function fetch_data(page, query)
        {
            $.ajax({
                type:"GET",
                url:"{{url('order/pagination')}}?page="+page+"&query="+query,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        $(document).on('keyup input', '#serach', function(){
            var query = $('#serach').val();
            var page = $('#hidden_page').val();
            if(query.length >0) {
                fetch_data(page, query);
            } else {
                fetch_data(1, '');
            }
        });


        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
            var query = $('#serach').val();
            fetch_data(page, query);
        });

    });
</script>


@endsection

