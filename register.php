<?php
require 'database.php';
$title = "Register";
$description = "This is the description of the Register page";
require ('./templates/header.php');

if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];
    $sql = "DELETE FROM admint WHERE Id = '$deleteId'";
    $conn->exec($sql);
}
?>
<main class="registerMain">
<?php
session_start();
if(!isset($_SESSION['Id'])){
    header('location:login.php');
    exit();
}else {
      $sql = "SELECT * FROM admint";
      $result = $conn->query($sql);
      echo '<section>
                    <table>
                            <tr>
                                <th>Id</th>
                                <th>First_Name</th>
                                <th>Last_Name</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>';
      foreach ($result as $row) {
          ?>
          <tr>
              <td><?php echo $row['Id'] ?></td>
              <td><?php echo $row['firstName'] ?></td>
              <td><?php echo $row['lastName'] ?></td>
              <td><?php echo $row['email'] ?></td>
              <td>
                  <a href="registeredit.php?editId=<?php echo $row['Id'] ?>">Edit
                  </a></td>
              <td>
                  <a href="register.php?deleteId=<?php echo $row['Id'] ?>" >Delete
                      </a>
              </td>
          </tr>
      <?php }
      echo '</table>
</section>
</main>';
require './templates/footer.php';
}?>
