<?php
session_start ();

$_SESSION['status'] = "logout";
session_destroy();

header("location: index.php");
exit ();
?>
