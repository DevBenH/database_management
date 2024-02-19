<?php
require_once("config.php")
?>
<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		<h1>Items Inserted into database</h1>

		<form method="POST" action="home.php">
		<button type="submit" class="btn btn-primary">Return Home</button>
		</form>
		</form>
		<script type="text/javascript" src="validate_input.js"></script>
	<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>

<?php

print_r($_POST);
insert();
function insert(){

	$emp_id = $_POST['empid'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$dob = $_POST['dob'];
	$salary = $_POST['salary'];
	$nin = $_POST['nin'];
	$department = $_POST['department'];
	$ename = $_POST['ename'];
	$erel = $_POST['erel'];
	$ephone = $_POST['ephone'];

	$sql = "INSERT INTO employee (emp_id, name, address, dob, nin, department) VALUES (:emp_id, :name, :address, :dob, :nin, :department)";

	$sql = "INSERT INTO employee "
	$stmt = $pdo->prepare($sql);

	$stmt->execute(['emp_id' => $empid, 'name' => $name, 'address' => $address, 'dob' => $dob, 'nin' => $nin, 'department' => $department]);

  	



	
	
	// $sql = "INSERT INTO emergency (empid, ename, erel, ephone) VALUES (:empid, :ename, :erel, :ephone)";
	
	// $stmt = $pdo->prepare($sql);

	// $stmt->execute(['empid' => $empid, 'ename' => $ename, 'erel' => $erel, 'ephone' => $ephone]);
	
	
}



?>