<?php

class Sale extends Db_object {
   
protected static $db_table = "sales";
protected static $db_table_fields = array('id','product_id', 'quantity','total_price','user_id');

public $id;
public $product_id;
public $quantity;
public $total_price;
public $user_id;




//ob_start();
//require_once("init.php");
    


} // EndClassComment

?>