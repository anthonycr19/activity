<?php
require_once('../../controllers/ManagerController.php')

?>

<h1>Eliminación de Director</h1>

<div>
    <?php
    $idManager = $_POST['managerId'];
    $manager = new managerController;
    $managerDeleted = $manager->deleteManager($idManager);


    if($managerDeleted) {
        ?>
        <div>
            <div>
                El director ha sido eliminado correctamente.<br><a href="list.php">Volver al listado de directores</a>

            </div>
        </div>

        <?php

    }else{
        ?>
        <div>
            <div>
                El director no se ha borrado correctamente. <br> <a href="list.php">Volver a intentarlo</a>
            </div>
        </div>
        <?php
    }
    ?>
</div>