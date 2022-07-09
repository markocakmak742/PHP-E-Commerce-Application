<?php ob_start(); ?>

<?php include_once("includes/header.php"); ?>
<?php require_once("1)Database_and_Classes/init.php"); ?>


<?php 

if(isset($_GET['remove'])) {
    
if(!empty($_SESSION["cart_item"])) {
    
foreach($_SESSION["cart_item"] as $subKey => $subArray) {

if($subArray['product_id'] == $_GET['remove']) {
unset($_SESSION["cart_item"][$subKey]);

if(empty($_SESSION["cart_item"])) {

unset($_SESSION["cart_item"]);

}
}    
   
}
}   
}

?>



<body>

<div class="wrapper">

<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="bcrumbs">
<li><a href="#">Home</a></li>
<li>Shopping Cart</li>
</ul>
<br>
<h2>Shopping Cart</h2>
</div>
</div>
</div>
</div>
<!-- // PAGE HEADER -->



<!-- SHOP CART -->
<div class="container padding-bottom-60">
<div class="shop-cart">
<div class="row">
<div class="col-md-12">

<?php if(!empty($_SESSION["cart_item"])) { ?>     

<?php 

$total_quantity = 0;
$total_price = 0;

?>    
    
<table class="cart-table table table-bordered">

<thead>
<tr>
<th>Item</th>
<th>Description</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<th></th>
</tr>
</thead>
    
<tbody>
    
<?php foreach($_SESSION["cart_item"] as $item) : ?>     

<tr>
<td><img src="<?php echo'images/shop/Thumbnails/' . $item['product_image']; ?>" alt="" height="100" width="100"></td>
<td><a href="#"><?php echo $item['product_brand'] . "<br>" . $item['product_name']; ?></a></td>
<td><span class="amount"><?php echo "$" . $item['product_price']; ?></span></td>
<td>
<div class="quantity">
<form>

<input readonly id="quantity" name="quantity" value="<?php echo $item['product_quantity']; ?>" class="qty" type="text">

</form>
</div>
</td>
<td>
<div class="total"><?php echo "$" . ($item['product_price'] * $item['product_quantity']); ?></div>
</td>
<td><a href="shop_cart.php?remove=<?php echo $item['product_id'] ?>" class="remove"><i class="fa fa-times"></i></a></td>
</tr>

<?php

$total_quantity += $item["product_quantity"];
$total_price    += ($item["product_price"]*$item["product_quantity"]);
$_SESSION['total_price'] = $total_price;
    
?>      
    
<?php endforeach; ?>

</tbody>

</table>

<a href="checkout.php" class="btn btn-primary">Proceed to checkout</a>    
    
<?php } else {

} ?>
    


<div class="cart_totals margin-top-60">
<div class="col-md-6 no-padding">
<h3 class="heading-1"><span>Cart Totals</span></h3>
<table class="table table-bordered">
<tbody>
<tr>
<th>Total Orders</th>
<td><span class="amount"><?php echo count($_SESSION["cart_item"]); ?></span></td>
</tr>
<tr>
<th>Shipping and Handling</th>
<td>
Free Shipping				
</td>
</tr>
<tr>
<th>Total Price</th>
<td><span class="amount"><?php echo "$".number_format($total_price, 2); ?></span></td>
</tr>
</tbody>
</table>
</div>
</div>

</div>
</div>
</div>
</div>
<!-- // SHOP CART -->


    
    
    
<?php include_once("includes/footer.php"); ?>
    
    
    
    
    
    
    
    
    

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/slick/slick.min.js"></script>
<script src="js/socialShare.min.js"></script>
<script src="js/jquery.simpleWeather.min.js"></script>
<script src="js/lity/lity.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/main.js"></script>

<!-- Mailchimp Js -->
<script src="js/mc/jquery.ketchup.all.min.js"></script>
<script src="js/mc/main.js"></script>

<script>
$(function() {
$('.qtyplus').click(function(e) {
e.preventDefault();
fieldName = $(this).attr('field');
var currentVal = parseInt($('input[name=' + fieldName + ']').val());
if (!isNaN(currentVal)) {
$('input[name=' + fieldName + ']').val(currentVal + 1);
} else {
$('input[name=' + fieldName + ']').val(1);
}
});
$(".qtyminus").click(function(e) {
e.preventDefault();
fieldName = $(this).attr('field');
var currentVal = parseInt($('input[name=' + fieldName + ']').val());
if (!isNaN(currentVal) && currentVal > 1) {
$('input[name=' + fieldName + ']').val(currentVal - 1);
} else {
$('input[name=' + fieldName + ']').val(1);
}
});
});
</script>
    
    
<script>

function increase_value(){

document.getElementById("quantity").value++;

}
    
function decrease_value(){

if(document.getElementById("quantity").value > 1) {
    
document.getElementById("quantity").value--;

}
}

</script>



