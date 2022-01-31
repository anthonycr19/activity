<?php

require_once('../models/Series.php');

class SerieController
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
        }else{
            echo "No se conecta a la BD";
        }


    }


}