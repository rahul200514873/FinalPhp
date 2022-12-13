<?php
require 'database.php';
$title = "Edit";
$description = "This page will contain your Edit page";
$editId = $_GET['editId'];
if(isset($_POST['update'])) {
    $firstName = $_POST['ufirstName'];
    $lastName = $_POST['ulastName'];
    $email = $_POST['uemail'];
    $Id = $_POST['Id'];

    $sql = "UPDATE admint SET firstName = '$firstName', lastName = '$lastName', email = '$email' WHERE Id = '$Id'";
    $conn->exec($sql);
    $conn = null;
    header( 'location:register.php');

}
require './templates/header.php';
?>
    <main class ="editcss">
        <div>
            <form class="editform" action="registeredit.php" method="post">
                    <input type="text"  name="ufirstName"  required="" placeholder="Change First Name">
                    <input type="text"  name="ulastName"  required="" placeholder="Change Last Name">
                    <input type="email"  name="uemail"  required="" placeholder="Change Email">             
                    <input type="hidden" name="Id" value="<?php echo $editId; ?>">
                    <input class="btnedit" type="submit" name="update" value="Change">
            </form>
        </div>
    </main>
<?php
require './templates/footer.php'
?>
