<?php

require_once('../../models/Actors.php');

class ActorController
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

    function listActor(){

        $myposqgresql = $this->initConnectiondb();
        $actorList = pg_query($myposqgresql, "SELECT * FROM actor");

        $actorObjectArray = [];

        while ($obj = pg_fetch_object($actorList)){
            $actorObject = new actor($obj->id_actor, $obj->name_actor,$obj->last_name_actor, $obj->birthday, $obj->nationality);
            array_push($actorObjectArray, $actorObject);
        }

        return $actorObjectArray;
    }

    function storeActor($nameActor, $lastNameActor, $birthday, $nationality){
        $myposqgresql = $this->initConnectiondb();

        $actorCreated = false;

        if($resultadoInsert = pg_query($myposqgresql, "INSERT INTO actor (name_actor, last_name_actor, birthday, nationality) VALUES ('$nameActor', '$lastNameActor', '$birthday', '$nationality')")){
            $actorCreated = true;
        }

        return $actorCreated;
    }


    function getActorData($idActor){
        $myposqgresql = $this->initConnectiondb();

        $actorData = pg_query($myposqgresql, "SELECT * FROM actor WHERE id_actor='$idActor'");
        $actorObject = null;

        while ($obj = pg_fetch_object($actorData)){
            $actorObject = new actor($obj->id_actor, $obj->name_actor, $obj->last_name_actor, $obj->birthday, $obj->nationality);
            break;
        }
        return $actorObject;
    }

    function updateActor($actorIid, $actorName, $actorLastName, $actorBirthday, $actorNationality){

        $myposqgresql = $this->initConnectiondb();
        $actorEdited = false;

        if($resultadoUpdate = pg_query($myposqgresql, "UPDATE actor set name_actor ='$actorName', last_name_actor = '$actorLastName', birthday = '$actorBirthday', nationality = '$actorNationality' where id_actor = $actorIid")){
            $actorEdited = true;
        }

        return $actorEdited;
    }

    function deleteActor($actorId){
        $myposqgresql = $this->initConnectiondb();

        $actorDeleted = false;

        if($resultado = pg_query($myposqgresql, "DELETE FROM actor where id_actor = '$actorId'")){
            $actorDeleted = true;
        }

        return $actorDeleted;
    }
}