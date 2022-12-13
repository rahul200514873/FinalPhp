<?php
require 'database.php';
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$age = $_POST['age'];

require './templates/header.php';
if(true){
    $sql = "INSERT INTO data1 (firstName, lastName, age) VALUES ('$firstName', '$lastName', '$age');";
    $conn->exec($sql);
    $conn = null;
    header('Location: content.php');
}
require './templates/footer.php';
?>
