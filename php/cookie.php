<?php 
    
    $cookiename="user";$cookievalue="monish";
    setcookie($cookiename,$cookievalue,time()+(86400*1),"/");
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <?php  
    
     if(!isset($_COOKIE[$cookiename])){
        echo "cookie name: ".$cookiename." is not set";
     }else{
        echo "cookie name: ".$cookiename." is set <br>";
        echo "cookie value: ".$cookievalue." is set<br>";
     }
     if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
      } else {
        echo "Cookies are disabled.";
      }
    
    
    
    ?>


</body>
</html>