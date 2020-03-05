<?php include 'includes/header.php'; 

$taskId = $_GET['id'];

$sql = "SELECT * FROM `taak` WHERE id = :taskId";
$query = $conn->prepare($sql);
$query->bindParam(":taskId", $taskId);
$query->execute();

$result = $query->fetch();

?>


<h2 class="display-4">Taak bewerken</h2>

<form action="dbHandling/updateTask.php?id=<?php echo $result['id'] ?>" method="post">
    <div class="form-group">
        <label for="">Geef een niewe naam aan de taak</label>
        <input type="text" class="form-control" name="newName" value="<?php echo $result['taakNaam'] ?>">
        <label for="">Status</label>
        <select class="form-control" name="statusSelect" id="">
            <option <?php if($result['taakStatus'] == 'Bezig'){ echo 'selected'; } ?> value="Bezig">Bezig</option>
            <option <?php if($result['taakStatus'] == 'Afgerond'){ echo 'selected'; } ?> value="Afgerond">Afgerond</option>
            <option <?php if($result['taakStatus'] == 'Niet begonnen'){ echo 'selected'; } ?> value="Niet begonnen">Niet begonnen</option>
        </select>
    </div>
    <input type="submit" class="btn btn-success" value="Bewerken">
</form>


<?php include 'includes/footer.php'; ?>