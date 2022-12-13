<?php
require 'database.php';
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
require './templates/header.php';

if(true){
    $password = hash('sha512', $password);
    $sql = "INSERT INTO admint (firstName, lastName, email, pass_word) VALUES ('$firstName', '$lastName', '$email', '$password');";
    $conn->exec($sql);
    $conn = null;
}
?>
<main>
    <section>
        <div>
            <a href ="login.php">Click here to sign In </a>
        </div>
    </section>
</main>
<?php require './templates/footer.php';?>


