<?php
session_start();

extract($_SESSION['info']);
    //echo "<pre>";
   // print_r($_SESSION['info']); 
    //echo "</pre>";
    
    $arr = implode(", ",$inlineCheckbox);

    $hash = password_hash($password, PASSWORD_DEFAULT);
    include("connection.php");
    $sql = mysqli_query($conn, "INSERT INTO signup(name,username,email,password,image,location,opt) VALUES ('$name','$user','$email','$hash','$img','$location','$arr')");
    if($sql){
        // unset($_SESSION['info']);

        echo "Data has been saved successfully!";
        header("Location: final.php");
        echo '<a href="index.php">Go Back</a>';
    }else{
        echo mysqli_error($conn);
    }
?>
