
<!DOCTYPE html>
<html>
<head>
  <title>Add Employee</title>
</head>
<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <h1>CREATE AN EMPLOYEE</h1>
  <hr>

  <form method="POST" action="insert_db.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Employee ID</label>
      <input name ="empid" type="empid" class="form-control" id="empid" placeholder="123456">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
      <input name ="name" type="name" class="form-control" id="name" placeholder="John Doe">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Address</label>
      <input name="address" type="address" class="form-control" id="address" placeholder="29 Mayfair Avenue">
    </div>
      </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Date of Birth</label>
      <input name ="dob" type="dob" class="form-control" id="dob" placeholder="21/01/01">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Salary</label>
      <input name ="salary" type="salary" class="form-control" id="salary" placeholder="90000">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">National Insurance Number</label>
      <input name ="nin" type="nin" class="form-control" id="nin" placeholder="AB123456C">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Department</label>
      <input name ="department" type="department" class="form-control" id="department" placeholder="Driver">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Emergency Name</label>
      <input name ="ename" type="ename" class="form-control" id="ename" placeholder="Sarah Doe">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Emergency Relationship</label>
      <input name ="erel" type="erel" class="form-control" id="erel" placeholder="Mother">
    </div>
      <div class="form-group">
      <label for="exampleInputPassword1">Emergency Phone Number</label>
      <input name ="ephone" type="ephone" class="form-control" id="ephone" placeholder="07365825483">

    <button type="submit" class="btn btn-primary">Submit</button>
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


