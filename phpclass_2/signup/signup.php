<?php
$dbhost = "localhost";
$dbuser = "backendclass";
$dbpass = "marchbackend";
$dbname = "backend_class";
$mysql = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

session_start();
$serverMethod = $_SERVER["REQUEST_METHOD"];
 if ($serverMethod !== "POST"){
    $_SESSION["error"] = "Only post is Supported";
    header("Location: /");
    exit();
 }


 if(!isset($_POST["email"])){
    $_SESSION["error"] = "Email field is Required";
    header("Location: /");
   
 }

 $email = $_POST["email"];
 if(empty($email)){
     $_SESSION["error"] = "Email is Required";
     header("Location: /");
  return;
 }



if(!isset($_POST["password"])){
    $_SESSION["error"] = "Password is required";
    header("Location: /");
    // return;
}

$password = $_POST["password"];
if(empty($password)){
    $_SESSION["error"] = "Password is can not be Empty";
    header("Location: /");
 exit();
}
if(!isset($_POST["name"])){
    $_SESSION["error"] = "Name field Is required";
    header("Location: /");
    exit();
}

$name = $_POST["name"];
if(empty($name)){
    $_SESSION["error"] = "Name is can not be Empty";
    header("Location: /");
 exit();
}

if(empty($email) || empty($password)  || empty($name) ){
    $_SESSION["error"] = "All field are required";
    header("Location: /");
    exit();
}else {
  $result =  insertTable($email, $password, $name);
  if($result === true){
    $_SESSION["success"] = "User registered succesfully ";
    header("Location: /");
  }else if ($result === false){
    $_SESSION["error"] = "Some Error ";
    header("Location: /");
  }else{
    $_SESSION["success"] = "User is already registered";
    header("Location: /");
  }
}

  if ($mysql->connect_error) {
  echo "Eroor". $mysql->connect_errno ."<br>";
  }else{
   createTable();
  }

function createTable() {
    $mysql = $GLOBALS["mysql"];
    
$result =    $mysql->query("create table if not exists users (
    id int primary key auto_increment,
    email Varchar(50) not null unique,
    password Varchar(100) not null  ,
    name Varchar(50) null,
    role Varchar(50) default 'user'
)");

if($result){
    echo "Table Created Succesfully";
}else   {
    echo "Erorr Creating Table";
}

}


function insertTable($email , $password, $name) {
    $mysql = $GLOBALS["mysql"];
    $user = $mysql->query("select * from users where email = '$email'");
     if( $user->num_rows > 0) {
        return "User is already registered";
     }else {
        $queries = "insert into users ( email, password, name) values ( '$email',   '$password' ,'$name' )";
        $result = $mysql->query($queries);
        if($result){
            return true;
        }else{
           return false;
        }

     }

   
}