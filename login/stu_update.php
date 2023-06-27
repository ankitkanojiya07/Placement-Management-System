<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "pms";


$con = mysqli_connect($server,$username,$password,$database);
if($con) {
    echo" ";  
}
else {
    die("Error".mysqli_connect_error());
}



if(isset($_POST['Submit']))  {
	$email = $_POST["email"];
	$addr = $_POST["addr"];
    $contno = $_POST["contno"];
	$status= $_POST["status"];

	$sql = "UPDATE `student` SET `Address`='".$addr."', `Contact Number`='".$contno."', `Status`='".$status."' WHERE `Email ID`= '".$email."'";
	if (mysqli_query($con,$sql)==true) 
	{
		echo "<script>alert('Data Updated Successfully .');</script>";
	}		
	else
	{
 		echo "<script>alert('Could not Update data');</script>";
	}
	mysqli_close($con);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel='stylesheet' href='tablestyle.css'>
</head>
<body>
    <div class="head">
        <header>
            PLACEMENT MANAGEMENT SYSTEM
            <img src="">
        </header>
        <p class="admin">UPDATE STUDENT DETAILS</p>
    </div>
    <div class="container">
		<form action="stu_update.php" method="post" enctype="multipart/form-data">
			<div class="update">
				<label for="student_email" >Email ID</label>
				<input type="string" id="email" name="email" required/>
			</div>
			<p align='center'>Column to be updated ⬇ . </p>
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" id="addr" name="addr" required/>
			</div>
			<div class="form-group">
				<label for="contno">Contact Number</label>
				<input type="text" id="contno" name="contno" required/>
			</div>
			<div class="form-group">
				<label for="role">Status</label>
				<select name="status" class="select" required>
    				<option value="select">--Select--</option>
    			    <option value="placed">Placed</option>
   				    <option value="not-placed">Not-Placed</option>
    			    <option value="apear">Appearing</option>
				</select>
			</div>
            
			<button type="submit" class="submit" name="Submit">Save</button>
		</form>
</body>
</html>