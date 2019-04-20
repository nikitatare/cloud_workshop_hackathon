<?php
session_start();
error_reporting(0);
$username = "root";
$password = "";
$database = "food_shop";
$con = mysqli_connect("localhost",$username,$password,$database);
if(!$con){
    die("Connection failed: ".mysqli_connect_error());
}
//$_SESSION["genre"]="4";
// display_errors = on;
if(isset($_POST['username'])){
    $uname = $_POST['username'];
        $sql = "SELECT * FROM users WHERE username='".$uname."' limit 1";
    
    $result = mysqli_query($con,$sql);
    if(!empty($result)){
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        $_SESSION["user_id"]=$row['userid'];
            
        header("Location: first.php");
        exit();
    }
    else {
        session_destroy();
        echo "Incorrect Login Details";
        exit();
    }
    

}

<html>
    Hello
</html>