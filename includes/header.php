<?php require_once("1)Database_and_Classes/init.php"); ?>  

<!doctype html>
<!--[if IE 7 ]>
<html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="zxx">
<head>

  
    
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>E-Shop</title>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Custom Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,700,700i,900" rel="stylesheet">

<!-- Icon CSS -->
<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Theme CSS -->
<link href="css/ts.css"           rel="stylesheet">
<link href="js/slick/slick.css"   rel="stylesheet">
<link href="js/lity/lity.min.css" rel="stylesheet">
<!-- Category -->
<link rel="stylesheet"            href="css/jquery-ui.css">
<link href="css/style.css"        rel="stylesheet">


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
    
<body>

<div class="wrapper">



<!-- HEADER / MENU -->   
<header class="header1 header-megamenu">

<div class="topbar">
<div class="container">
<div class="row">
    
<div class="col-md-8 col-sm-8 hidden-xs">
<div class="newsfeed">
<span><i>On sale:</i></span>
<div class="news-carousel">

<?php $popular_products = Product::popular_products();   ?>

<?php foreach($popular_products as $p_product) : ?> 
    
<div class="item"><a href="product.php?id=<?php echo $p_product->id; ?>"><?php echo $p_product->brand . " - " . $p_product->product_name; ?> </a></div>

<?php endforeach; ?>    
    
</div>
</div>
</div>
    
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="pull-right account-options">
    
  
<?php
  
if($session->is_signed_in()) {

echo "<a href=''>{$_SESSION['username']}</a>";

    
} else {

echo "<a href='registration.php'>Sign Up</a>";

}

?>    
    
<!-- <a href="#" >Sign Up</a> -->
    
    
<span>|</span>

<?php

if($session->is_signed_in()) {

echo "<a style='border:0px solid white; padding:0px;' href='logout.php'>Logout</a>";

    
} else {

echo "<a href='login.php' class='login'>Sign In</a>";

}

?>    
    
</div>
</div>

</div>
</div>
</div>
    
<div class="clearfix"></div>

<div class="navbar-header padding-vertical-10">
<div class="container">
<a href="index.php" class="navbar-brand"><img src="images/logo.jpg" class="img-responsive" alt=""/></a>
<div class="ad-banner pull-right hidden-xs">
<a href="index.php"><img src="images/ads/728x90.jpg" class="img-responsive" alt=""/></a>
</div>
</div>
</div>
    
<div class="clearfix"></div>

<div class="container">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span>Navigation</span>
<span class="fa fa-navicon"></span>
</button>

<div class="search-wrap2">
<form>
<input type="text" placeholder="Search by typing">
<div class="sw2-close"><span class="fa fa-close"></span></div>
</form>
</div>


<!-- Navigation -->
<?php include_once("navigation.php"); ?>

    
</div>
    
</header>
<!-- // HEADER / MENU -->
    
    
    


    
    
    
    

