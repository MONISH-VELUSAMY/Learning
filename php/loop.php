<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_LOOPS</title>
</head>
<body>
    <?php
        echo "<h2>while loop</h2>";

        $r=0;
        while($r<=10){
          echo "the number is $r <br>";
          $r+=1;
        }

        echo "<h2>dowhile loop</h2>";
         $d=0;
         do{
            
            echo "the number is $d <br>";
            $d+=1;

         }while($d<=10);


         echo "<h2>dowhile loop</h2>";
         $d=20;
         do{
            echo "the number is $d <br>";
            $d+=1;

         }while($d<=10);

         echo "<h2>for loop</h2>";
         for($x=0;$x<=10;$x++){
            if($x==4){
                print 'breaking...';
                break;
            }else{
            echo "the number is $x <br>";}
         } 
         echo "<h2>for loop</h2>";
         for($x=0;$x<=10;$x++){
            if($x==4){
                print 'continuing...<br>';
                continue;
            }else{
            echo "the number is $x <br>";
            }
         } 

         echo "<h2>foreach loop</h2>";
         $age=array("peter"=>23,"ram"=>33,"ponram"=>44);
         foreach($age as $x=>$y){
            echo "$x = $y <br>";
         }
         
        



    ?>
</body>
</html>