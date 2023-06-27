<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "PMS";
  
  $conn = mysqli_connect($server,$username,$password,$database);
  
  session_start();
  
  echo "{$_SESSION['student_name']}";
  $_SESSION['year'] = 0;
  $_SESSION['course'] = 0;
  if(isset($_POST['Check']))  {
      $_SESSION['year'] = $_POST["year"];
      $_SESSION['course'] = $_POST["course"];
  }

?>
    
    
    <style>
        * {
          box-sizing: border-box;
        }
        table, th, td {
            border: 1px solid black;
            margin: 20px;
        }
        body {
          margin: 20px;
          padding: 0;
          font-family: Arial, sans-serif;
          background-color: #f0f0f0;
        }
        .container {
          max-width: 800px;
          margin: 0 auto;
          padding: 40px;
          background-color: #fff;
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
          align-items: center;
          margin-top: 20px;
        }
        .form-group {
          flex: 1 1 300px;
          margin: 10px 20px;
        }
        label {
          display: block;
          margin-bottom: 5px;
          color: #666;
        }
        input[type="text"]
        /*,input[type="date"]*/ {
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
          background-color: #37a483;
          color: #fff;
          font-size: 16px;
          cursor: pointer;
        }
        button[type="submit"]:hover {
          background-color: #228b6e;
        }
      </style>
      
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Student Details</title>
        <link rel="stylesheet" href="stustyle.css">
    </head>
    <body>
        <div class="container">
            <h1>View Placed Students</h1>
            <form action="psd.php" method="post">
                <div class="form-group">
                    <label for="year">Year</label>
                    <input type="text" id="year" name="year">
                </div>
                <div class="form-group">
                    <label for="course">Course</label>
                    <input type="text" id="course" name="course">
                </div>
                <button type="submit" name="Check">Check</button>
            </form>
        </div>

        <div class="sdetails">
          <?php
            $sql = "SELECT * FROM `sdetails` where `Status` = 'Placed' and `YOP` = '" . $_SESSION['year'] . "' and `Course` = '" . $_SESSION['course'] . "'";
            //$result = $conn->query($sql);
            //$sql = "UPDATE `sdetails` set `Comany Name` = '$companyname' , `Role` = '$role' , `Resume` = '$encoded_data' where `Email` = '" . $_SESSION['student_name'] . "'";
        
            $result = mysqli_query($conn,$sql);
                    
            if (mysqli_num_rows($result) > 0) {
                echo "<table>
                        <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Roll no</th>
                        <th>Course</th>
                        <th>DOB</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Company Name</th>
                        <th>YOP</th>
                        <th>Role</th>
                        <th>Resume</th>
                        <th>Status</th>
                        </tr>";
                // output data of each row
                $files = scandir("Resumes");
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["First Name"]. "</td>
                            <td>" . $row["Last Name"]. "</td>
                            <td>" . $row["Roll no"]. "</td>
                            <td>" . $row["Course"]. "</td>
                            <td>" . $row["DOB"]. "</td>
                            <td>" . $row["Email"]. "</td>
                            <td>" . $row["Phone"]. "</td>
                            <td>" . $row["Address"]. "</td>
                            <td>" . $row["Gender"]. "</td>
                            <td>" . $row["Comany Name"]. "</td>
                            <td>" . $row["YOP"]. "</td>
                            <td>" . $row["Role"] ."</td>
                            
                            <td><a download='" . $row["Resume"] . "' href='Resumes/" . $row["Resume"] . "'>" . $row["Resume"] . "</a></td>

                            <td>" . $row["Status"]. "</td>
                        </tr>";
                }
                echo "</table>";
            } 
          ?>

        </div>
    </body>
    </html>
    