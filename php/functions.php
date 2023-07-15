<?php  declare(strict_types=1); ?>
<html>
<head>

</head>
<body>
<?php 

function add( float &$a,float &$b):float {
  $a+=5;
  return $a+$b;
 

}
$a=3.2;
$b=4.3;
echo "$a+$b is:".add($a,$b)."<br/>";
echo $a;
echo "<br>";

/*echo "<br>";
$cars=array(
  array("bmw","audi","figo"),array("indica","volks","wagnor")
);
echo count($cars);
for($i=0;$i<count($cars);$i++){
  for($j=0;$j<count($cars);$j++){
    echo $cars[$i][$j]."<br/>";
  }
}*/

$a=array(3,6,1,4);
$age = array( "Ben"=>"37","heter"=>"39","zoe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
/*for($i=0;$i<count($age);$i++){
  echo $age[$i];
  echo "<br/>";
}*/

?>


</body>








</html>