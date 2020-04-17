<?php
    //Connectie naar de database
    require '../includes/dbConnect.php';
    
    //Alle ingevoerde informatie die op de vorige pagina is ingevuld word in een variabele gestopt
    $listId = $_GET['id'];
    $listName = $_POST['newName'];

    //Voert een query uit om de lijst bij te werken
    $stmt = "UPDATE `lijst` SET lijstNaam = :listName WHERE id = :listId";
    $query = $conn->prepare($stmt);
    $query->bindParam(':listId', $listId);
    $query->bindParam(':listName', $listName);
    $query->execute();

    $conn = null;

    //Stuurt de gebruiker terug naar de hoofdpagina
    header('location: ../index.php');