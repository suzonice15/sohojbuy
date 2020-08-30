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

                <?php if(isset($orders)): ?>
                    <?php $i=0 ;?>
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td><?php echo e($order->order_id); ?></td>
                            <td><?php echo e($order->customer_name); ?></td>
                            <td><span class="label label-info"><?php echo e($order->customer_phone); ?><span class="label label-success"></span></td>
                            <td><span class="label label-success"><?php if($order->order_area=='inside'): ?>
                                        Inside Dhaka <?php else: ?> Outside Dhaka <?php endif; ?>
                </span></td>
                            <td><?php echo e($order->customer_address); ?></td>
                            <td><?php echo e($order->created_by); ?></td>
                            <td> <?php echo '৳' . $order->order_total; ?>
                            </td>
                            <td> <?php echo '৳' . $order->shipping_charge; ?></td>
                            <td><span class="label label-success"><?php echo e($order->order_status); ?></span></td>
                            <td><?php echo e(date('d-F-Y H:i:s a',strtotime($order->created_time))); ?></td>

                            <td>
                                <a title="edit" href="<?php echo e(url('admin/order')); ?>/<?php echo e($order->order_id); ?>">
                                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                                </a>

                                
                                
                                
                            </td>
                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php endif; ?>


            </table>

        </div>

    </div>


</div>
<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/report/order_report_by_ajax.blade.php ENDPATH**/ ?>