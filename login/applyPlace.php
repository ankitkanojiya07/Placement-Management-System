
<!DOCTYPE html>
<html>
<head>
	<title>Student Details</title>
	<link rel="stylesheet" href="stustyle.css">
    <style>
        header {
    padding: 10px;
    background-color: rgb(80, 148, 194);
    width: 100%;
    height: 80px;
    font-size: xx-large;
    text-align: center;
    border-radius: 10px;
}

.admin {
padding: 5px;
margin-top: 13px;
background-color:  rgb(80, 148, 194);
width: 100%;
height: 32px;
font-size: x-large;
text-align: center;
border-radius: 10px;
}

    * {
        box-sizing: border-box;
    }

    body {
    margin: 20px;
    padding: 0;
    font-family: font-family:'Times New Roman', Times, serif;
    background-color:rgb(139, 180, 207);
}

.container {
    font-size:larger;
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
    background-color: rgb(90, 135, 167);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    margin-top: 0;
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.form-group {
    flex: 1 1 300px;
    margin: 10px;
}

label {
    display: block;
    margin-bottom: 5px;
    color:black;
}

input[type="text"],
input[type="file"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #fff;
    color: #666;
}

button[type="submit"] {
    display: block;
    margin: 20px auto 0;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: rgb(139, 180, 207);
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #228b6e;
}
</style>

</head>
<body>
    <div class="head">
        <header>
            PLACEMENT MANAGEMENT SYSTEM
            <img src="">
        </header>
        <p class="admin">WELCOME DEAR STUDENT</p>
    </div>
	<div class="container">
		<h1>Apply for Placement</h1>
		<form action="student.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="companyname">Company Name</label>
				<input type="text" id="companyname" name="companyname">
			</div>
			<div class="form-group">
				<label for="role">Role</label>
				<input type="text" id="role" name="role">
			</div>
			<div class="form-group">
				<label for="cv">Upload CV</label>
				<input type="file" id="cv" name="cv">
			</div>
			<button type="submit">Apply</button>
		</form>
	</div>
</body>
</html>