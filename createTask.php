<?php 
    include 'includes/header.php' ;

    $listId = $_GET['listId'];

?>

    <h2 class="display-4">Nieuwe taak aanmaken</h2>
    <form action="dbHandling/addTask.php?listId=<?php echo $listId ?>"  method="POST">
        <div class="form-group">
            <label for="taskName">taak naam</label>
            <input type="text" class="form-control" name="taakNaam">
        </div>
        <input type="submit" class="btn btn-primary" value='Aanmaken'></input>
    </form>

<?php include 'includes/footer.php'?>