<?php $related_products = Product::related_products($_SESSION['selected_category']); ?>



<div class="shop-products margin-top-60 padding-bottom-50">
<h3 class="heading-1"><span>Related Products</span></h3>
    
<div class="row">
    
<?php foreach($related_products as $r_product) : ?>      
    
<div class="col-md-4 col-sm-4 text-center margin-bottom-30">
<div class="product">
<div class="product-thumb">

<img src="<?php echo'images/shop/Thumbnails/' . $r_product->thumbnail; ?>" class="img-responsive" alt=""/>

<a href="product.php?id=<?php echo $r_product->id ?>" class="add-cart">View Product</a>
</div>
<div class="product-title"><a href="./shop-single.html"><?php echo $r_product->product_name ?></a></div>
<div class="product-price"><span><?php echo "$" . $r_product->product_price ?></span></div>
</div>
</div>

    
 <?php endforeach; ?>    
    
</div>
</div>



  
   