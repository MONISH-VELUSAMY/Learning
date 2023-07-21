<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_form_validation</title>
</head>
<style>
    .error{
        color: #FF0000;
    }
</style>

<body>
    <?php
     $nameerr=$mailerr=$generr="";
     $name=$email=$gender="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST['Name'])){
            $nameerr="enter the name";
        }else{
            $name=$_POST['Name'];
        }

        if (empty($_POST['email'])){
            $mailerr="enter the email";
        }else{
            $email=$_POST['email'];
        }
        
        if (empty($_POST['gender'])){
            $generr="enter the gender";
        }else{
            $gender=$_POST['gender'];}

     }
     
     
     
     
     
     ?>


    <h2>form validation</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>">
        name:<input type="text" name="Name"  value="<?php echo $name; ?>"/>
        <span class="error"><?php echo $nameerr; ?></span><br>

        email:<input type="email" name="email" value="<?php echo $email; ?>"/>
        <span class="error"><?php echo $mailerr; ?></span><br>
       Gender: <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male" ) echo "checked";  ?> 
                value="male" />male
                <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female" ) echo "checked";  ?> 
                value="female" />Female
                <span class="error"><?php echo $generr; ?></span><br>

        <input type="submit" value="submit" />
    </form>

    <?php  
    
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    echo "<br>";

    $d=strtotime("12:58pm July 16 2023");
    //$d=strtotime("tomorrow");
    echo date('d-m-Y h:i:sa',$d);
    echo time();
    
    ?>
    
    

</body>

</html>