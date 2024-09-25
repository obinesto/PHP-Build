<?php


$dbhost = "localhost";
$dbuser = "backendclass";
$dbpass = "marchbackend";
$dbname = "backend_class";
$mysql = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$serverMethod = $_SERVER["REQUEST_METHOD"];

session_start();
if($serverMethod !== "POST") {
    $_SESSION["error"] = "Only Post is Allowed ". $serverMethod . " is Not allowed" ;
    header("Location: ./login");
    exit();
  
}


if(isset($_POST["email"])){
    $email = $_POST["email"];

    if(empty($email) ){
        $_SESSION["error"] = " Email can not be empty" ;
        header("Location: ./login");
        exit();
    }
}else {
        $_SESSION["error"] = " Email field is required" ;
        header("Location: ./login");
        exit();
}

if(isset($_POST["password"])){
    $password = $_POST["password"];

    if(empty($password) ){
        $_SESSION["error"] = " password can not be empty" ;
        header("Location: ./login");
        exit();
    }
}else {
        $_SESSION["error"] = " password field is required" ;
        header("Location: ./login");
        exit();
}

$email = $_POST["email"];
$password = $_POST["password"];

if(!empty($email) || !empty($password)){
   $result = loginUser( $email, $password );
   if($result){
    $_SESSION["success"] = "Login Successful";
    $_SESSION['user'] = "User";
    header("Location: /");
    exit();
   }else{
    $_SESSION["error"] = "Email  or Password Is Incorrect";
    header("Location: /login");
    exit();
   }


}


function loginUser($username, $password){
    $quries = "select * from users where email = '$username' and password = '$password'";
$mySgl = $GLOBALS["mysql"];

 $result =  $mySgl->query($quries);

 if($result->num_rows > 0){
    return true;
 }else {
    return false;
 }

}