<?php
    include '../includes/dbConnect.php';

    $listId = $_GET['id'];
    

    $stmt = "DELETE FROM `lijst` WHERE id = :listId";
    $query = $conn->prepare($stmt);
    $query->bindParam(":listId", $listId);
    $query->execute();

    $stmt1 = "DELETE FROM `taak` WHERE listId = :listId";
    $query1 = $conn->prepare($stmt1);
    $query1->bindParam(":listId", $listId);
    $query1->execute();



    header('location: ../index.php');