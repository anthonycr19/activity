<?php

require_once('../../models/Managers.php');

class ManagerController
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

    function listManager(){

        $myposqgresql = $this->initConnectiondb();
        $managerList = pg_query($myposqgresql, "SELECT * FROM manager");

        $managerObjectArray = [];

        while ($obj = pg_fetch_object($managerList)){
            $managerObject = new manager($obj->id_manager, $obj->name_manager,$obj->last_name_manager, $obj->birthday, $obj->nationality);
            array_push($managerObjectArray, $managerObject);
        }

        return $managerObjectArray;
    }

    function storeManager($nameManager, $lastNameManager, $birthday, $nationality){
        $myposqgresql = $this->initConnectiondb();

        $managerCreated = false;

        if($resultadoInsert = pg_query($myposqgresql, "INSERT INTO manager (name_manager, last_name_manager, birthday, nationality) VALUES ('$nameManager', '$lastNameManager', '$birthday', '$nationality')")){
            $managerCreated = true;
        }

        return $managerCreated;
    }


    function getManagerData($idmanager){
        $myposqgresql = $this->initConnectiondb();

        $managerData = pg_query($myposqgresql, "SELECT * FROM manager WHERE id_manager='$idmanager'");
        $managerObject = null;

        while ($obj = pg_fetch_object($managerData)){
            $managerObject = new manager($obj->id_manager, $obj->name_manager, $obj->last_name_manager, $obj->birthday, $obj->nationality);
            break;
        }
        return $managerObject;
    }

    function updateManager($managerIid, $managerName, $managerLastName, $managerBirthday, $managerNationality){

        $myposqgresql = $this->initConnectiondb();
        $managerEdited = false;

        if($resultadoUpdate = pg_query($myposqgresql, "UPDATE manager set name_manager ='$managerName', last_name_manager = '$managerLastName', birthday = '$managerBirthday', nationality = '$managerNationality' where id_manager = $managerIid")){
            $managerEdited = true;
        }

        return $managerEdited;
    }

    function deleteManager($managerId){
        $myposqgresql = $this->initConnectiondb();

        $managerDeleted = false;

        if($resultado = pg_query($myposqgresql, "DELETE FROM manager where id_manager = '$managerId'")){
            $managerDeleted = true;
        }

        return $managerDeleted;
    }
}