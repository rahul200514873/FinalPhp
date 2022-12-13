<?php
require 'database.php';
$email = $_POST['email'];
$password = hash('sha512', $_POST['password']);
$sql = "SELECT Id FROM admint WHERE  email = '$email' AND pass_word = '$password'";
$results = $conn->query($sql);
$count = $results -> rowCount();
if($count == 1){
    foreach ($results as $row){
        session_start();
        $_SESSION['Id'] = $row['Id'];
        Header('Location:register.php');
    }
}else {
    echo'<h2>Error: Invalid Login</h2>';
}
?>
