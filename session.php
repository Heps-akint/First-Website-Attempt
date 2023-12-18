<?php
session_start();
if(isset($_SESSION['loggedin'])) header("Location: logout.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log-in page</title>
    <link rel="stylesheet" href="sessioncss.css">
</head>
<body>
    <div class='textpos'>
Welcome to 19013441's Coursework<br><br>
<form action="login.php" method="POST">
Username: <input type="text" name="username" required><br><br>
Password: <input type="password" name="password" required><br><br>
<input type="submit" value="login">
</form>
</div>
</body>
</html>