

<?php
if ($products) {
$i = 0;
    $html='';
foreach ($products as $product) {
$product_link = 'product/' . $product->product_name;
// product price
$product_price = $product->product_price;
$product_title = $product->product_title;
$product_discount = $product->discount_price;
$sku = $product->sku;
if ($product_discount >0) {
$sell_price = $product_discount;
} else {
$sell_price = $product_price;
}
//$image = get_product_thumb($product->product_id);

if ($i <= 10) {
    ?>
<li class="search-item">
    <a
        href="{{ url('/') }}/{{$product->product_name}}">
        <div class="image">
            <img
                src="{{ url('/public/uploads') }}/{{ $product->folder }}/small/{{ $product->feasured_image }}">
        </div>
        <div class="name" >{{$product->product_title}}</div>
        </div>
        <div class="price"> @money($sell_price)

         <span style="color:red"><del><?php  if ($product_discount >0) { ?>
            @money($product->product_price)
            <?php } ?>
             </del>
         </span>
<br/>
            <span>product code :<?=$sku?></span>
        </div>
    </a>
</li>


<?php
}

$i++;
}
if($i >= 10){
$total_product = DB::table('product')->where('sku','LIKE','%'.$search_query.'%')
    ->orWhere('product_title','LIKE','%'.$search_query.'%')->count();
$more_product=$total_product-$i;
 ?>

<li class="search-item remainder-count"><a
        href="{{ url('search') }}?search={{$search_query}}">{{$more_product}} more
        results</a></li>
<?php } ?>

<?php
}

?>
