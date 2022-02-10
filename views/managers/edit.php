<?php
require_once('../../controllers/ManagerController.php')

?>

    <h1>Edición de Director</h1>

<?php
$manager = new managerController;
$idManager = $_GET['id'];

$managerObject = $manager->getManagerData($idManager);

$sendData = false;
$managerCreated = false;

if(isset($_POST['editBtn'])){
    $sendData = true;
}

if($sendData) {
    if (isset($_POST['managerId'])){
        $managerCreated = $manager->updatemanager($_POST['managerId'], $_POST['nameManager'], $_POST['lastNameManager'], $_POST['birthday'], $_POST['nationality']);
    }

}

if(!$sendData){
    ?>

    <form name="create_manager" method="POST">

        <label>Nombre del Director</label>
        <input name="nameManager" type="text" value="<?php if(isset($managerObject)) echo $managerObject->getNameManager(); ?>" required/>
        <br>
        <label>Apellido del Director</label>
        <input name="lastNameManager" type="text" value="<?php if(isset($managerObject)) echo $managerObject->getLastNameManager(); ?>" required/>
        <br>
        <label>Cumpleaños</label>
        <input name="birthday" type="date" value="<?php if(isset($managerObject)) echo $managerObject->getBirthday(); ?>" required/>
        <br>
        <label>Nacionalidad</label>
        <input name="nationality" type="text" value="<?php if(isset($managerObject)) echo $managerObject->getNationality(); ?>" required/>
        <br>
        <input type="hidden" name="managerId" value="<?php echo $idManager?>">
        <input type="submit" value="Guardar" name="editBtn"/>
    </form>

    <?php
}else {

    if($managerCreated){

        ?>
        <div>
            <div>
                El director ha sido editado correctamente. <br><a href="list.php">Volver al listado de Directores</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div>
            <div>
                El director ha sido editado correctamente <br> <a href="edit.php">Volver a intentarlo</a>
            </div>
        </div>

        <?php
    }
}
?>