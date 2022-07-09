<?php

class User extends Db_object {
   
protected static $db_table = "users";
protected static $db_table_fields = array('id', 'username', 'email', 'password', 'first_name', 'last_name');

public $id;
public $username;
public $email;
public $password;
public $first_name;
public $last_name; 



public static function verify_user($username, $password) {

global $database;
    
$username = $database->escape_string($username);
$password = $database->escape_string($password);
     
$sql  = "SELECT * FROM " . self::$db_table . " WHERE ";
$sql .= "username = '{$username}' ";
$sql .= "AND password = '{$password}' ";
$sql .= "LIMIT 1";
    
$the_resault_array = self::find_by_query($sql);

return !empty($the_resault_array) ? array_shift($the_resault_array) : false;    

}  



public static function username_exist($username) {

global $database;
    
$sql = "SELECT username FROM users WHERE username = '$username'";
$result_set = $database->query($sql);

$num_rows = mysqli_num_rows($result_set);
        
return $num_rows;

}



public static function email_exist($email) {
    
global $database;    
    
$sql = "SELECT email FROM users WHERE email = '$email'";
$result_set = $database->query($sql);
    
$num_rows = mysqli_num_rows($result_set);
    
return $num_rows;

    
}



} // EndClassUser

?>