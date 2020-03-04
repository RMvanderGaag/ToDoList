<?php
    include '../includes/dbConnect.php';

    $listId = $_GET['id'];
    $listName = $_POST['newName'];

    $stmt = "UPDATE `lijst` SET lijstNaam = :listName WHERE id = :listId";
    $query = $conn->prepare($stmt);
    $query->bindParam(':listId', $listId);
    $query->bindParam(':listName', $listName);
    $query->execute();

    header('location: ../index.php');