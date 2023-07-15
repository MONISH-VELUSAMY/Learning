<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php

    $t=11;
    echo $t;
    if($t<=10){
        echo 'Good morning';
    }elseif($t>10 && $t<=15 ){
        echo 'good afternoon';
    }
    else{
        echo 'good night';
    }
      echo "<br/>";
    $favclr="red";
    switch($favclr){
        case "green":
            echo 'your fav color is green';
            break;
        case "violet":
            echo 'your fav color is violet';
            break;
        case "red":
            echo 'your fav color is red';
            break;
        default:
        echo 'your fav color is not defined';

    }

    ?>
</body>
</html>