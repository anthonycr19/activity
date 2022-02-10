<?php
require_once('../../controllers/PlatformController.php')

?>

<h1>Edición de Platforma</h1>

<div>
    <?php
    $idPlatform = $_POST['platformId'];
    $platform = new platformController;
    $platformDeleted = $platform->deletePlatform($idPlatform);


    if($platformDeleted) {
        ?>
        <div>
            <div>
                La plataforma ha sido borrada correctamente.<br><a href="list.php">Volver al listado de Plataformas</a>

            </div>
        </div>

        <?php

    }else{
        ?>
        <div>
            <div>
                La plataforma no se ha borrado correctamente. <br> <a href="list.php">Volver a intentarlo</a>
            </div>
        </div>
        <?php
    }
    ?>
</div>