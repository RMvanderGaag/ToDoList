<?php
    //Connectie naar de database
    require '../includes/dbConnect.php';

    //Haalt het ID op van de lijst doormiddel van een GET
    $taskId = $_GET['id'];
    
    //Er word een 'session_start()' gedaan om de sessie te starten en de sessie functie te kunnen uitvoeren
    session_start();
    //In de aangemaakte sessie zit het id van de bijbehorende lijst. Die word in een variabele gestopt
    $listId = $_SESSION['id'];

    //Met de query word de taak verwijderd
    $stmt = "DELETE FROM `taak` WHERE id = :taskId";
    $query = $conn->prepare($stmt);
    $query->bindParam(":taskId", $taskId);
    $query->execute();

    //De gebruiker word terug gestuurd naar het overzicht van taken
    header('location: ../View/openList.php?id='. $listId);