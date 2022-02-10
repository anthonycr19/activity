<?php
require_once('../../controllers/IdiomController.php')

?>

    <h1>Edición de Idioma</h1>

<?php
$idiom = new IdiomController;
$idIdiom = $_GET['id'];

$idiomObject = $idiom->getIdiomData($idIdiom);

$sendData = false;
$idiomCreated = false;

if(isset($_POST['editBtn'])){
    $sendData = true;
}

if($sendData) {
    if (isset($_POST['isoIdiom'])){
        $idiomCreated = $idiom->updateIdiom($_POST['idiomId'], $_POST['isoIdiom'], $_POST['nameIdiom']);
    }

}

if(!$sendData){
    ?>

    <form name="create_idiom" method="POST">
        <label>ISO Code del Idioma</label>
        <input name="isoIdiom" type="text" value="<?php if(isset($idiomObject)) echo $idiomObject->getIsoCode(); ?>" required/>
        <br>
        <label>Nombre del Idioma</label>
        <input name="nameIdiom" type="text" value="<?php if(isset($idiomObject)) echo $idiomObject->getNameIdiom(); ?>" required/>
        <br>
        <input type="hidden" name="idiomId" value="<?php echo $idIdiom?>">
        <input type="submit" value="Guardar" name="editBtn"/>
    </form>

    <?php
}else {

    if($idiomCreated){

        ?>
        <div>
            <div>
                ISO code del idioma editada correctamente. <br><a href="list.php">Volver al listado de ISO codes de Idiomas</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div>
            <div>
                El ISO code del idioma ha sido editado correctamente <br> <a href="edit.php">Volver a intentarlo</a>
            </div>
        </div>

        <?php
    }
}
?>