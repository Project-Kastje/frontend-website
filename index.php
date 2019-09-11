<!DOCTYPE html>
<html>
<head>
    <title> Job's Keukenkastje </title>
    <meta http-equiv="refresh" content="5">
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
    <br>
    <div> <?php
	/*variabelen*/
	$dbname = 'kastje';
	$dbuser = 'backend-service';
	$dbpass = 'geheim!';
	$dbhost = 'localhost';
	/* sql code*/
	$sql = "SELECT * FROM `history` WHERE 1";
	/*check of er connectie is met de database*/
	$connection = mysql_connect($dbhost, $dbuser, $dbpass);
	if(!connection){
		die('could not connect'. mysql_error());
	}
	$showtables=mysql_query($sql);
	while($table = mysql_fetch_array($showtables)){
		echo($table[0]. "<br>");
		 ?>
   </div>
   <?php
/**
 * Created by PhpStorm.
 * User: Daan
 * Date: 9-9-2019
 * Time: 12:53
 */
?>
	<div class="testspace">
	</div>
</body>
</html>
