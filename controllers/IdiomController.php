<?php

require_once('../../models/Idioms.php');

class IdiomController
{
    function initConnectiondb(){


        $db_host = 'localhost';
        $db_port = '5432';
        $db_name = 'db_platform';
        $db_user =  'postgres';
        $db_password = 'admin';

        $my_connection = pg_connect("host=localhost port=5432 dbname=db_platform user=postgres password=admin");

        if($my_connection){
            echo "Se conectó a la base de datos";
            return $my_connection;
        }else{
            echo "No se conecta a la BD";
        }

    }

    function listIdiom() {
        $myposqgresql = $this->initConnectiondb();
        $serieList = pg_query($myposqgresql, "SELECT * FROM idiom");

        while ($obj = pg_fetch_object($serieList)) {
            echo $obj->id." - ".$obj->iso_code."<br />";
//            echo "id_idiom: $row[0]  iso_code: $row[1]";
//            echo "<br />\n";
        }

    }
}