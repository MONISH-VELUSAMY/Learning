<html>
<head>

</head>
<body>
<?php  
class Car{ 
    public $color;
    public $model;
    public function __construct($color,$model){
        $this->color=$color;
        $this->model=$model;
    

    }
    public function msg(){
        return "this car is ".$this->model." in ".$this->color. "in color";
    }





}
$mycar = new Car("red","figo");
echo $mycar->msg();


?>


</body>








</html>