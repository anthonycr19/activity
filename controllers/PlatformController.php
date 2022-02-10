<?php

require_once('../../models/Platforms.php');

class PlatformController
{
    function initConnectiondb(){

        $my_connection = pg_connect("host=localhost port=5432 dbname=db_platform user=postgres password=admin");

        if($my_connection){
            echo "Se conectó a la base de datos";
            return $my_connection;
        }else{
            echo "No se conecta a la BD";
        }
    }

    function listPlatform(){

        $myposqgresql = $this->initConnectiondb();
        $platformList = pg_query($myposqgresql, "SELECT * FROM platform");

        $platformObjectArray = [];

        /*while ($obj = pg_fetch_object($serieList)) {
            echo $obj->id_platform." - ".$obj->iso_code."<br />";
        }*/

        while ($obj = pg_fetch_object($platformList)){
            $platformObject = new platform($obj->id_platform, $obj->name_platform);
            array_push($platformObjectArray, $platformObject);

        }

        return $platformObjectArray;
    }

    function storePlatform($namePlatform){
        $myposqgresql = $this->initConnectiondb();

        $platformCreated = false;

        if($resultadoInsert = pg_query($myposqgresql, "INSERT INTO platform (name_platform) VALUES ('$namePlatform')")){
            $platformCreated = true;
        }
        return $platformCreated;
    }


    function getPlatformData($idPlatform){
        $myposqgresql = $this->initConnectiondb();

        $platformData = pg_query($myposqgresql, "SELECT * FROM platform WHERE id_platform='$idPlatform'");
        $platformObject = null;

        while ($obj = pg_fetch_object($platformData)){
            $platformObject = new platform($obj->id_platform, $obj->name_platform);
            break;
        }
        return $platformObject;
    }

    function updatePlatform($platformId, $platformName){

        $myposqgresql = $this->initConnectiondb();
        $platformEdited = false;

        if($resultadoUpdate = pg_query($myposqgresql, "UPDATE platform set name_platform = '$platformName' where id_platform = '$platformId'")){
            $platformEdited = true;
        }

        return $platformEdited;
    }

    function deletePlatform($platformId){
        $myposqgresql = $this->initConnectiondb();

        $platformDeleted = false;

        if($resultado = pg_query($myposqgresql, "DELETE FROM platform where id_platform = '$platformId'")){
            $platformDeleted = true;
        }

        return $platformDeleted;
    }
}