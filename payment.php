<?php include_once("includes/header.php"); ?>
<?php require_once("2)Validation/payment_validation.php"); ?>

<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">

<div class="row">
<div class="col-md-12  ">
<ul class="bcrumbs">
<li><a href="index.php">Home</a></li>
<li><a href="checkout.php">Checkout</a></li>
<li><a href="payment.php">Payment</a></li>
</ul>
<br>
</div>
</div>

</div>
</div>
<!-- // PAGE HEADER -->

<?php 

if(isset($_POST['pay'])) {
    
foreach($_SESSION["cart_item"] as $item) :

$payment = new Sale();

$payment->product_id    = $item['product_id'];
$payment->quantity      = $item['product_quantity'];
$payment->total_price   = ($item['product_price'] * $item['product_quantity']);
$payment->user_id       = $_SESSION['user_id'];

$payment->save();
    
endforeach;

//echo "<script>window.location = 'payment_message.php';</script>";
  
}

?>

<div style="padding-bottom:150px;" class="container">
<div  class="row">
<div class="col-md-12 order-md-1">

<h4 class="mb-3">Payment</h4>    
    
<form action="payment.php" method="post" class="needs-validation" >

<div style="margin-top:20px;" class="row">

<div class="col-md-6 mb-3">
<label for="email">Name on Card <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="card_name" id="firstname" class="form-control form-control-lg" placeholder=""  value="" autocomplete="on"   />
<p style="color:red;" ><?php echo isset($error['card_name']) ? $error['card_name'] : '' ?></p>
</div>
</div>

<div class="col-md-6 mb-3">
<label for="email">Credit Card Number <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="lastname" id="firstname" class="form-control form-control-lg" placeholder=""  value="1234 5678 **** ****" autocomplete="on" required readonly />
</div>
</div>  

</div>
    
<div style="margin-top:20px;" class="row">

<div class="col-md-3 mb-3">
<label for="email">Expiriation<span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="firstname" id="firstname" class="form-control form-control-lg" placeholder=""  value="24/5/2022" autocomplete="on" required readonly />
</div>
</div>

<div class="col-md-3 mb-3">
<label for="email">CVV<span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="lastname" id="firstname" class="form-control form-control-lg" placeholder=""  value="123" autocomplete="on" required readonly />
</div>
</div>  

</div>



<!-- Cart Totals -->
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
<td><span class="amount"><?php echo "$".number_format($_SESSION['total_price'], 2); ?></span></td>
</tr>
</tbody>
</table>
</div>
</div>     


    
<button name="pay" class="btn btn-primary btn-lg btn-block" type="submit">Pay</button>
</form>

<br>    
    

    
</div>
</div>
</div>



<script src="js.js"></script>
<link rel="stylesheet" href="style.css">

<?php include_once("includes/footer.php"); ?>