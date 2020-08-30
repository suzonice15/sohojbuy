<?php if(isset($orders)): ?>
    <?php $i=$orders->perPage() * ($orders->currentPage()-1);?>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td><?php echo e($order->order_id); ?></td>
            <td><?php echo e($order->customer_name); ?></td>
            <td><?php echo e($order->customer_phone); ?></td>

            <td><?php

                  $affilite=  DB::table('users_public')->select('id','name')->where('id',$order->user_id)->first();
                  $order_from_affilite_panel=  DB::table('users_public')->select('id','name')->where('id',$order->order_from_affilite_id)->first();
                    if($affilite){
                        $affite_user='<a  class="btn btn-success" href='.$affilite->id.'>'.$affilite->name.'</a>';
                    } elseif($order_from_affilite_panel){

                        $affite_user='<a  class="btn btn-success" href='.$order_from_affilite_panel->id.'>'.$order_from_affilite_panel->name.'</a>';

                    }else {

                        $affite_user="<p class='btn btn-success' >Non Affilite</p>";
                    }

                $order_items = unserialize($order->products);

                if(is_array($order_items['items'])) {
                    foreach ($order_items['items'] as $product_id => $item) {
                        $featured_image = isset($item['featured_image']) ? $item['featured_image'] : null;

                        $product = single_product_information($product_id);
                        $sku = $product->sku;
                        $name = $product->product_name;

                        ?>
<a  target="_blank" href="<?php echo e(url('/')); ?>/<?php echo e($name); ?>">


    <span class="btn btn-info" style="height: 29px; width:150px;display: block;overflow: hidden" ><?=($item['name'])?></span>


    <br/>
    <img  src="<?=$featured_image?>" />
    ✖
    <?=($item['qty'])?>
</a>
                <br>





                <?php
                        }
                    }


     ?>



            </td>


            <td><?php

                $order_items = unserialize($order->products);

                if(is_array($order_items['items'])) {
                foreach ($order_items['items'] as $product_id => $item) {

                $product = single_product_information($product_id);
                $vendor_id=$product->vendor_id;
                if($vendor_id==0){
                   $owner=" Sohojbuy Product";
                } else {
              $vendor_result= DB::table('vendor')->where('vendor_id',$vendor_id)->first();
              }

                ?>

                <?php
                if($vendor_id==0){

                    ?>

                   <?php echo $owner; ?>

              <?php  }  else {


                ?>
                <a  target="_blank" href="<?php echo e(URL::to('/admin/vendor/view'.'/'.$vendor_id)); ?>">
                     <?php echo $vendor_result->vendor_f_name; ?>
                </a>
                <br>
                <?php } ?>





                <?php
                }
                }


                ?>



            </td>



            <td><?php echo $affite_user ?></td>
            <td> <?php echo '৳' . $order->order_total; ?>
                </td>

            <td>
                <?php if($order->order_status=='pending_payment'){
                    ?>

                <span   style="background-color:yellow"><?php echo e($order->order_status); ?></span>
                <?php  } elseif ($order->order_status=='new') { ?>
                    <span   class="btn btn-info"><?php echo e($order->order_status); ?></span>

                <?php  } elseif ($order->order_status=='processing') { ?>
                    <span   class="btn btn-info"><?php echo e($order->order_status); ?></span>

                <?php  } elseif ($order->order_status=='on_courier') { ?>

                    <span   class="btn btn-danger"><?php echo e($order->order_status); ?></span>
                <?php  } elseif ($order->order_status=='delivered') { ?>
                    <span   class="btn btn-success"><?php echo e($order->order_status); ?></span>

                <?php  } elseif ($order->order_status=='refund') { ?>

                    <span   class="btn btn-danger"><?php echo e($order->order_status); ?></span>
                <?php  } elseif ($order->order_status=='cancled') { ?>
                    <span   class="btn btn-danger"><?php echo e($order->order_status); ?></span>
                <?php } else {  ?>

                    <span   class="btn btn-success"><?php echo e($order->order_status); ?></span>
                <?php } ?>


            </td>
            <td><?php echo e(date('d-F-Y H:i:s a',strtotime($order->created_time))); ?></td>

            <td>
                <a title="edit" href="<?php echo e(url('admin/order')); ?>/<?php echo e($order->order_id); ?>">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="edit" href="<?php echo e(url('admin/order/invoice-print')); ?>/<?php echo e($order->order_id); ?>">
                    <span class="glyphicon glyphicon-print btn btn-info"></span>
                </a>


                
                    
                
            </td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <td colspan="13" align="center">
            <?php echo $orders->links(); ?>

        </td>
    </tr>
<?php endif; ?>


<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/admin/order/pagination.blade.php ENDPATH**/ ?>