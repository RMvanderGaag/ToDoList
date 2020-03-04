<?php include 'includes/header.php'; 

$listId = $_GET['id'];

$sql = "SELECT * FROM `lijst` WHERE id = :listId";
$query = $conn->prepare($sql);
$query->bindParam(":listId", $listId);
$query->execute();

$result = $query->fetch();

?>


<h2 class="display-4">Lijst bewerken</h2>

<form action="dbHandling/updateList.php?id=<?php echo $result['id'] ?>" method="post">
    <div class="form-group">
        <label for="">Geef een niewe naam aan de lijst</label>
        <input type="text" class="form-control" name="newName" value="<?php echo $result['lijstNaam'] ?>">
    </div>
    <input type="submit" class="btn btn-success" value="Bewerken">
</form>


<?php include 'includes/footer.php'; ?>