<?php
require_once './bdconexion.php';

class projectModelBD extends conexionBD{
    private static function getTableProject(){
        try {
            $query = 'SELECT nameProject, descriptionProject, linkProject FROM tblproject';

            $queryBD = conexionBD::conexion()->prepare($query);

            $queryBD->execute();
            
            return $queryBD->fetchAll();
        
        } catch (\Throwable) {
            
        }
    }

    public static function getTableProjectPublic(){
        try {
            return $askModelGetTableProject = ProjectModelBD::getTableProject();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}
?>