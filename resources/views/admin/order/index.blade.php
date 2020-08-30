@extends('layouts.master')
@section('pageTitle')
    All Orders  List
@endsection
@section('mainContent')
<div class="box-body">
    <div class="row">


        <div class="col-md-10 col-sm-12">


            <input class="btn btn-success status_check" type="button"  id="new"  value="new"/>
            <input class="btn btn-success status_check" type="button"   id="phone_pending"  value="phone_pending"/>
            <input class="btn btn-success status_check" type="button" id="pending_payment"   value="pending_payment"/>
            <input class="btn btn-success status_check" type="button"  id="processing"   value="processing"/>
            <input class="btn btn-success status_check" type="button"    id="on_courier" value="on_courier"/>
            <input class="btn btn-success status_check" type="button"  id="delivered"  value="delivered"/>
            <input class="btn btn-success status_check" type="button"   id="refund"  value="refund"/>
            <input class="btn btn-success status_check" type="button"  id="completed"   value="completed"/>
            <input class="btn btn-success status_check" type="button"  id="cancled"  value="cancled"/>

        </div>
        <div class="col-md-2  col-sm-12 pull-right">
            <input type="text" id="serach" name="search" placeholder="Order Id,Customer Phone" class="form-control" >
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

                <th>Order Owner</th>
                <th>Amount</th>

                <th>Status</th>
               <th>Order Date</th>

                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

               @include('admin.order.pagination')
            </tbody>

        </table>

    </div>

    <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="status" id="status" value="{{$order_status}}" />

</div>

<script>
    $(document).ready(function(){


        function fetch_data(page,status)
        {
            $.ajax({
                type:"GET",
                {{--url:"{{url('order/pagination')}}?page="+page+"&query="+query+"&status="+status,--}}
                url:"{{url('order/pagination')}}?page="+page+"&status="+status,
                success:function(data)
                {
                    $('tbody').html('');
                    $('tbody').html(data);
                }
            })
        }

        function fetch_data_search(page,query)
        {
            $.ajax({
                type:"GET",
                url:"{{url('order/pagination_by_search')}}?page="+page+"&query="+query,

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
            var status = $('#status').val();
            if(query.length >0) {
                fetch_data_search(page,query);
            } else {
                fetch_data_search(1, '');
            }
        });


        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            $('#hidden_page').val(page);
         var status=$('#status').val();

            fetch_data(page,status);
        });



            $(document).on('click', '.status_check', function() { // code

var status=$(this).val()
                $('#status').val(status);
                var status=$('#status').val();
//                 if(status=='new'){
//                    $('#new').addClass('btn btn-danger');
//                    $('#pending_payment').rClass('btn btn-success');
//                    $('#phone_pending').addClass('btn btn-success');
//                    $('#processing').addClass('btn btn-success');
//                    $('#on_courier').addClass('btn btn-success');
//                    $('#delivered').addClass('btn btn-success');
//                    $('#completed').addClass('btn btn-success');
//                    $('#cancled').addClass('btn btn-success');
//
//
//                } else if(status=='phone_pending'){
//
//                     $('#new').addClass('btn btn-success');
//                     $('#pending_payment').addClass('btn btn-success');
//                     $('#phone_pending').addClass('btn btn-danger');
//                     $('#processing').addClass('btn btn-success');
//                     $('#on_courier').addClass('btn btn-success');
//                     $('#delivered').addClass('btn btn-success');
//                     $('#completed').addClass('btn btn-success');
//                     $('#cancled').addClass('btn btn-success');
//                }
//
//                 else if(status=='pending_payment'){
//
//                     $('#new').addClass('btn btn-success');
//                     $('#pending_payment').addClass('btn btn-danger');
//                     $('#phone_pending').addClass('btn btn-success');
//                     $('#processing').addClass('btn btn-success');
//                     $('#on_courier').addClass('btn btn-success');
//                     $('#delivered').addClass('btn btn-success');
//                     $('#completed').addClass('btn btn-success');
//                     $('#cancled').addClass('btn btn-success');
//                 }
//                 else if(status=='processing'){
//
//                     $('#new').addClass('btn btn-success');
//                     $('#pending_payment').addClass('btn btn-success');
//                     $('#phone_pending').addClass('btn btn-success');
//                     $('#processing').addClass('btn btn-danger');
//                     $('#on_courier').addClass('btn btn-success');
//                     $('#delivered').addClass('btn btn-success');
//                     $('#completed').addClass('btn btn-success');
//                     $('#cancled').addClass('btn btn-success');
//                 }
//                 else if(status=='on_courier'){
//
//                     $('#new').addClass('btn btn-success');
//                     $('#pending_payment').addClass('btn btn-success');
//                     $('#phone_pending').addClass('btn btn-success');
//                     $('#processing').addClass('btn btn-success');
//                     $('#on_courier').addClass('btn btn-danger');
//                     $('#delivered').addClass('btn btn-success');
//                     $('#completed').addClass('btn btn-success');
//                     $('#cancled').addClass('btn btn-success');
//                 }
//                 else if(status=='delivered'){
//
//                     $('#new').addClass('btn btn-success');
//                     $('#pending_payment').addClass('btn btn-success');
//                     $('#phone_pending').addClass('btn btn-success');
//                     $('#processing').addClass('btn btn-success');
//                     $('#on_courier').addClass('btn btn-success');
//                     $('#delivered').addClass('btn btn-danger');
//                     $('#completed').addClass('btn btn-success');
//                     $('#cancled').addClass('btn btn-success');
//                 }
//                 else if(status=='completed'){
//
//                     $('#new').addClass('btn btn-success');
//                     $('#pending_payment').addClass('btn btn-success');
//                     $('#phone_pending').addClass('btn btn-success');
//                     $('#processing').addClass('btn btn-success');
//                     $('#on_courier').addClass('btn btn-success');
//                     $('#delivered').addClass('btn btn-success');
//                     $('#completed').addClass('btn btn-danger');
//                     $('#cancled').addClass('btn btn-success');
//                 }
//
//                 else  {
//
//                     $('#new').addClass('btn btn-success');
//                     $('#pending_payment').addClass('btn btn-success');
//                     $('#phone_pending').addClass('btn btn-success');
//                     $('#processing').addClass('btn btn-success');
//                     $('#on_courier').addClass('btn btn-success');
//                     $('#delivered').addClass('btn btn-success');
//                     $('#completed').addClass('btn btn-success');
//                     $('#cancled').addClass('btn btn-danger');
//                 }
//
//

            var page = 1;




            fetch_data(page, status);


        })




    });
</script>


@endsection

