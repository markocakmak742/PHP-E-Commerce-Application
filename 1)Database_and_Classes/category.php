<?php

class Category extends Db_object {


protected static $db_table = "category";
protected static $db_table_fields = array('id','category_name', 'category_image');

public $id;
public $category_name;
public $category_image;
    
public $upload_directory = "images/shop/Category";
public $image_placeholder = "images/shop/Category/noimage.png";



public function picture_path() {

return empty($this->category_image) ? $this->image_placeholder : $this->upload_directory ."/".$this->category_image;

}


}

?>