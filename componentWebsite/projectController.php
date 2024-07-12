<?php
include_once './componentWebsite/projectModel.php';
class projectControllerTable
{
    public function getTableController()
    {
        try {
            $getTable = projectModelBD::getTableProjectPublic();

            if ($getTable) {
                foreach ($getTable as $key => $value) {
                    echo ' <tr>
                            <td>' . $value["nameProject"] . '</td>
                            <td>' . $value["descriptionProject"] . '</td>
                            <td><a href=' . $value["linkProject"] . ' target="_blank"> Click Here </a></td>
                            </tr>';
                }
            }
        } catch (\Throwable) {
            die('It was impossible to load data in the table');
        }
    }
}
