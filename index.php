<?php ob_start(); ?>

<?php include_once("includes/header.php"); ?>

<!-- Taked $url from Navigation -->
<?php  $_SESSION['last_url'] = $url; ?>

<!-- PAGE HEADER -->
<div class="page_header">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="bcrumbs">
<li><a href="#">Home</a></li>
</ul>
<br>
<h2>Product Categories</h2>
</div>
</div>
</div>
</div>

<?php include_once("includes/product_categories.php"); ?>

<?php include_once("includes/footer.php"); ?>