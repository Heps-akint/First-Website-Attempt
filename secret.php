<?php session_start();
 if(!isset($_SESSION['loggedin'])) header("Location: session2.php");
 if($_SESSION['loggedin']===FALSE) header("Location: session2.php");
 ?>
 <!DOCTYPE html>
 <html><head><title>Secret Area</title></head>
 <body>
 Welcome to the private message area for
 <?php echo $_SESSION['username'] ?>.
 <h1>Messages:</h1>
 <?php
 // PHP code here to retrieve messages for this user ...
 ?>
 <form action="logout.php" method="POST">
 <input type="submit" name="logout" value="Log out">
 </form>
 <p>&copy; 2021 Private Message Limited</p>
 </body>
 </html>
