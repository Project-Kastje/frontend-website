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
    <div>
      <?php
      $hostname = "localhost";
      $username = "backend-service";
      $password = "geheim!";
      $db = "kastje";

      $dbconnect=mysql_connect($hostname,$username,$password,$db);

      if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
      }

      ?>
      <table border="1" align="center">
      <tr>
        <td>ID</td>
        <td>Tijd</td>
      </tr>

      <?php

      $query = mysql_query($dbconnect, "SELECT * FROM history")

      while ($row = mysql_fetch_array($query)) {
        echo
         "<tr>
          <td>{$row['id']}</td>
          <td>{$row['prijs']}</td>
         </tr>\n";

      }

      ?>
</table>
      </div
</body>
</html>
