<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'ShaifB';
const DB_PASSWORD = '123123';
const DB_NAME = 'sunshine';

$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
if($mysqli ->connect_errno) {
    echo 'Error: ' . $mysqli->connect_errnor . ' : ' .$mysqli->connect_error;
}

$sql = "SELECT nummer, titel, datum, inhoud, prijs, foto FROM aanbiedingen";
$result = $mysqli->query($sql);

if($result->num_rows > 0){
    //output data of each row

?>

<!DOCTYPE html>
<html>
<head>
    <title>Sunshine</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>


<body>

<h1>Inhoud tabel aanbiedingen</h1>
<table>
<tr>
  <th>ID</th>
  <th>Naam</th>  
  <th>Username</th>
  <th>Password</th>
</tr>
<tr> 
<?php 
    
while($row = $result->fetch_assoc()) {
    $datum = new DateTime($row['datum']);
  echo "<td>" . $row['titel'] . "</td>";
  echo "<td>" . $formatdatum = date_format($datum, "d-m-y") . "</td>";
  echo "<td>" . $row['inhoud'] . "</td>";
  echo "<td>" . $row['prijs'] . "</td>";
  echo "<td>" . $row['foto'] . "</td>";
        ?>
</tr>
<?php
    }
    }else {
    echo "Er is iets misgegaan";
}

        ?>
</table>
</body>
</html>
