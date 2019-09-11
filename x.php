  <?php
  $dbname = 'kastje';
  $con = mysqli_connect('localhost', 'backend-service','geheim!', 'kastje');
  if (!$con) {
      echo 'Could not connect to mysql';
      exit;
  }

  $sql = "SELECT * FROM history";
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
