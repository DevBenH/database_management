<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<h1>The database has been updated</h1>

<form method="POST" action="home.php">
  <button type="submit" class="btn btn-primary">Return Home</button>
</form>
</form>
<script type="text/javascript" src="validate_input.js"></script>
<?php

  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'coursework_db';
 
  $conn = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($conn->connect_error) {
    echo 'Errno: '.$conn->connect_errno;
    echo '<br>';
    echo 'Error: '.$conn->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$conn->host_info;
  echo '<br>';
  echo 'Protocol version: '.$conn->protocol_version;
  echo "updated";


  $empid = $_POST['empid'];
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $nin = $_POST['nin'];
  $salary = $_POST['salary'];
  $department = $_POST['department'];
  $ename = $_POST['ename'];
  $erel = $_POST['erel'];
  $ephone = $_POST['ephone'];
  $mname = $_POST['mname'];


  $sql2 = "SELECT * FROM employee WHERE empid = '$empid'";
  $result = $conn->query($sql2);
  if($result->num_rows < 1){
    echo("This employee doesnt exist");
  }
  else{
      $sql = "UPDATE employee SET employee.salary = '$salary' WHERE employee.empid ='$empid'";

      if ($conn->query($sql) == TRUE) {
        echo "Employee successfully updated";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
        
        $sql = "UPDATE emergency SET emergency.ephone='$ephone' WHERE emergency.empid ='$empid'";
      
      if ($conn->query($sql) == TRUE) {
        echo "Employee successfully updated";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      } 
  }


    
  $mysqli->close();



?>