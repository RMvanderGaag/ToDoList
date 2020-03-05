<?php
    include '../includes/dbConnect.php';

    $taskId = $_GET['id'];
    
    session_start();
    $listId = $_SESSION['id'];

    $stmt = "DELETE FROM `taak` WHERE id = :taskId";
    $query = $conn->prepare($stmt);
    $query->bindParam(":taskId", $taskId);
    $query->execute();

    header('location: ../openList.php?id='. $listId);