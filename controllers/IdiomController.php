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

        while ($obj = pg_fetch_object($idiomList)){
            $idiomObject = new Idiom($obj->id_idiom, $obj->iso_code,$obj->name_idiom);
            array_push($idiomObjectArray, $idiomObject);

        }

        return $idiomObjectArray;
    }

    function storeIdiom($isoIdiom, $nameIdiom){
        $myposqgresql = $this->initConnectiondb();

        $idiomCreated = false;

        if($resultadoInsert = pg_query($myposqgresql, "INSERT INTO idiom (iso_code, name_idiom) VALUES ('$isoIdiom', '$nameIdiom')")){
            $idiomCreated = true;
        }

        return $idiomCreated;
    }


    function getIdiomData($idIdiom){
        $myposqgresql = $this->initConnectiondb();

        $idiomData = pg_query($myposqgresql, "SELECT * FROM idiom WHERE id_idiom='$idIdiom'");
        $idiomObject = null;

        while ($obj = pg_fetch_object($idiomData)){
            $idiomObject = new Idiom($obj->id_idiom, $obj->iso_code, $obj->name_idiom);
            break;
        }
        return $idiomObject;
    }

    function updateIdiom($idiomIid, $idiomIsoCode, $idiomName){

        $myposqgresql = $this->initConnectiondb();
        $idiomEdited = false;

        if($resultadoUpdate = pg_query($myposqgresql, "UPDATE idiom set iso_code ='$idiomIsoCode', name_idiom = '$idiomName' where id_idiom = $idiomIid")){
            $idiomEdited = true;
        }

        return $idiomEdited;
    }

    function deleteIdiom($idiomId){
        $myposqgresql = $this->initConnectiondb();

        $idiomDeleted = false;

        if($resultado = pg_query($myposqgresql, "DELETE FROM idiom where id_idiom = '$idiomId'")){
            $idiomDeleted = true;
        }

        return $idiomDeleted;

    }
}