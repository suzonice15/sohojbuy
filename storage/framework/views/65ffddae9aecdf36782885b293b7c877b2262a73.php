<?php $__env->startSection('pageTitle'); ?>
   Order Reports
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>


    <?php

    if($reports){
        $new=0;
        $on_courier=0;
        $cancled=0;
        $completed=0;
        $refund=0;
        $delivered=0;
        $pending_payment=0;
        $processing=0;
        $new_sum=0;
        $pending_sum=0;
        $processing_sum=0;
        $on_courier_sum=0;
        $delivered_sum=0;
        $refund_sum=0;
        $cancled_sum=0;
        $completed_sum=0;
        foreach ($reports as $report){
            if($report->order_status=='new'){
                $new++;
                $new_sum +=$report->order_total;
            } else if($report->order_status=='pending_payment'){
                $pending_payment++;
                $pending_sum +=$report->order_total;
            }
            else if($report->order_status=='processing'){
                $processing++;
                $processing_sum +=$report->order_total;
            }
            else if($report->order_status=='on_courier'){
                $on_courier++;
                $on_courier_sum +=$report->order_total;
            }
            else if($report->order_status=='delivered'){
                $delivered++;
                $delivered_sum +=$report->order_total;
            }
            else if($report->order_status=='refund'){
                $refund++;
                $refund_sum +=$report->order_total;
            }
            else if($report->order_status=='cancled'){
                $cancled++;
                $cancled_sum +=$report->order_total;
            } else {
                $completed++;
                $completed_sum +=$report->order_total;
            }




        }
        }
    ?>
    <div class="box-body">


        <form action="">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Order status</label>
                    <?php echo csrf_field(); ?>
                    <select class="form-control" id="order_status" name="order_status" >
                        <option value="" style="background-color: red;">--select--</option>

                        <option value="new">New</option>
                        <option value="pending_payment">Pending for Payment</option>
                        <option value="processing">On Process</option>
                        <option value="on_courier">With Courier</option>
                        <option value="delivered">Delivered</option>
                        <option value="refund">Refunded</option>
                        <option value="cancled">Cancelled</option>
                        <option value="completed">Completed</option>
                    </select>


                 </div>
            </div>


            <div class="col-md-3">
                <div class="form-group">
                    <label>Date From</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" id="date_from" name="date_from" class="form-control pull-right  withoutFixedDate" value=" ">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Date To</label>
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" id="date_to" name="date_to" class="form-control pull-right  withoutFixedDate  " value=" ">
                    </div>
                </div>
            </div>


            <div class="col-md-2">


                <br>
                <div class="form-group">
                    <button type="button" id="filter_oreder_report" class="btn btn-success">Filter</button>
                </div>
            </div>


        </div>

        </form>
      <span id="order_report_by_ajax">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($new); ?></h3>
                        <h4><?php echo '৳' . $new_sum; ?></h4>

                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($pending_payment); ?></h3>
                        <h4><?php echo '৳' . $pending_sum; ?></h4>

                        <p>Pending for Payment</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($processing); ?></h3>
                        <h4><?php echo '৳' . $processing_sum; ?></h4>

                        <p>On Process</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($on_courier); ?></h3>
                        <h4><?php echo '৳' . $on_courier_sum; ?></h4>

                        <p>With Courier</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
        </div>

        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($delivered); ?></h3>
                        <h4><?php echo '৳' . $delivered_sum; ?></h4>

                        <p>Delivered</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($refund); ?></h3>
                        <h4><?php echo '৳' . $refund_sum; ?></h4>

                        <p>Refunded</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($cancled); ?></h3>
                        <h4><?php echo '৳' . $cancled_sum; ?></h4>

                        <p>Cancelled</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php echo e($completed); ?></h3>
                        <h4><?php echo '৳' . $completed_sum; ?></h4>

                        <p>Completed</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    
                </div>
            </div>
            <!-- ./col -->
        </div>


            <div class="box" style="border: 2px solid #ddd;">
                <div class="table-responsive">

                    <table  class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Order Id</th>
                            <th>Customer</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Address</th>
                            <th>Created By</th>
                            <th>Amount</th>
                            <th>Delivery Charge</th>
                            <th>Status</th>
                            <th>Order Date</th>
                            
                            
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php echo $__env->make('admin.report.order_report_pagination', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </tbody>

                    </table>

                </div>

            </div>


        </span>

    </div>


    <script>
        $(document).ready(function () {
            $("#filter_oreder_report").on('click', function () {
                var order_status = $("#order_status").val();
                var date_from = $("#date_from").val();
                var date_to = $("#date_to").val();
                var _token = $("input[name=_token]").val();
                alert(date_to)

                $.ajax({

                    type:'POST',

                    url:'<?php echo e(url('admin/report/order_report')); ?>',

                    data:{order_status:order_status,date_from:date_from,date_to:date_to,_token:_token},

                    success:function(data){

$('#order_report_by_ajax').html(data.html)

                    }

                });
            });
        });
    </script>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/report/order_report.blade.php ENDPATH**/ ?>