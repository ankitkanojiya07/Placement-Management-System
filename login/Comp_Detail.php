<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "pms";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn) {
    echo" ";  
}
else {
    die("Error".mysqli_connect_error());
}
if(isset($_POST['Submit']))  {
    $cname = $_POST["cname"];
    $roleoff = $_POST["roleoff"];
    $date = $_POST["date"];
    $phnum = $_POST["phnum"];
    $email = $_POST["email"];
    $status = $_POST["status"];

        $sql = "INSERT INTO `company` ( `Company Name`,	`Roles Offered`,`Last Date to Apply`,`Phone Number`,`Email`,`Status`) VALUES ( '$cname', '$roleoff','$date','$phnum','$email','$status')";
       // $result = mysqli_query($conn,$sql);
       if (mysqli_query($conn,$sql)==true)
	{
		echo "<script>alert('Data saved');</script>";
	}		
else
{
	echo "<script>alert('Could not save data');</script>";
}

}
?>

<html>  
    <head>
        <title>Company Details </title>
        <link rel="stylesheet" href="tablestyle.css">
    </head>
<body>  
	
<div class="head">
        <header>
            PLACEMENT MANAGEMENT SYSTEM
            <img src="">
        </header>
        <p class="admin">ADD COMPANY DETAILS</p>
    </div>
<table align="center">
<form action="Comp_Detail.php" method="post">
    <div class="student_container">
			<div class="from-group">
				<label for="comapny" >Company Name</label>
				<input type="string" id="cname" name="cname" required/>
			</div>
			<div class="from-group">
				<label for="role" >Roles Offered</label>
				<input type="string" id="roleoff" name="roleoff" required/>
			</div>
			<div class="from-group">
				<label for="date" >Last Date to Apply</label>
				<input type="date" id="date" name="date" required/>
			</div>
			<div class="from-group">
				<label for="phnum" >Phone Number</label>
				<input type="string" id="phnum" name="phnum" required/>
			</div>
			<div class="from-group">
				<label for="email" >Email </label>
				<input type="string" id="email" name="email" required/>
			</div>
			<div class="from-group">
				<label for="status" >Status</label>
				<select name="status" class='select'>
                     <option value="select">--Select--</option>
                    <option value="placed">Hiring</option>
                    <option value="not-placed">Not-Hiring</option>
                </select>
			</div>
            <button type="submit" class="submit" name='Submit'>Save</button>
	</form>   
</table> 
  
  
</body>   
</html>  