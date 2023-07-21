<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>

<?php
$_SESSION["favcolor"]="green";
$_SESSION["pet"]="dog";
echo "session varibables are set";


session_unset();

session_destroy();

?>
    
</body>
</html>