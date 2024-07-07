<div class="container-md">

    <h1 class="display-1 text-center">project</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">link</th>
            </tr>
        </thead>
        <tbody>';

            <?php
            include_once './componentWebsite/projectController.php';
            $projects = new projectControllerTable();
            $projects->getTableController();
            ?>

        </tbody>
    </table>
</div>