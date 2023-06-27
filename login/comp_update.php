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
	$companyname = $_POST["companyname"];
	$status= $_POST["status"];
	$roleoff = $_POST["roleoff"];
    $date = $_POST["date"];
	

    //$sql = "UPDATE `company` SET `Company Name`='".$companyname."',`Status`='".$status."',`Roles Offered`=".$roleoff.",`Last Date to Apply`=".$date." WHERE `Company Name`= $companyname" ;
	$sql = "UPDATE `company` SET `Company Name`='$companyname', `Status`='$status', `Roles Offered`='$roleoff', `Last Date to Apply`='$date' WHERE `Company Name`='$companyname'";
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
        <p class="admin">UPDATE COMPANY DETAILS</p>
    </div>
    <div class="container">
		<form action="comp_update.php" method="post" enctype="multipart/form-data">
			<div class="update">
				<label for="companyname" >Company Name</label>
				<input type="text" id="companyname" name="companyname" required/>
			</div>
			<p align='center'>Column to be updated ⬇. </p>
			<div class="form-group">
				<label for="role">Status</label>
				<select name="status" class='select'>
                     <option value="select">--Select--</option>
                    <option value="placed">Hiring</option>
                    <option value="not-placed">Not-Hiring</option>
                </select >
			</div>
			<div class="form-group">
				<label for="role">Roles Offered</label>
				<input type="text" id="roleoff" name="roleoff" required/>
			</div>
            <div class="form-group">
				<label for="date">Last Date to Apply</label>
				<input type="date" id="date" name="date" required/>
			</div>
			<button type="submit" class="submit" name ="Submit">Save</button>
		</form>
    
</body>
</html>