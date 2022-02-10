<?php
require_once('../../controllers/ActorController.php')

?>

<h1>Eliminación de Actor</h1>

<div>
    <?php
    $idActor = $_POST['actorId'];
    $actor = new actorController;
    $actorDeleted = $actor->deleteactor($idActor);


    if($actorDeleted) {
        ?>
        <div>
            <div>
                El actor ha sido eliminado correctamente.<br><a href="list.php">Volver al listado de actores</a>

            </div>
        </div>

        <?php

    }else{
        ?>
        <div>
            <div>
                El actor no se ha borrado correctamente. <br> <a href="list.php">Volver a intentarlo</a>
            </div>
        </div>
        <?php
    }
    ?>
</div>