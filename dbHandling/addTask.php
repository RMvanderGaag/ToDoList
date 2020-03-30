<?php 
    include '../includes/dbConnect.php';
    
    $taskName = $_POST['taakNaam'];
    $listId = $_GET['listId'];
    $taakDuur = $_POST['taakDuur'];
    
    $sql = "INSERT INTO `taak` SET taakNaam = :taskName, taakStatus = 'Niet begonnen', taakDuur = :taakDuur, listId = :listId";
    $query = $conn->prepare($sql);
    $query->bindParam(":taskName", $taskName);
    $query->bindParam(":listId", $listId);
    $query->bindParam(":taakDuur", $taakDuur);
    $query->execute();

    header('location: ../openList.php?id='. $listId);

