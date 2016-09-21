<?php
const DB_HOST = 'localhost';
const DB_USERNAME = 'ShaifB';
const DB_PASSWORD = '123123';
const DB_NAME = 'sunshine';

//Maakt verbinding
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME );

if($mysqli ->connect_errno) {
    echo 'Error: ' . $mysqli->connect_errnor . ' : ' .$mysqli->connect_error;
}
else {
    echo 'Connection OK!<br>';
}

//form values gedoe
if(isset($_POST['verzend'])){
    $naam = $_POST['naam'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];

//Naar de database
$sql = "INSERT INTO members (name, username, password)
VALUES ('$naam', '$user', '$pass')";
    
//Checkt of alles in toegevoegd
if($mysqli->query($sql) === TRUE){
    echo "Succesvol toegevoegd aan de database";
}else {
    "Error: " . $sql . "<br>" . $mysqli->error;
}
    
}
?>




