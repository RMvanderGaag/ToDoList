<?php 
    include '../includes/dbConnect.php';
    
    $listName = $_POST['lijstNaam'];
    
    $sql = "INSERT INTO `lijst` SET lijstNaam = :listName";
    $query = $conn->prepare($sql);
    $query->bindParam(":listName", $listName);
    $query->execute();

    header('location: ../index.php');

