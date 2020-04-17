<?php include '../includes/header.php'; 

$taskId = $_GET['id'];

//haalt de taak op met het meegestuurde id
$sql = "SELECT * FROM `taak` WHERE id = :taskId";
$query = $conn->prepare($sql);
$query->bindParam(":taskId", $taskId);
$query->execute();

$result = $query->fetch();

?>


<h2 class="display-4">Delete list</h2>
<p>Weet je zeker dat je de taak <strong><?php echo $result['taakNaam'] ?></strong> wilt verwijderen</p>
<a href="../dbHandling/removeTask.php?id=<?php echo $taskId ?>" class="btn btn-danger text-white">Delete</a>


<?php include '../includes/footer.php'; ?>