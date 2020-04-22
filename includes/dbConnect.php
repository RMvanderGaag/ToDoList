<?php
    //Zet de benodigheden om inteloggen in de database in variabelen
    $servername = "localhost";
    $username = "root";
    $password = ""; //GEEN WW VOOR WAMPSERVER (TYPE 'mysql' VOOR AMPPS)
    $myDB = "todolist";

    try{
        //Voert een connectie uit naar de database met de ingevulde variabelen
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        //Als de connecite is gefaald, dan krijgt die een error
        echo "NIET GELUKT " . $e->getMessage();
    }