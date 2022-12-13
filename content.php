<?php
require 'database.php';
$title = "Content";
$description = "This is the description for Content page";
require ('./templates/header.php');
if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    session_start();
    if (!isset($_SESSION['Id'])) {
        header('location:login.php');
        exit();
    } else {
        $deleteId = $_GET['deleteId'];
        $sql = "DELETE FROM data1 WHERE Id = '$deleteId'";
        $conn->exec($sql);
    }
}
?>
<main class="contentMain">
    <section class="contentSection">
        <div>
            <form method="post" action="savecontent.php">
                <input  name="firstName" type="text" placeholder="Enter First Name" required/>
                <input  name="lastName" type="text" placeholder="Enter Last Name" required />
                <input  name="age" type="text" placeholder="age" required />
                <input class="contentDiv1" type="submit" name="submit" value="Insert" />
            </form>
        </div>
        <div>
            <?php

            $sql = "SELECT * FROM data1";
            $result = $conn->query($sql);
            echo '<section>
                  <table>
                    <tr>
                        <th>First-Name</th>
                        <th>Last-Name</th>
                        <th>Age</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>';
                    foreach ($result as $row) {
                     ?>
                        <tr>
                            <td><?php echo $row['firstName'] ?></td>
                            <td><?php echo $row['lastName'] ?></td>
                            <td><?php echo $row['age'] ?></td>
                            <td>
                                <a  href="contentedit.php?editId=<?php echo $row['Id'] ?>">Edit
                                </a></td>
                            <td>
                                <a  href="content.php?deleteId=<?php echo $row['Id'] ?>" >Delete
                                </a>
                            </td>
                        </tr>
                    <?php }
                    echo '</table>
                <button class="contentDiv2"><a class ="colorbt" href="logout.php"Logout</a>Logout</button>
                </section>';
            $conn = null;
            ?>
        </div>
    </section>
</main>
<?php
 require ('./templates/footer.php'); 
 ?>