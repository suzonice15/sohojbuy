@if(isset($orders))
    <?php $i=$orders->perPage() * ($orders->currentPage()-1);?>
    @foreach ($orders as $order)
        <tr>

            <td>{{ $order->order_id }}</td>
            <td>{{ $order->customer_name }}</td>
            <td>{{ $order->customer_phone }}</td>

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
                $sku=0;
                $name=0;
                if(is_array($order_items['items'])) {
                    foreach ($order_items['items'] as $product_id => $item) {
                        $featured_image = isset($item['featured_image']) ? $item['featured_image'] : null;

                        $product = single_product_information($product_id);
                    if($product){
                        $sku = $product->sku;
                        $name = $product->product_name;
                    }

                        ?>
<a  target="_blank" href="{{url('/')}}/{{ $name }}">


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
                $vendor_id=0;
                if(is_array($order_items['items'])) {
                foreach ($order_items['items'] as $product_id => $item) {

                $product = single_product_information($product_id);
                    if($product){
                $vendor_id=$product->vendor_id;
                    }
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
                <a  target="_blank" href="{{URL::to('/admin/vendor/view'.'/'.$vendor_id)}}">
                     <?php echo $vendor_result->vendor_shop; ?>
                </a>
                <br>
                <?php } ?>





                <?php
                }
                }


                ?>



            </td>



            <td><?php echo $affite_user ?></td>
            <td> @money($order->order_total)
                </td>

            <td>
                <?php if($order->order_status=='pending_payment'){
                    ?>

                <span   style="background-color:yellow">{{ $order->order_status }}</span>
                <?php  } elseif ($order->order_status=='new') { ?>
                    <span   class="btn btn-info">{{ $order->order_status }}</span>

                <?php  } elseif ($order->order_status=='processing') { ?>
                    <span   class="btn btn-info">{{ $order->order_status }}</span>

                <?php  } elseif ($order->order_status=='on_courier') { ?>

                    <span   class="btn btn-danger">{{ $order->order_status }}</span>
                <?php  } elseif ($order->order_status=='delivered') { ?>
                    <span   class="btn btn-success">{{ $order->order_status }}</span>

                <?php  } elseif ($order->order_status=='refund') { ?>

                    <span   class="btn btn-danger">{{ $order->order_status }}</span>
                <?php  } elseif ($order->order_status=='cancled') { ?>
                    <span   class="btn btn-danger">{{ $order->order_status }}</span>
                <?php } else {  ?>

                    <span   class="btn btn-success">{{ $order->order_status }}</span>
                <?php } ?>


            </td>
            <td>{{date('d-F-Y H:i:s a',strtotime($order->created_time))}}</td>

            <td>
                <a title="edit" href="{{ url('admin/order') }}/{{ $order->order_id }}">
                    <span class="glyphicon glyphicon-edit btn btn-success"></span>
                </a>

                <a title="edit" href="{{ url('admin/order/invoice-print') }}/{{ $order->order_id }}">
                    <span class="glyphicon glyphicon-print btn btn-info"></span>
                </a>


                {{--<a title="delete" href="{{ url('admin/product/delete') }}/{{ $order->product_id }}" onclick="return confirm('Are you want to delete this Product')">--}}
                    {{--<span class="glyphicon glyphicon-trash btn btn-danger"></span>--}}
                {{--</a>--}}
            </td>
        </tr>

    @endforeach

    <tr>
        <td colspan="13" align="center">
            {!! $orders->links() !!}
        </td>
    </tr>
@endif


