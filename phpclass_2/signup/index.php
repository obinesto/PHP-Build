<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
</head>
<body>

<form action="/signup/signup.php" method="post">
    <input type="text" name="email" placeholder="email" value="">
    <?php
     session_start();
     if (isset($_SESSION["error"])) {
       echo  "<div>". $_SESSION["error"] ."</div>";
     }
 
     if (isset($_SESSION["success"])) {
         echo  "<div>". $_SESSION["success"] ."</div>";
       }
     session_unset();
    ?>
    <input type="text" name="password" placeholder="enter password" value="">
    <input type="text" name="name" placeholder="enter name" value="">
    <input type="submit" value="submit">
</form>

<p>Have an account? <a href="login/index.php"> login</a></p>
    
</body>
</html>
