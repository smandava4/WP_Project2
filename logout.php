<?php
session_start();
session_destroy(); /* Destroy started session */
header("location:index.php");
exit;
?>