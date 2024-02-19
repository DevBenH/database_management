<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<h1>Displaying Employees</h1>

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
    

  $department = $_POST['department'];
  $erel = $_POST['erel'];


  $sql="SELECT * FROM employee NATURAL JOIN emergency WHERE employee.department = '$department' AND emergency.erel = '$erel'";


  $result = $conn->query($sql);
  $result1 = $conn->query($sql);
  $result2 = $conn->query($sql);
  $result3 = $conn->query($sql);
  $result4 = $conn->query($sql);
  $result5 = $conn->query($sql);
  $result6 = $conn->query($sql);
  $result9 = $conn->query($sql);

  echo("<br>");
  echo("<br>");
  echo("<br>");


  
  for($i = 0; $i < $result->num_rows; $i++){
      $holder = $result9->fetch_assoc()['managerid'];
      $sql2="SELECT * FROM manager WHERE manager.managerid = '$holder'";
        
      $result7 = $conn->query($sql2);
      $result8 = $conn->query($sql2);
      echo("Name: " . $result1->fetch_assoc()['fname'] . " " . $result2->fetch_assoc()['sname'] . "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp");
      echo("Department: " . $result->fetch_assoc()['department'] . "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp");
      echo("Emergency Relationship: " . $result3->fetch_assoc()['erel'] . "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp");
      echo("Manager Name: " . $result7->fetch_assoc()['mfname'] . " " .  $result8->fetch_assoc()['msname'] ."&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp");

      echo("<hr>");
      echo("<br>");

  }



  $conn->close();





?>