<?php
session_start();
unset($_SESSION['userid']);
unset($_SESSION['level']);
session_destroy();
Header("Location:index.php");
?>
