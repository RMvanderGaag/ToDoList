<?php include '../includes/header.php';
$listId = $_GET['id'];

//haalt de lijst op met het meegestuurde id
$sql = "SELECT * FROM `lijst` WHERE id = :listId";
$query = $conn->prepare($sql);
$query->bindParam(":listId", $listId);
$query->execute();

$result = $query->fetch();

//haalt alle taken op met de bijbehorende lijst id
$sql2 = "SELECT * FROM `taak` WHERE listId = :listId";
$query2 = $conn->prepare($sql2);
$query2->bindParam(":listId", $listId);
$query2->execute();

$results = $query2->fetchAll();

session_start();
$_SESSION['id'] = $listId;

$conn = null;
?>


<h2 class="display-4"><?php echo $result['lijstNaam'] ?></h2>
<p class="lead">Taken</p>
<div>
<!-- filter knoppen -->
    <button class="btn" onclick="filterList('all')">Show all</button>
    <button class="btn" onclick="filterList('Bezig')">Bezig</button>
    <button class="btn" onclick="filterList('Afgerond')">Afgerond</button>
    <button class="btn" onclick="filterList('Niet begonnen')">Niet begonnen</button>
</div>
<table class="table table-striped lead">
    <thead>
        <th scope="col">Naam</th>
        <th scope="col">Beschrijving</th>
        <th scope="col">Status</th>
        <th scope="col">Duur(Minuten)</th>
        <th></th>
    </thead>
    <?php foreach ($results as $row){ ?>
    <tr class="tableRow <?php echo $row['taakStatus'] ?>">
        <td><?php echo $row['taakNaam']?></td>
        <td><?php echo $row['taakBeschrijving'] ?></td>
        <td><?php echo $row['taakStatus'] ?></td>
        <td><?php echo $row['taakDuur'] ?></td>
        <td>
            <a href="deleteTask.php?id=<?php echo $row['id'] ?>" class="btn btn-danger text-light float-right"><i class="fas fa-trash-alt"></i></a>
            <a href="editTask.php?id=<?php echo $row['id'] ?>" class="btn btn-warning text-light float-right"><i class="fas fa-edit"></i></a>
        </td>
    </tr>
    <?php } ?>
</table>
<a href="createTask.php?listId=<?php echo $result['id'] ?>" class="text-primary nav-link">Taak toevoegen +</a>



<?php include '../includes/footer.php'; ?>