<!DOCTYPE html>
<html>
<head>
    <title> Job's Keukenkastje </title>
    !--<meta http-equiv="refresh" content="1000">
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
  $dbname = 'kastje';
  $con = mysqli_connect('localhost', 'backend-service','geheim!', 'kastje');
  if (!$con) {
      echo 'Could not connect to mysql';
      exit;
  }

  $sql = "SELECT * FROM history WHERE 1";
  $result = mysqli_query($con,$sql);

  if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}

while ($row = mysqli_fetch_row($result)) {
    echo "ID: {$row[0]}\n";
    echo "Tijd: {$row[1]}\n";
}
  ?>

</body>
</html>
