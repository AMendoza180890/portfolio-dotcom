<?php
require_once './componentWebsite/bdconexion.php';
class projectModelBD extends conexionBD{

    private static function getTableProject(){
        try {
            $query = 'SELECT nameProject, descriptionProject, linkProject FROM tblproject';
            $queryBD = conexionBD::conexion()->prepare($query);
            $queryBD->execute();
            return $queryBD->fetchAll();
        
        } catch (\Throwable) {
            die('Error con la consultar los datos, modelo');
        }
    }

    public static function getTableProjectPublic(){
        try {
            $askModelGetTableProject = ProjectModelBD::getTableProject();
            return $askModelGetTableProject;
        } catch (\Throwable $th) {
            //throw $th;
            die('error consultar datos, getTablePublic');
        }
    }

}
?>