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

	$sname=$_POST["sname"];
	$fathname=$_POST["fathname"];
	$rollno=$_POST["rollno"];
	$dob=$_POST["dob"];
	$email=$_POST["email"];
	$contno=$_POST["contno"];
	$addr=$_POST["addr"];
	$gender=$_POST["gender"];
	$course=$_POST["course"];
	$status=$_POST["status"];
	$yop=$_POST["yop"];

	$sql="INSERT INTO `student` (`Student Name`, `Father Name`, `StudentID/Roll No`, `Date of Birth`, `Email ID`, `Contact Number`, `Address`, `Gender`, `Course`, `Status`,`Year of Passing`) 
	VALUES ('$sname','$fathname','$rollno','$dob','$email','$contno','$addr','$gender','$course','$status','$yop')";
     if (mysqli_query($con,$sql)==true) 
	{
		echo "<script>alert('Data Saved Successfully .');</script>";
	}		
else
{
	echo "<script>alert('Could not save data');</script>";
}
    }

?>


<html>  
    <head>
        <title>Student Details</title>
        <link rel="stylesheet" href="tablestyle.css">
    </head>
<body>  
<div class="head">
        <header>
            PLACEMENT MANAGEMENT SYSTEM
            <img src="">
        </header>
        <p class="admin">ADD STUDENT DETAILS</p>
    </div>

<table align="center"> 
<form action="student.php" method="post">
	
	<form action="studet.php" method="post">
	<div class="student_container">
			<div class="from-group">
				<label for="student" >Student Name</label>
				<input type="string" id="sname" name="sname" required/>
			</div>
			<div class="from-group">
				<label for="father" >Father Name</label>
				<input type="string" id="fathname" name="fathname" required/>
			</div>
			<div class="from-group">
				<label for="roll-id" >StudentID/Roll No</label>
				<input type="string" id="rollno" name="rollno" required/>
			</div>
			<div class="from-group">
				<label for="dob" >Date of Birth</label>
				<input type="date" id="dob" name="dob" required/>
			</div>
			<div class="from-group">
				<label for="email" >Email ID</label>
				<input type="string" id="email" name="email" required/>
			</div>
			<div class="from-group">
				<label for="conatct" >Contact Number</label>
				<input type="string" id="contno" name="contno" required/>
			</div>
			<div class="from-group">
				<label for="address" >Address</label>
				<input type="string" id="addr" name="addr" required/>
			</div>
			<div class="from-group">
				<label for="student" >Gender</label>
				<select name="gender" class="select">
    					<option value="select">--Select--</option>
      					<option value="male">Male</option>
      					<option value="female">Female</option>
        				<option value="other">other</option>
    			</select>
			</div>
			<div class="form-group">
				<label for="course">Course</label>
				<input type="string" id="course" name="course" required/>
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
			<div class="from-group">
				<label for="yop" >Year of Passing</label>
				<input type="string" id="yop" name="yop" required/>
			</div>
			<button type="submit" class="submit" name='Submit'>Save</button>
 </form>   
</table> 
  
  
</body>   
</html>  
