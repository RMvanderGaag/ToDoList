<?php 
    include '../includes/dbConnect.php';
    
    $taskName = $_POST['taakNaam'];
    $listId = $_GET['listId'];
    
    $sql = "INSERT INTO `taak` SET taakNaam = :taskName, taakStatus = 'bezig', listId = :listId";
    $query = $conn->prepare($sql);
    $query->bindParam(":taskName", $taskName);
    $query->bindParam(":listId", $listId);
    $query->execute();

    header('location: ../openList.php?id='. $listId);

