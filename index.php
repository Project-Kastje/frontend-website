<!DOCTYPE html>
<html>
<head>
    <title> Job's Keukenkastje </title>
    <!--<meta http-equiv="refresh" content="1000">-->
    <link rel="stylesheet" href="main2.css" type="text/css">
    </style>
    <script>
	var alarm = 0;
	function button() {
		if (alarm == 1) {
			alarm = 0;
			document.getElementById("buttontext").innerHTML = "Thuis";
			document.getElementById("thuis").style.backgroundColor = "green";
		} else {
			alarm = 1;
			document.getElementById("buttontext").innerHTML = "Weg";
			document.getElementById("thuis").style.backgroundColor = "red";
		}
	}
    </script>
</head>
<body>
	<div class="header">
		<p>Job's keukenkastje</p>
    </div>
	<div class="headerspace"></div>
	<div class="button">
		<button onclick="button()" type="button" class="btn-lg btn-block btn-danger" id="thuis">
			<p id="buttontext">Thuis</p>
		</button>
  </div>
  <script>
	if (alarm == 0) {
		document.getElementById("buttontext").innerHTML = "Thuis";
		document.getElementById("thuis").style.backgroundColor = "green";
	} else {
		document.getElementById("buttontext").innerHTML = "Weg";
		document.getElementById("thuis").style.backgroundColor = "red";
	}
    </script>
	<div>
  <table>
    <tr>
      <th>ID</th>
      <th>Tijd</th>
    </tr>
<?php
    echo("Hello World!");
    $servername = "localhost";
    $username = "backend-service";
    $password = "geheim!";
    $db = "kastje";
    try {
        echo("2");
        $conn = new PDO("mysql:host=$servername;dbname=kastje", $username, $password);
        echo("3");
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>

  </table>
  </div>
</body>
</html>
