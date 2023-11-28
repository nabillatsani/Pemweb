<?php
session_start();


$logoutUser = isset($_SESSION['username']) ? $_SESSION['username'] : 'Unknown User';


session_destroy();


echo "<script>alert('User $logoutUser has logged out.'); window.location.href='signin.php';</script>";
exit();
?>
