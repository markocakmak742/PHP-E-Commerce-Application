<aside class="col-md-3">

<?php include_once("ecart.php"); ?>

<form action="category.php?category=<?php echo $_SESSION['selected_category']; ?>" method="post" >

<div class="side-widget margin-bottom-60">
<h3 class="heading-1"><span>Filter by price</span></h3>
<div class="s_range">
<div id="sliderRange"></div>
    
<div class="range_v">
<span>Price</span>
<input type="text" id="price1" name="min" title="" value="<?php echo $MinPreis ?>" class="input" /> 
<div style="margin-left:100px;" class="range_sep"></div>
<input style="margin-left:30px;" type="text" id="price2" name="max" title="" value="<?php echo $MaxPreis ?>" class="input" /> 
</div>

</div>
<br>
<br>
<button style="border:none;" class="filter-btn" type="submit">Search</button>
<!-- <a class="filter-btn" href="#">Filter</a> -->
</div>

</form>

<?php include_once("includes/popular_products.php"); ?>
    
</aside>