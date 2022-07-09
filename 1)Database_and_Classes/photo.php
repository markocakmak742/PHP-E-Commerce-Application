<?php

class Photo extends Db_object {
   
protected static $db_table = "photos";
protected static $db_table_fields = array('id', 'product_id', 'photo_name');

public $id;
public $product_id;
public $photo_name;


public static function photos_in_product($id) {

return static::find_by_query("SELECT * FROM photos WHERE product_id = {$id}"); 
    
}

} // EndClassPhoto

?>