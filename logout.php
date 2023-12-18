<?php
 session_start();
 session_destroy();
 header("Location: session2.php");
 exit();
 ?>
