

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
        href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">
        <div class="image">
            <img
                src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/small/<?php echo e($product->feasured_image); ?>">
        </div>
        <div class="name" ><?php echo e($product->product_title); ?></div>
        </div>
        <div class="price"> <?php echo '৳' . $sell_price; ?>

         <span style="color:red"><del><?php  if ($product_discount >0) { ?>
            <?php echo '৳' . $product->product_price; ?>
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
$total_product = DB::table('product')->where('status','=',1)->where(function ($query) use ($search_query){
        return $query->where('sku','LIKE','%'.$search_query.'%')
        ->orWhere('product_title','LIKE','%'.$search_query.'%');
    })->count();
$more_product=$total_product-$i;
 ?>

<li class="search-item remainder-count"><a
        href="<?php echo e(url('search')); ?>?search=<?php echo e($search_query); ?>"><?php echo e($more_product); ?> more
        results</a></li>
<?php } ?>

<?php
}

?>
<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/search_engine.blade.php ENDPATH**/ ?>