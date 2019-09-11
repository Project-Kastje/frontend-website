<!DOCTYPE html>
<html>
<head>
    <title> Job's Keukenkastje </title>
    <meta http-equiv="refresh" content="10000">
    <link rel="stylesheet" href="main2.css" type="text/css">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="header">
		<p>Job's keukenkastje</p>
    </div>
	<div class="headerspace"></div>
	<div class="button">
		<button type="button" class="btn-lg btn-block btn-danger" id="thuis">
			<p class="buttontext">Thuis</p>
		</button>
    </div>
	<br>
    <?php
	$hostname = "localhost";
	$username = "backend-service";
	$password = "geheim!";
	$db = "kastje";

	$dbconnect=mysqli_connect($hostname,$username,$password,$db);

	if(dbconnect->connect_error) {
		die("Database connection failed: " . $dbconnect->connect_error);
	}
?>
	<table border="1" align="center">
	<tr>
	<td>ID</td>
	<td>Tijd</td>
	</tr>
<?php
	$query = mysqli_query($dbconnect, "SELECT * FROM history")
		or die (mysqli_error($dbconnect));

	while ($row = mysqli_fetch_array($query)) {
	echo "<tr>
		<td>{$row['id']}</td>
		<td>{$row['tijd']}</td>
		</tr>\n";
	}

	$showtables=mysql_query($sql);
	while($table = mysql_fetch_array($showtables)){
		echo($table[0]. "<br>");
		 ?>
	<div class="testspace">
	</div>
</body>
</html>
