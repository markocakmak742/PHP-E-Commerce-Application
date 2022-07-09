<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addtocart'])) {

$product_id       = $_SESSION['product_id'];
$product_brand    = $_SESSION['product_brand'];
$product_name     = $_SESSION['product_name'];
$product_price    = $_SESSION['product_price'];
$product_image    = $_SESSION['product_image'];

$product_quantity = $_POST['product_quantity'];


if(!empty($_POST["product_quantity"])) {
    
$itemArray = array("ID_".$product_id=>array('product_id'=>$product_id, 'product_name'=>$product_name, 'product_brand'=>$product_brand, 'product_price'=>$product_price, 'product_quantity'=>$product_quantity, 'product_image'=>$product_image));

if(!empty($_SESSION["cart_item"])) {

if(in_array("ID_".$_SESSION['product_id'],array_keys($_SESSION["cart_item"]))) {

foreach($_SESSION["cart_item"] as $k => $v) {

if("ID_".$_SESSION['product_id'] == $k) {

if(empty($_SESSION["cart_item"][$k]["product_quantity"])) {

$_SESSION["cart_item"][$k]["product_quantity"] = 0;

}

$_SESSION["cart_item"][$k]["product_quantity"] += $product_quantity;

}
}
} else {

$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);

}

} else {

$_SESSION["cart_item"] = $itemArray;

}

}
}



//unset($_SESSION["cart_item"]);

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





<!-- HTML -->
<?php if(empty($_SESSION["cart_item"])) { ?>

<div class="side-widget margin-bottom-60">
<h3 class="heading-1"><span>Shopping Cart</span></h3>
    
<div class="sidebar-cart padding-15">

<div class="cart-item">
<p class="item-title">No Items in Cart</p>
</div>

<hr>

<div class="cart-total">
<p>Subtotal: <span>$0</span></p>
</div>

</div>
</div>



<?php } else { ?>

<?php 

$total_quantity = 0;
$total_price = 0;
            
?>

<div class="side-widget margin-bottom-60">
<h3 class="heading-1"><span>Shopping Cart</span></h3>

<div class="sidebar-cart padding-20">
    
<?php foreach($_SESSION["cart_item"] as $item) : ?>     
    
<div class="cart-item">
<p class="item-title"><?php echo $item['product_name']; ?></p>
<span class="item-quantity"><a href="product.php?id=<?php echo $product->id; ?>&remove=<?php echo $item['product_id'] ?>" style="color:#aaaaaa;" href="" class="ci-close">X</a> <?php echo $item['product_quantity'] . " " . "x" . " " . "$" . $item['product_price'] ; ?></span>
<br>
</div>

<hr>
    
<?php

$total_quantity += $item["product_quantity"];
$total_price += ($item["product_price"]*$item["product_quantity"]);
    
?>    
    
<?php endforeach; ?>


<div class="cart-total">
<p>Subtotal: <span><?php echo "$ ".number_format($total_price, 2); ?></span></p>
</div>

<a href="shop_cart.php" class="btn btn-default btn-block">View Cart</a>
<a href="shop_cart.php" class="btn btn-primary btn-block">Checkout</a>
</div>
</div>



<?php } ?>