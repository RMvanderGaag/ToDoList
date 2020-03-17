<?php include 'includes/header.php' ?>
    <h2 class="mt-3 display-4">To-Do List</h2>
        <table class="table table-striped lead">
            <thead>
                <th scope="col">Naam</th>
                <th></th>
            </thead>
            <?php foreach ($result as $row){ ?>
            <tr class="clickableRow">
                <td><?php echo $row['lijstNaam']?></td>
                <td class="">
                    <a href="View/deleteList.php?id=<?php echo $row['id'] ?>" class="btn btn-danger text-light float-right"><i class="fas fa-trash-alt"></i></a>
                    <a href="View/editList.php?id=<?php echo $row['id'] ?>" class="btn btn-warning text-light float-right"><i class="fas fa-edit"></i></a>
                    <a href="View/openList.php?id=<?php echo $row['id'] ?>" class="btn btn-success text-light float-right"><i class="far fa-folder"></i></a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <a href="View/createList.php" class="text-primary nav-link">Nieuwe lijst aanmaken +</a>
<?php include 'includes/footer.php' ?>
