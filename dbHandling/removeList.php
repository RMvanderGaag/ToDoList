<?php
    include '../includes/dbConnect.php';

    $listId = $_GET['id'];

    $stmt = "DELETE FROM `lijst` WHERE id = :listId";
    $query = $conn->prepare($stmt);
    $query->bindParam(":listId", $listId);
    $query->execute();

    header('location: ../index.php');