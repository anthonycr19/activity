<?php
require_once('../../controllers/actorController.php')

?>

    <h1>Edición de actor</h1>

<?php
$actor = new actorController;
$idActor = $_GET['id'];

$actorObject = $actor->getActorData($idActor);

$sendData = false;
$actorCreated = false;

if(isset($_POST['editBtn'])){
    $sendData = true;
}

if($sendData) {
    if (isset($_POST['actorId'])){
        $actorCreated = $actor->updateactor($_POST['actorId'], $_POST['nameActor'], $_POST['lastNameActor'], $_POST['birthday'], $_POST['nationality']);
    }

}

if(!$sendData){
    ?>

    <form name="create_actor" method="POST">

        <label>Nombre del actor</label>
        <input name="nameActor" type="text" value="<?php if(isset($actorObject)) echo $actorObject->getNameActor(); ?>" required/>
        <br>
        <label>Apellido del actor</label>
        <input name="lastNameActor" type="text" value="<?php if(isset($actorObject)) echo $actorObject->getLastNameActor(); ?>" required/>
        <br>
        <label>Cumpleaños</label>
        <input name="birthday" type="date" value="<?php if(isset($actorObject)) echo $actorObject->getBirthday(); ?>" required/>
        <br>
        <label>Nacionalidad</label>
        <input name="nationality" type="text" value="<?php if(isset($actorObject)) echo $actorObject->getNationality(); ?>" required/>
        <br>
        <input type="hidden" name="actorId" value="<?php echo $idActor?>">
        <input type="submit" value="Guardar" name="editBtn"/>
    </form>

    <?php
}else {

    if($actorCreated){

        ?>
        <div>
            <div>
                El actor ha sido editado correctamente. <br><a href="list.php">Volver al listado de Actores</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div>
            <div>
                El actor ha sido editado correctamente <br> <a href="edit.php">Volver a intentarlo</a>
            </div>
        </div>

        <?php
    }
}
?>