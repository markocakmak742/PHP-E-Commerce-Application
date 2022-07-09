<!-- // CATEGORIES -->
<div class="container " style="padding-bottom:200px;">
<div class="container">



<!-- //$categories - Variable from Navigation -->

<!-- 1. Row - 3 Categories -->
<div class="row">
<?php 

$category_count = 0;
$cat_slice = 0;

foreach(array_slice($categories, $cat_slice) as $category) : 
if($category_count < 3) {
                                                  
?>      

    <div class="col-md-4 col-sm-4 margin-bottom-30">
    <div class="product-cat">
    <a href="category.php?category=<?php echo $category->id ?>">
    <div class="overlay-alt"></div>
    <img src="<?php echo $category->picture_path(); ?>" class="img-responsive" alt=""/>
    <h2 style="top:15%; color:gray" ><?php echo $category->category_name ?><span>View Collection</span></h2>
    </a>
    </div>
    </div>    

<?php 

$category_count++;
$cat_slice++;
}
endforeach; 

?>    
</div>





    
    
    
    
<!-- 2. Row - 2 Categories -->    
<div class="row">

<?php 
$category_count = 0;

foreach(array_slice($categories, $cat_slice) as $category) :

if($category_count < 1) {

?>      

    <div class="col-md-8 col-sm-8">

    <div class="product-cat margin-bottom-30">
    <a href="category.php?category=<?php echo $category->id ?>">
    <div class="overlay-alt"></div>
    <img src="<?php echo $category->picture_path(); ?>" class="img-responsive" alt=""/>
    <h2 style="top:10%; color:#7c7c7c"><?php echo $category->category_name; ?><span>View Collection</span></h2>
    </a>
    </div>    

    </div> 

<?php 

$category_count++;
$cat_slice++;
}
endforeach; 
?>    

    
    
    

<?php 
$category_count = 0;

foreach(array_slice($categories, $cat_slice) as $category) :
if($category_count < 1) {

?>      

    <div class="col-md-4 col-sm-4">

    <div class="product-cat margin-bottom-30">
    <a href="category.php?category=<?php echo $category->id ?>">
    <div class="overlay-alt"></div>
    <img src="<?php echo $category->picture_path(); ?>" class="img-responsive" alt=""/>
    <h2 style="top:10%; color:#7c7c7c"><?php echo $category->category_name; ?><span>View Collection</span></h2>
    </a>
    </div>

    </div>

<?php 

$category_count++;
$cat_slice++;
}
endforeach; 

?> 

</div>





    
    
    
    
<!-- 3. Row - 2 Categories --> 
<div class="row">


<?php 

$category_count = 0;

foreach(array_slice($categories, $cat_slice) as $category) :
if($category_count < 1) {

?>      

    <div class="col-md-8 col-sm-8">

    <div class="product-cat margin-bottom-30">
    <a href="category.php?category=<?php echo $category->id ?>">
    <div class="overlay-alt"></div>
    <img src="<?php echo $category->picture_path(); ?>" class="img-responsive" alt=""/>
    <h2 style="top:16%; color:#7c7c7c"><?php echo $category->category_name; ?><span>View Collection</span></h2>
    </a>
    </div>    

    </div> 

<?php 

$category_count++;
$cat_slice++;
}
endforeach; 



$category_count = 0;

foreach(array_slice($categories, $cat_slice) as $category) :
if($category_count < 1) {

?>      

    <div class="col-md-4 col-sm-4">

    <div class="product-cat margin-bottom-30">
    <a href="category.php?category=<?php echo $category->id ?>">
    <div class="overlay-alt"></div>
    <img src="<?php echo $category->picture_path(); ?>" class="img-responsive" alt=""/>
    <h2 style="top:15%; color:#7c7c7c"><?php echo $category->category_name; ?><span>View Collection</span></h2>
    </a>
    </div>

    </div>

<?php 

$category_count++;
$cat_slice++;
}
endforeach; 

?>       

</div>


</div>
</div>
<!-- // CATEGORIES -->