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

    function listIdiom(){


        $myposqgresql = $this->initConnectiondb();
        $idiomList = pg_query($myposqgresql, "SELECT * FROM idiom");

        $idiomObjectArray = [];

        /*while ($obj = pg_fetch_object($serieList)) {
            echo $obj->id_idiom." - ".$obj->iso_code."<br />";
        }*/

        foreach ($idiomList as $idiomItem ){
            $idiomObject = new Idiom($idiomItem['id_idiom'], $idiomItem['iso_code']);
            array_push($idiomObjectArray, $idiomObject);
        }

        return $idiomObjectArray;
    }
}