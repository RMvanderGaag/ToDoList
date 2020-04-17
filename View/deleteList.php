<?php include '../includes/header.php'; 
$listId = $_GET['id'];

//Haalt een lijst op met het meegstuurde id
$sql = "SELECT * FROM `lijst` WHERE id = :listId";
$query = $conn->prepare($sql);
$query->bindParam(":listId", $listId);
$query->execute();

$result = $query->fetch();

?>

<!-- Voordat de lijst verwijderd ziet de gebruiker welke lijst er verwijderd gaat worden -->
<h2 class="display-4">Delete list</h2>
<p>Weet je zeker dat je de lijst <b><?php echo $result['lijstNaam'] ?></b> wilt verwijderen</p>
<a href="../dbHandling/removeList.php?id=<?php echo $listId ?>" class="btn btn-danger text-white">Delete</a>


<?php include '../includes/footer.php'; ?>