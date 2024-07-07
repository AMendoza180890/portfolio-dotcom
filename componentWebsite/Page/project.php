<h1 class="display-1 text-center">project</h1>

<?php
    require_once './componentWebsite/projectController.php';
    $projects = new projectControllerTable();
    $projects -> getTableController();
?>