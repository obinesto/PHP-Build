
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: /login");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>Welcome Home</h1>
    
</body>
</html>