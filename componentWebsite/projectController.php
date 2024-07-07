<?php
//require_once './projectModel.php';

class projectControllerTable{
    public static function getTableController(){
        try {
            $getTable = projectModelBD::getTableProjectPublic();

            if ($getTable) {
                echo '<table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">link</th>
                            </tr>
                        </thead>
                        <tbody>';
                         foreach ($getTable as $key => $value) {
                           echo ' <tr>
                            <td>'.$value["nameProject"].'</td>
                            <td>'.$value["descriptionProject"].'</td>
                            <td><a href='.$value["linkProject"].'> Click Here </a></td>
                            </tr>';
                         }
                        echo '</tbody>
                    </table>';
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
?>