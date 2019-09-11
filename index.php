<!DOCTYPE html>
<html>
<head>
    <title> Job's Keukenkastje </title>
    !--<meta http-equiv="refresh" content="1000">
    <link rel="stylesheet" href="main2.css" type="text/css">
    <style>
    table, th, td {
      border: 1px solid black;
    }
  </style>
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
  <table>
    <tr>
      <th>ID</th>
      <th>Tijd</th>
    </tr>
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
    echo "<tr><td>ID: {$row[0]}\n</td>";
    echo "<td>Tijd: {$row[1]}\n<td></tr>";
}
  ?>
</table>
</body>
</html>
