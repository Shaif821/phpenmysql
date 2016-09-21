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
    echo "The following information is succesfully added to the table 'members':";
}else {
    "Error: " . $sql . "<br>" . $mysqli->error;
}

    //Selecteert van members de value
$sql = "SELECT id, name, username, password FROM members";
$result = $mysqli->query($sql);

//echoed de waardes
    if($result->num_rows > 0){
    //output data
    while($row = $result->fetch_assoc()) {
        echo "<div class='wrap'><br>The following information is succesfully added to the table 'members':<br>";
        echo "Userid:" . " " . $row['id'] . "<br>";
        echo "Full name: " . " " . $row['name'] . "<br>";
        echo "Username: " . " " . $row['username'] . "<br>";
        echo "Password: "  . $row['password'] . "<br></div>";
    }
}else {
    echo "0 results";
}
}
?>




