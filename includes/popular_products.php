<?php 
    
$popular_products = Product::popular_products();    
    
?>
    
<div class="side-widget margin-bottom-60">
    
<h3 class="heading-1"><span>Popular Products</span></h3>
<ul class="popular-items">
   
<?php foreach($popular_products as $p_product) : ?>    

<li>
<img src="<?php echo'images/shop/Thumbnails/' . $p_product->thumbnail; ?>" alt=""/>
                                                                                
<p><a href="product.php?id=<?php echo $p_product->id ?>"><?php echo $p_product->product_name ?></a></p>
<span><?php echo $p_product->product_price ?></span>
</li>

<?php endforeach; ?>
    
</ul>
</div>