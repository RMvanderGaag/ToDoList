<?php
    include '../includes/dbConnect.php';

    $taskId = $_GET['id'];
    $taskName = $_POST['newName'];
    $status = $_POST['statusSelect'];

    session_start();
    $listId = $_SESSION['id'];

    $stmt = "UPDATE `taak` SET taakNaam = :taskName, taakStatus = :status WHERE id = :taskId";
    $query = $conn->prepare($stmt);
    $query->bindParam(':taskId', $taskId);
    $query->bindParam(':taskName', $taskName);
    $query->bindParam(':status', $status);
    $query->execute();

    header('location: ../openList.php?id='. $listId);