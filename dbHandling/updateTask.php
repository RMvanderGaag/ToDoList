<?php
    //Maakt een connectie naar de database
    require '../includes/dbConnect.php';

    //Alle ingevoerde informatie die op de vorige pagina is ingevuld word in een variabele gestopt
    $taskId = $_GET['id'];
    $taskName = $_POST['newName'];
    $taakBeschrijving = $_POST['taakBeschrijving'];
    $status = $_POST['statusSelect'];
    $taakDuur = $_POST['taakDuur'];
    
    //Er word een 'session_start()' gedaan om de sessie te starten en de sessie functie te kunnen uitvoeren
    session_start();
    //In de aangemaakte sessie zit het id van de bijbehorende lijst. Die word in een variabele gestopt
    $listId = $_SESSION['id'];

    //Er word een query uitgevoerd om de taken bij te werken
    $stmt = "UPDATE `taak` SET taakNaam = :taskName, taakBeschrijving = :taakBeschrijving, taakStatus = :status, taakDuur = :taakDuur WHERE id = :taskId";
    $query = $conn->prepare($stmt);
    $query->bindParam(':taskId', $taskId);
    $query->bindParam(':taskName', $taskName);
    $query->bindParam(':taakBeschrijving', $taakBeschrijving);
    $query->bindParam(':status', $status);
    $query->bindParam(':taakDuur', $taakDuur);
    $query->execute();

    $conn = null;

    //Stuurt de gebruiker terug naar de overzicht van taken
    header('location: ../View/openList.php?id='. $listId);