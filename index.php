<?php include 'includes/header.php' ?>
    <h2 class="mt-3 display-4">To-Do List</h2>
        <table class="table table-striped lead">
            <thead>
                <th scope="col">Naam</th>
                <th></th>
            </thead>
            <?php foreach ($result as $row){ ?>
            <tr>
                <td><?php echo $row['lijstNaam']?></td>
                <td class="float-right">
                    <a href="editList.php?id=<?php echo $row['id'] ?>" class="btn btn-warning text-light"><i class="fas fa-edit"></i></a>
                    <a href="deleteList.php?id=<?php echo $row['id'] ?>" class="btn btn-danger text-light"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <a href="createList.php" class="text-primary nav-link">Nieuwe lijst aanmaken +</a>
<?php include 'includes/footer.php' ?>
