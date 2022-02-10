<?php
require_once('../../controllers/PlatformController.php')
?>

    <h1>Creación de Plataformas</h1>

<?php
$sendData = false;
$platformCreated = false;

$platform = new PlatformController;

if(isset($_POST['createBtn'])){
    $sendData = true;
}

if($sendData) {
    if (isset($_POST['namePlatform'])){
        $platformCreated = $platform->storePlatform($_POST['namePlatform']);
    } else {
        echo "No se recibe el parámetro";
    }
}

if(!$sendData){
    ?>

    <form name="create_platform" method="POST">
        <label>Nombre de la platforma</label>
        <input name="namePlatform" type="text" required/><br>
        <input type="submit" value="Crear" name="createBtn"/>
    </form>

    <?php
}else {

    if($platformCreated){

        ?>
        <div>
            <div>
                Plataforma creada correctamente. <br><a href="list.php">Volver al listado de plataformas</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div>
            <div>
                La plataforma no se ha creado correctamente <br> <a href="create.php">Volver a intentarlo</a>
            </div>
        </div>

        <?php
    }
}
?>