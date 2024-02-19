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


  // $sql1="CREATE TABLE IF NOT EXISTS employee(
  //     empid VARCHAR(50) not null,
  //     fname VARCHAR(30) not null,
  //     sname VARCHAR(30) not null,
  //     address VARCHAR(100) not null,
  //     dob DATE not null,
  //     nin VARCHAR(100) not null,
  //     salary VARCHAR(50) not null,
  //     department VARCHAR(100) not null,
  //     managerid VARCHAR(20) not null

  //     PRIMARY KEY(empid)
  // )
  // "; 

  // $sql11="INSERT INTO employee (?, ?, ?, ?, ?, ?, ?, ?) VALUES ('62-6894804', 'Merry', 'Stayte', '24 Factor Plaza', '1990/10/02', 'cq847516d', '76,631.69', 'Driver', '73-7147493')";
  // conn->query($sql1);

  $empid = $_POST['empid'];
  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $address = $_POST['address'];
  $dob = $_POST['dob'];
  $nin = $_POST['nin'];
  $salary = $_POST['salary'];
  $department = $_POST['department'];
  $efname = $_POST['efname'];
  $esname = $_POST['esname'];
  $erel = $_POST['erel'];
  $ephone = $_POST['ephone'];
  $managerid = $_POST['managerid'];




  $sql = "SELECT * FROM employee WHERE empid = $empid";
  $result = $conn->query($sql);
  if($result->num_rows != 0){
    echo("This employee already exists");
  }

  else{

    if ($department == 'Management'){
      $sql1 = "INSERT INTO manager (managerid, mfname, msname, maddress, mdob, mnin, msalary, department) VALUES ('$empid', '$fname', '$sname','$address', '$dob', '$nin', '$salary', '$department')";
      if ($conn->query($sql1) == TRUE) {
        echo "New record created successfully";
        $sql4 = "INSERT INTO emergency (empid, efname, esname, erel, ephone) VALUES ('$empid', '$efname', '$esname', '$erel', '$ephone')";
        if ($conn->query($sql4) == TRUE) {
          echo "New record created successfully";
          } else {
            echo "Error: " . $sql4 . "<br>" . $conn->error;
        }
      } 
      else {
          echo "Error: " . $sql1 . "<br>" . $conn->error;
      }


    }

    else{
        $sql3 = "SELECT * FROM manager WHERE managerid = '$managerid'";
        $result3 = $conn->query($sql3);
        if($result3->num_rows == 0){
          echo("This manager does not exist");
        }
        else{
          $sql2 = "INSERT INTO employee (empid, fname, sname, address, dob, nin, salary, department, managerid) VALUES ('$empid', '$fname', '$sname', '$address', '$dob', '$nin', '$salary', '$department', '$managerid')";
          if ($conn->query($sql2) == TRUE) {
            echo "New record created successfully";
            $sql5 = "INSERT INTO emergency (empid, efname, esname, erel, ephone) VALUES ('$empid', '$efname', '$esname', '$erel', '$ephone')";
            if ($conn->query($sql5) == TRUE) {
              echo "New record created successfully";
              } else {
                echo "Error: " . $sql5 . "<br>" . $conn->error;
            }
          } 
          else {
              echo "Error: " . $sql2 . "<br>" . $conn->error;
          }
         
    


      }
    }
  }
  $mysqli->close();







?>
	






















