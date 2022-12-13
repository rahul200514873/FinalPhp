<?php
require 'database.php';
$title = "Edit Content";
$description = "This is the Description for Content page";
require './templates/header.php';
$editId = $editId = $_GET['editId'];
if(isset($_POST['update'])) {
    $firstName = $_POST['ufirstName'];
    $lastName = $_POST['ulastName'];
    $age = $_POST['uage'];
    $Id = $_POST['Id'];
    session_start();
    if (!isset($_SESSION['Id'])) {
        header('location:login.php');
        exit();
    } else {
        $sql = "UPDATE data1 SET firstName = '$firstName', lastName = '$lastName', age = '$age' WHERE Id = '$Id'";
        $conn->exec($sql);
        $conn = null;
        header('location:content.php');

    }
}
?>
    <main>
        <div>
            <form class="editform" action="contentedit.php" method="POST">
                <h2>You need to be logged in to edit </h2>
                    <input type="text"  name="ufirstName" placeholder="First Name"  required="">     
                    <input type="text"  name="ulastName" placeholder="Last Name"  required="">
                    <input type="text"  name="uage" placeholder="Age"  required="">
                    <input type="hidden" name="Id" value="<?php echo $editId; ?>">
                    <input type="submit" name="update"  value="Change">
            </form>
        </div>
    </main>
<?php
require './templates/footer.php'
?>
