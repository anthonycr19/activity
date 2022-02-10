<?php
require_once('../../controllers/IdiomController.php')

?>

<h1>Edición de Idioma</h1>

<div>
    <?php
    $idIdiom = $_POST['idiomId'];
    $idiom = new IdiomController;
    $idiomDeleted = $idiom->deleteIdiom($idIdiom);


    if($idiomDeleted) {
        ?>
        <div>
            <div>
                El Iso Code de idioma ha sido borrada correctamente.<br><a href="list.php">Volver al listado de Iso Codes para idiomas</a>

            </div>
        </div>

    <?php

    }else{
        ?>
    <div>
        <div>
            El Iso Code del idioma no se ha borrado correctamente. <br> <a href="list.php">Volver a intentarlo</a>
        </div>
    </div>
    <?php
    }
    ?>
</div>