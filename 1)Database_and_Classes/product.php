<?php

class Product extends Db_object {
   
protected static $db_table = "product";
protected static $db_table_fields = array('product_id', 'product_name', 'category_id', 'brand',  'product_price', 'product_short_description', 'product_big_description', 'thumbnail');

public $id;
public $product_name;
public $category_id;
public $brand;
public $product_price;
public $product_short_description;
public $product_big_description;
public $thumbnail;

    
    
    
    
public static function products_in_category($category,$min,$max) {

$min = preg_replace('/[^0-9.]+/', '', $min);
$max = preg_replace('/[^0-9.]+/', '', $max);
    
//return static::find_by_query("SELECT * FROM product WHERE category_id = '" . $category . "AND 'product_price' <" . {$min} . "AND 'product_price' >" . {$max}  . "'");  
return static::find_by_query("SELECT * FROM product WHERE category_id = {$category} AND product_price >= {$min} AND product_price <= {$max}"); 
    
}
    
    
public static function popular_products() {
    
return static::find_by_query("SELECT * FROM product ORDER BY RAND()  LIMIT 5 ");

}


public static function related_products($related_category) {
    
return static::find_by_query("SELECT * FROM product WHERE category_id = {$related_category} ORDER BY RAND() LIMIT 3 ");

}
    
public function category_image_path() {

$category_image_path = "images/shop/Thumbnails/" . $this->thumbnail;
return ($category_image_path);

}

} // EndClassProduct

?>