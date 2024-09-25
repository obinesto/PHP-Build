<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php

     session_start();

     if(isset($_SESSION["user"])){
        header( 'Location: /');
    }
     if(isset($_SESSION['error'])){
        echo "<div style='background-color: red; color: white; width: fit-content'> " .$_SESSION['error']. " </div>";
        session_destroy();
    }
    
    ?>
    <form action="/login/login.php" method="post">
        <input type="text" name="email" placeholder="email">
        <br><br>
        <input type="text" name="password" placeholder="password">
        <br><br>
        <input type="submit" value="submit">
    </form>


    <p>Don't have an account? <a href="signup">signup</a></p>
    
</body>
</html>