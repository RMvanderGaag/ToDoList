<?php include 'includes/header.php'; 

$listId = $_GET['id'];

session_start();
$_SESSION['id'] = $listId;

$sql = "SELECT * FROM `lijst` WHERE id = :listId";
$query = $conn->prepare($sql);
$query->bindParam(":listId", $listId);
$query->execute();

$result = $query->fetch();

$sql2 = "SELECT * FROM `taak` WHERE listId = :listId";
$query2 = $conn->prepare($sql2);
$query2->bindParam(":listId", $listId);
$query2->execute();

$results = $query2->fetchAll();

?>


<h2 class="display-4"><?php echo $result['lijstNaam'] ?></h2>
<p class="lead">Taken</p>
<table class="table table-striped lead">
    <thead>
        <th scope="col">Naam</th>
        <th scope="col"><span onclick="sortTable('Status')">Status</span></th>
        <th scope="cole"><span onclick="sortTable('Status')">Tijd</span></th>
        <th></th>
    </thead>
    <?php foreach ($results as $row){ ?>
    <tr class="clickableRow">
        <td><?php echo $row['taakNaam']?></td>
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



<?php include 'includes/footer.php'; ?>