<?php
require_once('../../controllers/ActorController.php')
?>

    <h1>Creación de actor</h1>

<?php
$sendData = false;
$actorCreated = false;

$actor = new actorController;

if(isset($_POST['createBtn'])){
    $sendData = true;
}

if($sendData) {
    if (isset($_POST['nameActor'])){
        $actorCreated = $actor->storeActor($_POST['nameActor'], $_POST['lastNameActor'], $_POST['birthday'], $_POST['nationality']);
    } else {
        echo "No se recibe el parámetro";
    }

}

if(!$sendData){
    ?>

    <form name="create_actor" method="POST">
        <label>Nombre del actor</label>
        <input name="nameActor" type="text" required/><br>
        <label>Apellido del actor</label>
        <input name="lastNameActor" type="text" required/><br>
        <label>Cumpleaños del actor</label>
        <input name="birthday" type="date" required/><br>
        <label>Nacionalidad del actor</label>
        <input name="nationality" type="text" required/><br>
        <input type="submit" value="Crear" name="createBtn"/>
    </form>

    <?php
}else {

    if($actorCreated){

        ?>
        <div>
            <div>
                El actor ha sido creado correctamente. <br><a href="list.php">Volver al listado de actores</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div>
            <div>
                El actor no se ha creado correctamente <br> <a href="create.php">Volver a intentarlo</a>
            </div>
        </div>

        <?php
    }
}
?>