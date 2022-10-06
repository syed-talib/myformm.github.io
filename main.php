<?php
//database connection
if(isset($_POST['name'])){

$server = "localhost";
$username = "root";
$password ="";
$con = mysqli_connect($server,$username,$password);

//check database connection

if(!$con){
     die("connection is failed".mysqli_connect_error());
    }
    else{
          //echo "connection successfully";
    }

    //post details

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $gender = $_POST['gender'];
    $stream = $_POST['stream'];
    $time = $_POST['time'];
    $comments = $_POST['comments'];

    $sql = "INSERT INTO `register`.`students` ( `name`, `roll`, `gender`, `stream`, `date/time`, `comments`) VALUES ( '$name', '$roll', '$gender', '$stream', '$time','$comments');";
    
    if($con->query($sql)==true){
        
       // echo "data inserted successfully";
    }
    else{
          echo "data is not inserted something wrong....";
    }

    $con->close();

}

?>

<!-- html page -->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="th.jpg" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

      <h1>karim city college register form</h1>
         <form action="main.php" method="post" >

             
             <input type="text" name="name" id="name" required placeholder="enter your name" autocomplete="off"  maxlength="20">
             <input type="text" name="roll" id="roll" required placeholder="enter your roll" autocomplete="off" maxlength="3">
             
             <select name="gender" id="gender"  style="cursor:pointer;">

                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
                
                
    
    
    
                 </select>
                 

 

            <select name="stream" id="option"  style="cursor:pointer;">

            <option value="bsc.it">bsc.it</option>
            <option value="bsc.it">bca</option>
            <option value="bsc.it">bsc.math</option>
            <option value="bsc.it">bsc.chem</option>
            <option value="bsc.it">bsc.phy</option>
            <option value="bsc.it">bsc</option>
            <option value="bsc.it">bcom</option>
            <option value="bsc.it">bcom.acc</option>
            <option value="bsc.it">ba</option>
            



             </select>
             
             <input type="time" name="time" id="time" required placeholder="enter time" >
             <textarea name="comments" id="text" cols="30" rows="10" placeholder="enter something...."></textarea>
             <button>submit</button>
             


         </form>


    </div>
    
</body>
</html>