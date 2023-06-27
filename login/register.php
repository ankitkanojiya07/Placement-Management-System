
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "PMS";
$show = false;

$conn = mysqli_connect($server,$username,$password,$database);
if($conn) {
    echo"success";  
}
else {
    die("Error".mysqli_connect_error());
}

if(isset($_POST['Signup']))  {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($password == $cpassword ) {
        $sql = "INSERT INTO `userinfo` ( `Email`, `Password`) VALUES ( '$email', '$password')";
        $result = mysqli_query($conn,$sql);
       if ($result)	{
            $show = true;
       }	

    }
 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Register</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">

    <style>
		body {
			background-color: #f2f2f2;
			font-family: 'Times New Roman', Times, serif;
            background-image: url(back.webp);
            background-size: cover;
             color:black;
		}

		form {
			margin: auto;
			width: 50%;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 10px;
			box-shadow: 5px 5px 5px #ccc;
			background-color: #fff;
            background: 10px transparent;
		}

		input[type="text"], input[type="password"], select {
			display: block;
			margin: 10px 0;
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
			font-size: 16px;
			color: #333;
		}

		select {
			height: 40px;
			background-color: #f2f2f2;
			color: #333;
		}

		input[type="submit"] {
			display: block;
			margin: 20px auto 0;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}

		label {
			display: block;
			font-size: 16px;
			font-weight: bold;
			color: black;
			margin-bottom: 5px;
		}
        small{
            color:black;
        }
	</style>
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">PLACEMENT   MANAGEMENT    SYSTEM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/login/loggin.php">Login <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

    <main role="main" class="container">

        <div class="text-center mt-5 pt-5">
           <?php
                if($show) {
                  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success! You are registered , now you can login</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                }
            ?>
            <h1>Signup to our website</h1>
        </div>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password" required/>
                <small id="emailHelp" class="form-text text-muted">Make sure to type same password</small>
            </div>
            <button type="submit" class="btn btn-primary" name="Signup">Sign up</button>
        </form>


    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>