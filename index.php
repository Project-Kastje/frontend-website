<!DOCTYPE html>
<html>
<head>
    <title> Job's Keukenkastje </title>
    <!--<meta http-equiv="refresh" content="1000">-->
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
  <table>
    <tr>
      <th>ID</th>
      <th>Tijd</th>
    </tr>
  <?php
  $dbname = 'kastje';
  $con = mysqli_connect('localhost', 'backend-service','geheim!', 'kastje');
  if (!$con) {
      error_log('Could not connect to mysql');
      exit;
  }

  $sql = "SELECT * FROM history";
  $result = mysqli_query($con,$sql);

  if (!$result) {
    error_log("DB Error, could not list tables\n");
    error_log('MySQL Error: ' . mysqli_error());
    exit;
}

while ($row = mysqli_fetch_row($result)) {
    error_log("<tr><td>ID: {$row[0]}\n</td>");
    error_log("<td>Tijd: {$row[1]}\n<td></tr>");
}
  ?>
</table>
</body>
</html>
