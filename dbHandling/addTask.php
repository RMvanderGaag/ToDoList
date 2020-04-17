<?php 
    //Maakt een connectie naar de database
    require '../includes/dbConnect.php';
    
    //Alle ingevoerde informatie die op de vorige pagina is ingevuld word in een variabele gestopt
    $taskName = $_POST['taakNaam'];
    $listId = $_GET['listId'];
    $taakDuur = $_POST['taakDuur'];
    
    $sql = "INSERT INTO `taak` SET taakNaam = :taskName, taakStatus = 'Niet begonnen', taakDuur = :taakDuur, listId = :listId";
    $taakBeschrijving = $_POST['taakBeschrijving'];
    
    //Er word een query gemaakt die de variabelen in de database zet
    $sql = "INSERT INTO `taak` SET taakNaam = :taskName, taakBeschrijving = :taakBeschrijving, taakStatus = 'Niet begonnen', taakDuur = :taakDuur, listId = :listId";
    $query = $conn->prepare($sql);
    $query->bindParam(":taskName", $taskName);
    $query->bindParam(":listId", $listId);
    $query->bindParam(":taakDuur", $taakDuur);
    $query->bindParam(":taakBeschrijving", $taakBeschrijving);
    $query->execute();

    $conn = null;

    //Stuurt de gebruiker terug naar de pagina met alle taken erin
    header('location: ../View/openList.php?id='. $listId);

