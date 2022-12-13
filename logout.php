<?php
require './templates/header.php';
session_start();
session_unset();
session_destroy();
header('Location: login.php');
require './templates/footer.php';
?>