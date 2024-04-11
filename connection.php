<?php
$servername = "sql304.infinityfree.com";
$username = "if0_36344728";
$password = "67kcEYMKZ6JVtS";
$db_name = "if0_36344728_db";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "";

?>
