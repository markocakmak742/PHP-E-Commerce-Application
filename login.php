<?php ob_start(); ?>

<?php require_once("includes/header.php"); ?>
<?php require_once("2)Validation/login_validation.php"); ?>

<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">

<div class="row">
<div class="col-md-12  ">
<ul class="bcrumbs">
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Login</a></li>
</ul>
<br>
</div>
</div>

</div>
</div>
<!-- // PAGE HEADER -->


<!-- Page Content -->
<div style="padding-bottom:400px; margin-top:20px; maragin:left:0px; border:0px solid black;" class="container" class="container">

<section id="login">
<div class="container">
<div class="row">
<div style="margin:0px;" class="col-xs-12 col-xs-offset-3">
<div class="form-wrap">

<h1>Login</h1>

<form role="form" action="login.php" method="post" id="login-form" autocomplete="off">

<div style="margin-top:20px;" class="form-group-lg">
<label for="username" class="sr-only">username</label>
<input value="mcakmak" type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo isset($username) ? $username : '' ?>" autocomplete="on" >
<p style="color:red;" ><?php echo isset($error['username']) ? $error['username'] : '' ?></p>
</div>

<div style="margin-top:20px;" class="form-group-lg">
<label for="password" class="sr-only">Password</label>
<input value="123" type="password" name="password" id="key" class="form-control" placeholder="Password">
<p style="color:red;" ><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
</div>

<input style="margin-top:20px;" type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Login">
<br>
<p style="color:#ab0011; font-size:18px;" class="text-center" ><?php echo $message ?></p>

</form>
                 
</div>
</div> <!-- /.col-xs-12 -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</section>

<hr>

</div>

<?php require_once("includes/footer.php"); ?>