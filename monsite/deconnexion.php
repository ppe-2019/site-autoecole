<?php
session_start();
session_unset();
session_destroy();
header('Location: Index1.php');
exit();
?>