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
    <?php
    $servername = "localhost";
    $username = "backend-service";
    $password = "geheim!";
    $db = "kastje";
    try {
       $conn = new PDO("mysql:host=$servername;dbname=$db, $username, $password, $db);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "Connected successfully";
       }
    catch(PDOException $e)
       {
       echo "Connection failed: " . $e->getMessage();
       }
    ?>
</table>

</body>
</html>
