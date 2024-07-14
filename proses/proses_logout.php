<?php
session_start();
session_unset();
session_destroy();

setcookie('username_simsditp', '', time() - 3600, "/");
setcookie('password_simsditp', '', time() - 3600, "/");

header('Location: login');
exit();
?>
