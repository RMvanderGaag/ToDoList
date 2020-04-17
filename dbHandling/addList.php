<?php 
    //Maakt een connectie naar de database
    require '../includes/dbConnect.php';
    
    //Krijgt de lijstNaam van het eerder ingevoerde form en stopt het in een variabele
    $listName = $_POST['lijstNaam'];
    
    //Maakt een query aan die de ingevoerde lijstnaam in de database opslaad
    $sql = "INSERT INTO `lijst` SET lijstNaam = :listName";
    $query = $conn->prepare($sql);
    $query->bindParam(":listName", $listName);
    $query->execute();

    $conn = null;

    //Stuurt de gebruiker terug naar de hoofdpagina
    header('location: ../index.php');

