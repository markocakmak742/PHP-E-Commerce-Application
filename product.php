<?php ob_start(); ?>

<?php include_once("includes/header.php"); ?>

<!-- Taked $url from Navigation -->
<?php  $_SESSION['last_url'] = $url; ?>

<?php 

$short_description = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. ";

?>

<?php

//Find Selected Product
if(isset($_GET['id'])) {

$product  = Product::find_by_id($_GET['id']);

$_SESSION['product_id']        = $product->id;
$_SESSION['category_id']       = $product->category_id;
$_SESSION['product_brand']     = $product->brand;
$_SESSION['product_name']      = $product->product_name;
$_SESSION['product_price']     = $product->product_price;
$_SESSION['product_image']     = $product->thumbnail;

$category = Category::find_by_id($product->category_id);
$_SESSION['category_name'] = $category->category_name;

$product_photos  = Photo::photos_in_product($product->id);

} else {

header("Location:category.php");      

}

?>




<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">
<div class="row">
    
<div class="col-md-12  ">
<ul class="bcrumbs">
<li><a href="index.php">Home</a></li>
<li><a href="category.php?category=<?php echo $_SESSION['selected_category']; ?>"><?php echo $_SESSION['category_name'] ?></a></li>
<li><a href="" ><?php echo $product->product_name; ?></a></li>
</ul>
<br>
</div>
    
</div>
</div>
</div>
<!-- // PAGE HEADER -->





<!-- SHOP SINGLE -->
<div class="container padding-bottom-80">
<div class="row">
<div class="col-md-9">
<div class="single-product">
    
<div style="border:0px solid black;" class="row">
    
<!-- Product Images -->
<div class="col-md-7 col-sm-6 margin-bottom-50">
<div class="product-slider-wrap">

<div  class="product-slider">

    <?php foreach($product_photos as $photo) : ?>

    <div class="item"><img src="images/shop/Single/<?php echo $_SESSION['category_id'] . ")" . $_SESSION['category_name'] . "/" . $photo->photo_name; ?>" class="img-responsive" alt=""/></div>

    <?php endforeach; ?>    

</div>

<a href="#" class="prev3"><i class="fa fa-angle-left"></i></a>
<a href="#" class="next3"><i class="fa fa-angle-right"></i></a>

</div>
</div>
<!-- / -->



<!-- Product Information -->
<div class="col-md-5 col-sm-6">
    <div class="product-title"><h3><?php echo $product->brand; ?></h3></div>
    <div class="product-title"><h4><?php echo $product->product_name; ?></h4></div>
    <div class="product-price"><span style="margin:0px; padding:0px;" ><?php echo $product->product_price . "€"; ?></span></div>
    <hr style="padding-bottom:0px; margin-bottom:8px;" >

    <p style="font-size:13px; margin-bottom:17px;" ><?php echo $short_description //$product->product_short_description; ?></p>

    <?php if($session->is_signed_in()) { ?>

    <form id='myform' name="" method='POST' action='product.php?id=<?php echo $product->id; ?>'>

    <input onclick="decrease_value()" type='button' value='-' class='qtyminus' />
    <input type='text' id="quantity" name='product_quantity' value='1' class='qty' />
    <input onclick="increase_value()" type='button' id="increase" value='+' class='qtyplus' />

    <div class="padding-vertical-10"></div>    

    <input name="addtocart" onmouseover="this.style.backgroundColor = '#85ba41'" onmouseout="this.style.backgroundColor = 'white'"  type='submit' class="add-cart2" value="Add to cart" style="background-color:white;" />

    <div class="padding-vertical-15"></div>

    </form>

    <?php } else { ?>

    <a href="login.php" class="btn btn-primary btn-lg" style="background-color: blanchedalmond; color:black; font-size:15; margin-top:40px;" >You must be logged in to buy this product!</a>
    <br>
    <br>

<?php } ?>

</div>
<!-- / -->



</div>

<?php include_once("includes/product_description.php"); ?>    
    
</div>

<?php include_once("includes/related_products.php"); ?>
    
</div>



<aside class="col-md-3">

<?php include_once("includes/ecart.php"); ?>
<?php include_once("includes/popular_products.php"); ?>
 
</aside>

</div>
</div>



<?php include_once("includes/footer.php"); ?>

<script src="js/jquery-ui.js"></script>
<script src="js/pricechange.js" ></script>
