<?php include 'includes/header.php' ?>

    <h2 class="display-4">Nieuwe lijst aanmaken</h2>
    <form action="dbHandling/addList.php"  method="POST">
        <div class="form-group">
            <label for="listName">Lijst naam</label>
            <input type="text" class="form-control" name="lijstNaam">
        </div>
        <input type="submit" class="btn btn-primary" value='Aanmaken'></input>
    </form>

<?php include 'includes/footer.php'?>