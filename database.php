<?php
try{
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Rahul200514873;','Rahul200514873','G3MPwhtGQW');
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo'Connection Unsuccessfull' . $e->getMessage();
}
?>

