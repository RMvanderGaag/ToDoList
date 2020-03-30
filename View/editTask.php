<?php include '../includes/header.php'; 

$statusArray = ['Bezig', 'Afgerond', 'Niet begonnen'];

$taskId = $_GET['id'];

$sql = "SELECT * FROM `taak` WHERE id = :taskId";
$query = $conn->prepare($sql);
$query->bindParam(":taskId", $taskId);
$query->execute();

$result = $query->fetch();
<<<<<<< HEAD:editTask.php


=======
>>>>>>> a0148ae6ca42c4e1c423d6f37baa86aa58e72bc4:View/editTask.php
?>

<h2 class="display-4">Taak bewerken</h2>

<form action="../dbHandling/updateTask.php?id=<?php echo $result['id'] ?>" method="post">
    <div class="form-group">
        <label for="">Geef een niewe naam aan de taak</label>
        <input type="text" class="form-control" name="newName" value="<?php echo $result['taakNaam'] ?>">
        <label for="">Taak beschrijving</label>
        <textarea class="form-control" name="taakBeschrijving" id="" cols="30" rows="10"><?php echo $result['taakBeschrijving'] ?></textarea>
        <label for="">Status</label>
        <select class="form-control" name="statusSelect" id="">
            <?php for($i = 0; $i < count($statusArray); $i++){ ?> 
            <option <?php if($result['taakStatus'] == $statusArray[$i]){ echo 'selected'; } ?> value="<?php echo $statusArray[$i] ?>"><?php echo $statusArray[$i] ?></option>
            <?php }  ?>
        </select>
        <label for="">Tijd(in minuten)</label>
        <input type="number" class="form-control" name="taakDuur" value="<?php echo $result['taakDuur'] ?>">
    </div>
    <input type="submit" class="btn btn-success" value="Bewerken">
</form>


<?php include '../includes/footer.php'; ?>