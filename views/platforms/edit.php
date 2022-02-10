<?php
require_once('../../controllers/platformController.php')

?>

    <h1>Edición de Plataforma</h1>

<?php
$platform = new platformController;
$idPlatform = $_GET['id'];

$platformObject = $platform->getPlatformData($idPlatform);

$sendData = false;
$platformCreated = false;

if(isset($_POST['editBtn'])){
    $sendData = true;
}

if($sendData) {
    if (isset($_POST['namePlatform'])){
        $platformCreated = $platform->updatePlatform($_POST['platformId'], $_POST['namePlatform']);
    }

}

if(!$sendData){
    ?>

    <form name="create_platform" method="POST">
        <label>Nombre del plataforma</label>
        <input name="namePlatform" type="text" value="<?php if(isset($platformObject)) echo $platformObject->getNamePlatform(); ?>" required/>
        <br>
        <input type="hidden" name="platformId" value="<?php echo $idPlatform?>">
        <input type="submit" value="Guardar" name="editBtn"/>
    </form>

    <?php
}else {

    if($platformCreated){

        ?>
        <div>
            <div>
                Plataforma editada correctamente. <br><a href="list.php">Volver al listado de plataformas</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div>
            <div>
                La plataforma no ha sido editada correctamente <br> <a href="edit.php">Volver a intentarlo</a>
            </div>
        </div>

        <?php
    }
}
?>