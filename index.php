<!DOCTYPE html>
<html>
<head>
    <title> Job's Keukenkastje </title>
    <meta http-equiv="refresh" content="4">
    <link rel="stylesheet" href="main2.css" type="text/css">
    </style>
</head>
<body>
	<div class="header">
		<p>Job's keukenkastje</p>
    </div>
	<div class="headerspace"></div>
<<<<<<< HEAD
=======
	<div class="button">
		<button onclick="button()" type="button" class="btn-lg btn-block btn-danger" id="thuis">
			<p id="buttontext">Thuis</p>
		</button>
  </div>
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

    function get(){
	$sql2 = "SELECT * FROM alarm";
	$result2 = mysqli_query($conn,$sql2);
	return $result2;
    }

    function write($alarm){
	if ($alarm == 1) {
	    $sql3 = "INSERT INTO alarm (stat) VALUES (1)";
	    mysqli_query($conn,$sql3);
	} else {
	    $sql4 = "INSERT INTO alarm (stat) VALUES (0)";
	    mysqli_query($conn,$sql4);
	}
    }
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
