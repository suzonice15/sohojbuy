<?php
 $home_cat_section = explode(",", get_option('home_cat_section'));
Arr::forget($home_cat_section,'0');


$categories=DB::table('category')->select('category_id','category_title','category_name')->where('parent_id',0)->get();
if($home_cat_section){
foreach ($home_cat_section as  $category) {
  //  $category_id=$category->category_id;
$category_info = get_category_info($category);


$products= DB::table('product')->select('product.product_id','product_title','product_name','discount_price','product_price','folder','feasured_image','sku')->join('product_category_relation','product.product_id','=','product_category_relation.product_id')
       ->where('product_category_relation.category_id',$category)->where('status','=',1)->orderBy('modified_time','desc')->paginate(10);
?>
<section class="section featured-product wow ">
    <h3 class="section-title">
        <a
class="category_title_section" href="<?php echo e(url('/')); ?>/category/<?php echo e($category_info->category_name); ?>"><?php echo e($category_info->category_title); ?></a>
    </h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">

        <?php


        if($products){
        foreach ($products as  $product){

        if ($product->discount_price) {
            $sell_price = $product->discount_price;
        } else {
            $sell_price = $product->product_price;
        }
        ?>
        <div class="item item-carousel" style="border: 1px solid #ddd;border-right:0px solid #ddd;padding: 5px 5px;margin-bottom: 7px;" >
            <div class="products" >


                <div class="product">
                    <div class="product-image" style="margin-right: -16px;">
                        <div class="image">
                            <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">
                                <img
                                    src="<?php echo e(url('/public/uploads')); ?>/<?php echo e($product->folder); ?>/thumb/<?php echo e($product->feasured_image); ?>"
                                    alt="">
                            </a>                        </div>

                    </div>
                    <div class="product-info text-left">
                        <div class="product-price">
                                <span class="price">


                                  <?php echo '৳' . $sell_price; ?>
                                </span>
                            <?php
                            if($product->discount_price){


                            ?>
                            <span class="price-before-discount"
                                  style="color:red">  <?php echo '৳' . $product->product_price; ?> </span>

                            <?php


                            }
                            ?>
                        </div>

                        <h3 style="margin-top: 2px;margin-bottom: -2px;"   class="name">
                            <a href="<?php echo e(url('/')); ?>/<?php echo e($product->product_name); ?>">

                                <?php echo e($product->product_title); ?>

                            </a>
                        </h3>
                    </div>





























                </div>


            </div>
        </div>
            <?php } } ?>


    </div>
</section>

<?php

}
}
?>
<?php /**PATH C:\SXampp\htdocs\suhojbuy.com\resources\views/website/home_page_ajax_category.blade.php ENDPATH**/ ?>