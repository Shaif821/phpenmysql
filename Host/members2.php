<!DOCTYPE html>
<html>
<head>
    <title>Members registration</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>
<style>
    .wrap {
    text-align: center;
    font-family: Century Gothic;
    
    }</style>
<body>
<h1 style="text-align:center;">Members Registration:</h1>
<form  style="display:flex; justify-content: center; flex-direction: column;" action="members2_procces.php" method="post">
<!--    Fill in your UserID: <input type="text" name="id"><br>-->
    Fill in your full name: <input type="text" name="naam"><br>
    Fill in your Username: <input type="tex" name="user"><br>
    Fill in your Password: <input type="password" name="pass"><br><br>
    <input type="submit" name="verzend">
</form>
</body>
</html>
