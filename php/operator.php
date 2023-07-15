<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic_PHP</title>
</head>

<body>
    <?php
    $x=9;
    $y=3;
    echo "<h2>arithmetic operators</h2>";
    echo "add of ".$x." and ".$y." is ".($x+$y)."<br>";
    echo "sub of ".$x." and ".$y." is ".($x-$y)."<br>";

    echo "mul of ".$x." and ".$y." is ".($x*$y)."<br>";

    echo "div of ".$x." and ".$y." is ".($x/$y)."<br>";

    echo "<h2>assignment operators</h2>";

    $x=$x+$y;
    
    echo  '$x=$x+$y '." is ".$x;
    echo "<br>";

    if($x==12){
        print '$x is 12'."</br>" ;
    }
    if($x<>$y){
        print '$x is not equal to $y';
    }

    echo "<h2>increment and decrement</h2>";
    $a=5;
    $b=6;
    echo 'value of $a '.$a."<br>";
    echo 'value of $b '.$b."<br>";
    echo 'pre increment of $a is '.++$a."<br>" ;
    echo 'post increment of $a is '.$a++."<br>" ;
    echo 'value of $a '.$a."<br>";

    $e=array("apple","banaan");
    $r=array("mango","jack");
    $f=$e+$r;
  # echo $f;


  echo $a==$b?"true":"false";

  echo $x = $x ?? "red";


    ?>
</body>
</html>