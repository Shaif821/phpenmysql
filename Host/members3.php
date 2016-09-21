<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'ShaifB';
const DB_PASSWORD = '123123';
const DB_NAME = 'sunshine';

//Maakt verbinding met de database
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );
if($mysqli ->connect_errno) {
    echo 'Error: ' . $mysqli->connect_errnor . ' : ' .$mysqli->connect_error;
}
//Selecteer van members
$sql = "SELECT id, name, username, password FROM members";
$result = $mysqli->query($sql);

if($result->num_rows > 0){
    //output data
   
        
?>
<!DOCTYPE html>
<html>
<head>
    <title>Memeber3</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>


<body>

<h1>Content table members</h1>
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
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
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
