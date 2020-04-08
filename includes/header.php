<?php 

    header('Content-type: text/html; charset=iso-8859-1');
    require 'dbConnect.php';

    $sql = "SELECT * FROM `lijst`";
    $query = $conn->prepare($sql);
    $query->execute();

    $result = $query->fetchAll();

    $homePage = 'index.php';
    $currentPage = substr($_SERVER["REQUEST_URI"],strrpos($_SERVER["REQUEST_URI"],"/")+1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>ToDoList</title>
</head>
<body>

<div class="container lead">
<a class="<?php if($homePage == $currentPage || $currentPage == ''){?>d-none <?php }else{?>d-block<?php } ?> mt-4 mb-4 text-dark" href="../index.php"><i class="fas fa-undo fa-lg"></i></a>