

<?php $__env->startSection('pageTitle'); ?>
    Add New Order

<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>

<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <h2 class="page-header">
                <img src="https://sohojbuy.com/public/uploads/logo f.png" > sohojbuy.com
                <small class="pull-right">Date: <?=date('d/m/Y')?></small>
            </h2>
        </div>
        <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            From
            <address>
                <strong>sohojbuy.com </strong><br>
                Office - 1417, Level 13, Shah Ali Plaza,<br> Mirpur 10, Dhaka 1216
                <br>

                Phone:01300884747<br>
                Phone:01407011239<br>
                Email: support@sujojbuy.com
            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            To
            <address>
                <strong><?php echo e($order->customer_name); ?></strong><br>
               <?php echo e($order->customer_address); ?>

                <br/>

                Phone:   <?php echo e($order->customer_phone); ?><br>
                Email:  <?php echo e($order->customer_email); ?>

            </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
            <b>Invoice #sb<?php echo e($order->order_id); ?></b><br>
            <br>
            <b>Order ID:</b> <?php echo e($order->order_id); ?><br>
            <b>Courier :</b> <?php echo e($order->courier_service); ?><br>
            <b>Date :</b> <?php echo e(date('d/m/Y',strtotime($order->shipment_time))); ?><br>

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Sl</th>
                    <th>Product Name</th>
                    <th>Product Code</th>
                    <th>Qnt</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $order_items = unserialize($order->products);



                $html = null;
                $subtotal=0;
                if(is_array($order_items['items'])) {
                    foreach ($order_items['items'] as $product_id => $item) {
                        $featured_image = isset($item['featured_image']) ? $item['featured_image'] : null;

                        //  $_product_title =  substr($item['name'], 0, 150);

                        $product_ids[] = $product_id;
                        $product_code = 0;
                        $product_id_select = array_unique($product_ids);
                        $products_sku = DB::table('product')->select('sku')->first();
                        $product_code = $products_sku->sku;

                        $totall = intval(preg_replace('/[^\d.]/', '', isset($item['subtotal']) ? $item['subtotal'] : null));

                      //  $subtotal_price += $totall;


                        $product = single_product_information($product_id);
                        $sku = $product->sku;
                        $name = $product->product_name;
                        $subtotal +=$item['subtotal']*$item['qty'];
                ?>
                <tr>
                    <td>1</td>
                    <td><?php echo e($item['name']); ?></td>
                    <td><?php echo e($product_code); ?></td>

                    <td><?php echo e($item['qty']); ?></td>
                    <td><?php echo  $item['subtotal']; ?> Tk</td>
                    <td><?php echo  $item['subtotal']*$item['qty']; ?> Tk</td>


                </tr>

                <?php } }?>

                </tbody>
            </table>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">

        </div>
        <!-- /.col -->
        <div class="col-xs-6">


            <div class="table-responsive">
                <table class="table">
                    <tbody><tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo $subtotal;?> Tk</td>
                    </tr>
                    <tr>
                        <th> Advance Price :</th>
                        <td><?php echo e($order->advabced_price); ?> Tk</td>
                    </tr>
                    <tr>
                        <th> Discount Price:</th>
                        <td><?php echo e($order->discount_price); ?> Tk</td>

                    </tr>
                    <tr>
                        <th>  Delivery Cost :</th>
                        <td><?php echo e($order->shipping_charge); ?> Tk</td>

                    </tr>
                    <tr>
                        <th>Due:</th>
                        <td><?php echo e($order->order_total); ?> Tk</td>

                    </tr>
                    </tbody></table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>




<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/order/invoice_view.blade.php ENDPATH**/ ?>