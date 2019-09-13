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

<?php
    $servername = "localhost";
    $username = "backend-service";
    $password = "geheim!";
    $db = "kastje";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=kastje", $username, $password);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    $sql = 'SELECT id,tijd FROM history';
    $q = $conn->query($sql);
    $q -> setFetchMode(PDO::FETCH_ASSOC);

?>
<div>
<table>
  <tr>
    <th>ID</th>
    <th>Tijd</th>
  </tr>
  <?php while ($r = $q->fetch()): ?>
    <tr>
      <td><?php echo htmlspecialchars($r['id']) ?></td>
      <td><?php echo htmlspecialchars($r['tijd']) ?></td>
    </tr>
  <?php endwhile; ?>
  </table>
  </div>
</body>
</html>
