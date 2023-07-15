<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>func_php</title>
</head>
<body>
    <h1>func_php</h1>
    <?php  
       $x=5;
       $y=6;
       //echo $y;
       echo "<br>"; 
       function mytest(){
        global $x,$y;
         $y= $x+$y;
       }

       function inc(){
        static $r=0;
        $r++;
        echo $r;
       }
      //echo "hello "."everyone";
      
     // var_dump($x);

     //$cars=array("volvo","bmw","toyota");
     //var_dump($cars);
     echo strlen("hello world");echo "<br>";
     echo strrev("hello world");
     echo strpos("hello world","a");

     echo str_replace("hello","dolly","hello world!!!");
?>
</body>
</html>