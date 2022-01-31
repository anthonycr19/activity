<?php

$myPDO = pg_connect("host=localhost port=5432 dbname=db_platform user=postgres password=admin");

if($myPDO){
    echo "Se conectó a la base de datos";
}else{
    echo "No se conecta a la BD";
}

?>