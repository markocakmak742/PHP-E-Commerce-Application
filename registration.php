<?php ob_start(); ?>

<?php require_once("includes/header.php"); ?>
<?php require_once("2)Validation/register_validation.php"); ?>

<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">

<div class="row">
<div class="col-md-12  ">
<ul class="bcrumbs">
<li><a href="index.php">Home</a></li>
<li><a href="registration.php">Registration</a></li>
</ul>
<br>
</div>
</div>

</div>
</div>
<!-- // PAGE HEADER -->


<!-- Page Content -->
<div style="padding-bottom:400px; margin-top:20px; maragin:left:0px; border:0px solid black;" class="container">
    
<section id="login">
<div class="container">
<div class="row">
<div style="margin:0px;" class="col-xs-12 col-xs-offset-3">
<div class="form-wrap">

<h1>Register</h1>

<form style="margin-top:0px;" role="form" action="registration.php" method="post" id="login-form" autocomplete="off">

<div style="margin-top:20px;" class="form-group-lg">
<label for="first_name" class="sr-only">firstname</label>
<input type="text" name="firstname" id="firstname" class="form-control form-control-lg" placeholder="Firstname"  value="<?php echo isset($firstname) ? $firstname : '' ?>" autocomplete="on" required />
<p style="color:red;" ><?php echo isset($error['firstname']) ? $error['firstname'] : '' ?></p>
</div>

<div style="margin-top:20px;" class="form-group-lg">
<label for="last_name" class="sr-only">lastname</label>
<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" value="<?php echo isset($lastname) ? $lastname : '' ?>" autocomplete="on" required />
<p style="color:red;" ><?php echo isset($error['lastname']) ? $error['lastname'] : '' ?></p>
</div>

<div style="margin-top:20px;" class="form-group-lg">
<label for="username" class="sr-only">username</label>
<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?php echo isset($username) ? $username : '' ?>" autocomplete="on" required />
<p style="color:red;" ><?php echo isset($error['username']) ? $error['username'] : '' ?></p>
</div>

<div style="margin-top:20px;" class="form-group-lg">
<label for="email" class="sr-only">Email</label>
<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo isset($email) ? $email : '' ?>" autocomplete="on" required />
<p style="color:red;" ><?php echo isset($error['email']) ? $error['email'] : '' ?></p>
</div>

<div style="margin-top:20px;" class="form-group-lg">
<label for="password" class="sr-only">Password</label>
<input type="password" name="password" id="key" class="form-control" placeholder="Password" required />
<p style="color:red;" ><?php echo isset($error['password']) ? $error['password'] : '' ?></p>
</div>

<input style="margin-top:20px;" type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
<br>
<p style="color:green; font-size:18px;" class="text-center" ><?php echo $message ?></p>

</form>
                 
</div>
</div> <!-- /.col-xs-12 -->
</div> <!-- /.row -->
</div> <!-- /.container -->
</section>

<hr>

</div>

<?php require_once("includes/footer.php"); ?>