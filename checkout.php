<?php include_once("includes/header.php"); ?>

<?php require_once("2)Validation/checkout_validation.php"); ?>



<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">

<div class="row">
<div class="col-md-12  ">
<ul class="bcrumbs">
<li><a href="index.php">Home</a></li>
<li><a href="checkout.php">Checkout</a></li>
</ul>
<br>
</div>
</div>

</div>
</div>
<!-- // PAGE HEADER -->


<div style="padding-bottom:150px;" class="container">
<div  class="row">
<div class="col-md-12 order-md-1">

<h4 class="mb-3">Billing Information</h4>

<form action="checkout.php" method="post" class="needs-validation" >

<div style="margin-top:20px;" class="row">

<div class="col-md-6 mb-3">
<label for="firstname">Firstname <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="firstname" class="form-control form-control-lg" placeholder="Firstname"  value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname'];  } ?>" autocomplete="on" required />
<p style="color:red;" ><?php echo isset($error['firstname']) ? $error['firstname'] : '' ?></p>
</div>
</div>

<div class="col-md-6 mb-3">
<label for="lastname">Lastname <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="lastname" class="form-control form-control-lg" placeholder="Lastname"  value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname'];  } ?>" autocomplete="on" required  />
<p style="color:red;" ><?php echo isset($error['lastname']) ? $error['lastname'] : '' ?></p>
</div>
</div>  

</div>

<div style="margin-top:20px;" class="mb-3">
<label for="email">Email <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="email" class="form-control form-control-lg" placeholder="Email"  value="<?php if(isset($_POST['email'])) { echo $_POST['email'];  } ?>" autocomplete="on" required  />
<p style="color:red;" ><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
</div>
</div> 

<div style="margin-top:20px;" class="row">

<div class="col-md-10 mb-3">
<label for="email">Adress <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="adress" class="form-control form-control-lg" placeholder="Street"  value="<?php if(isset($_POST['adress'])) { echo $_POST['adress'];  } ?>" autocomplete="on" required  />
<p style="color:red;" ><?php echo isset($error['adress']) ? $error['adress'] : '' ?></p>
</div>
</div>

<div class="col-md-2 mb-3">
<label for="email">Number <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="number" class="form-control form-control-lg" placeholder="Number"  value="<?php if(isset($_POST['number'])) { echo $_POST['number'];  } ?>" autocomplete="on" required  />
<p style="color:red;" ><?php echo isset($error['number']) ? $error['number'] : '' ?></p>
</div>
</div>

</div>

<div style="margin-top:20px;" class="row">

<div class="col-md-5 mb-3">
<label for="email">Country <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="country" class="form-control form-control-lg" placeholder="Country"  value="<?php if(isset($_POST['country'])) { echo $_POST['country'];  } ?>" autocomplete="on" required  />
<p style="color:red;" ><?php echo isset($error['country']) ? $error['country'] : '' ?></p>
</div>
</div>

<div class="col-md-4 mb-3">
<label for="email">State <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="state" class="form-control form-control-lg" placeholder="State"  value="<?php if(isset($_POST['state'])) { echo $_POST['state'];  } ?>" autocomplete="on" required  />
<p style="color:red;" ><?php echo isset($error['state']) ? $error['state'] : '' ?></p>
</div>
</div>

<div class="col-md-3 mb-3">
<label for="email">Zip <span class="text-muted"></span></label>
<div class="form-group-lg">
<input type="text" name="zip" class="form-control form-control-lg" placeholder="Zip"  value="<?php if(isset($_POST['country'])) { echo $_POST['zip'];  } ?>" autocomplete="on" required  />
<p style="color:red;" ><?php echo isset($error['zip']) ? $error['zip'] : '' ?></p>
</div>
</div>

</div>


<hr class="mb-4">


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



<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Payment</button>
</form>
    
</div>
</div>
</div>



<script src="3)Checkout_and_Payment/js.js"></script>
<!-- <link rel="stylesheet" href="3)Checkout_and_Payment/style.css"> -->

<?php include_once("includes/footer.php"); ?>