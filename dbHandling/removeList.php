<?php
    //Maakt een connectie met de database
    require '../includes/dbConnect.php';

    //Haalt het ID op van de lijst doormiddel van een GET
    $listId = $_GET['id'];
    
    //Voert een query uit dat de lijst met hetzelfde id wat word meegestuurd verwijderd word
    $stmt = "DELETE FROM `lijst` WHERE id = :listId";
    $query = $conn->prepare($stmt);
    $query->bindParam(":listId", $listId);
    $query->execute();

    //Ook alle taken die bij de lijst horen worden verwijderd doormiddel van deze query
    $stmt1 = "DELETE FROM `taak` WHERE listId = :listId";
    $query1 = $conn->prepare($stmt1);
    $query1->bindParam(":listId", $listId);
    $query1->execute();

    $conn = null;

    //De gebruiker word terug gestuurd naar de hoofdPagina
    header('location: ../index.php');