<?php
error_reporting(0);
    class conexionBD{

        private function conexionBDmySQL() {
            //in this case the conexion using is with value in local using a settings.ini like document with variables conexion, you can chage with credential with your server usually need to use a .env doc
            $_SETTINGS = parse_ini_file('./settings.ini', true);
            // $server="localhost";
            // $user = "root";
            // $pass = "";
            // $bd = "dbportfolio";
            try {     
                // this is the conexion to the bd, in this case I used PDO.
                $bd = new PDO("mysql:hostname={$_SETTINGS['db']['host']};dbname={$_SETTINGS['db']['name']}", $_SETTINGS['db']['user'], $_SETTINGS['db']['pass']);
                
                //this is an other connection form using diferent 
                //$bd = new PDO("mysql:hostname=.$server.;dbname=".$bd, $user, $pass);

                $bd -> exec("set names utf8");
                return $bd;
            } catch (\Throwable) {
                die('If you see this message, send email to joedoe@example.com');
            }
        }
        // This is a public method that we can used to connect with other part of the project
        public static function conexion()
        {
            try {   
                $cn = new conexionBD();
                return $cn->conexionBDmySQL();
            } catch (Throwable) {
                die("Error en la conexion");
            } 
        }

    }
?>