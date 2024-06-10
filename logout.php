<?php
session_start();
unset($_COOKIE['usuario']);
setcookie('usuario', '');
session_destroy();
header('Location: login.php');
