<?php/*
$server = "localhost";
$username = "root";
$password = "";
$database = "pms";


$con = mysqli_connect($server,$username,$password,$database);

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:loggin.php');
}
*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="studentstyle.css">
    
</head>

<body>
    <div class="head">
        <header>
            PLACEMENT MANAGEMENT SYSTEM
            <img src="">
        </header>
        <p class="admin">WELCOME DEAR STUDENT</p>
    </div>
    
    <img src="student.jpg">
    <h2>"Learning is never done without errors and defeat."</h2>
    <nav>
    
        <div class="nav_side">
            <div class="home">
                <h2>HOME</h2>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><h2><a href=applyPlace.php>APPLY FOR PLACEMENT</a></h2></button>
                
            </div>
            <div class="dropdown">
                <button class="dropbtn"><h2><a href=viewplaced.php>VIEW PLACED STUDENT</a></h2></button>
            </div>
        </div>    
       
    </nav>
    
    
    

</body>

</html>