<?php
// include db connect class
require_once __DIR__ . '/db_connect.php';
session_start();
// connecting to db
$db = new DB_CONNECT();
$users=$_POST['user'];
$pass=$_POST['pwd'];
// get all products from products table
$result = mysql_query("SELECT *FROM admiins where users='".$users."' and password='".$pass."'") or die(mysql_error());

// check for empty result
if (mysql_num_rows($result) > 0) 
{
    //$_SESSION["user_id"] = $row['users'];
    $_SESSION['username'] = $users;
    $_SESSION['valid'] = true;
    header("Location:  http://192.168.88.102/collegework/sitepages/data/admin/loggedinoption.php");
    die();

} else
{
header("Location: http://192.168.88.102/collegework/sitepages/data/failsub.html");
     die();

}
?>

