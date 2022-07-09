<?php ob_start(); ?>

<?php include_once("includes/header.php"); ?>


<!-- Taked $url from Navigation -->
<?php  $_SESSION['last_url'] = $url; ?>


<?php

//Price Filter Logic
$MinPreis;
$MaxPreis;

if(isset($_POST['min']) && isset($_POST['max']) ) {

$MinPreis = $_POST['min'];
$MaxPreis = $_POST['max'];

} else {

$MinPreis = 0;
$MaxPreis = 5000;

}
//


//Find Selected Category and Products in Category
if(isset($_GET['category'])) {

$category = Category::find_by_id($_GET['category']);
$_SESSION['selected_category'] = $category->id;
$_SESSION['category_name'] = $category->category_name;

$products = Product::products_in_category($_GET['category'],$MinPreis,$MaxPreis); 

} else {

header("Location: index.php");

}

?>





<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="bcrumbs">
<li><a href="index.php">Home</a></li>
<li><a href="category.php?category=<?php echo $category->id; ?>" ><?php echo $category->category_name; ?></a></li>
</ul>
<br>
<!-- <h2>Jakcets</h2> -->
</div>
</div>
</div>
</div>
<!-- // PAGE HEADER -->





<div class="container padding-bottom-100">
<div class="row"> 
<div class="col-md-9">

<!-- All Products In Selected Category -->
<div class="shop-products">
<div class="row">

<?php foreach($products as $product) : ?>


    <div class="col-md-4 col-sm-4 text-center margin-bottom-30">
    <div class="product">

    <div class="product-thumb">
    <img src="<?php echo $product->category_image_path(); ?>" class="img-responsive" alt=""/>    
    <a href="product.php?id=<?php echo $product->id; ?>" class="add-cart">View Product</a>
    </div>
    <div class="product-title"><p href="./shop-single.html"><a><?php echo $product->brand . "<br>" . $product->product_name; ?></a></p></div>

    <div class="product-price"><span><?php echo "$" . $product->product_price; ?></span></div>
    </div>
    </div>


<?php endforeach; ?>

</div>	
</div>
<!-- // -->

</div>

<?php include_once("includes/aside.php"); ?>    
    
</div>
</div>


<?php include_once("includes/footer.php"); ?>































<script src="js/jquery-ui.js"></script>

<script>
    
var max_vrednost = <?php Print($MaxPreis); ?>;    
var min_vrednost = <?php Print($MinPreis); ?>; 


//Price Slider
$("#sliderRange")
.slider({
range: true,
min: 0,
max: 5000,
step: 1,
values: [min_vrednost, max_vrednost],
slide: function(event, ui) {
var price1 = ui.values[0];
var price2 = ui.values[1];
$("#price1")
//.val("\u20ac" + price1);
.val("" + price1);
$("#price2")
//.val("\u20ac" + price2);
.val("" + price2);
}
});

$('#price1')
.bind('keyup', function() {
var from = $(this)
.val();
var to = $('#price2')
.val();
$('#sliderRange')
.slider('option', 'values', [from, to]);
});

$('#price2')
.bind('keyup', function() {
var from = $('#price1')
.val();
var to = $(this)
.val();
$('#sliderRange')
.slider('option', 'values', [from, to]);
});

</script>