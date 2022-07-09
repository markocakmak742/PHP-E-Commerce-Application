<?php $categories = Category::find_all(); ?>  

<div id="navbar" class="navbar-collapse collapse">
<ul class="nav navbar-nav">

<?php $url = array_slice(explode('/', $url = $_SERVER['REQUEST_URI']), -1)[0]; ?>    
    
<li class="dropdown dropdown-v2" <?php if($url == "index.php") { echo "style='background-color:#ededed;'"; }  ?> >
<a href="index.php" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Home</a>
</li>

<?php foreach($categories as $category) :  ?>    

<li class="dropdown dropdown-v2" <?php if(isset($_GET['category']) && $category->id == $_GET['category']) { echo "style='background-color:#ededed;'"; } ?> >
<a href="category.php?category=<?php echo $category->id ?>" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false"><?php echo $category->category_name ?></a>
</li>

<?php endforeach; ?> 


</ul>
</div>

