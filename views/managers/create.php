<?php
require_once('../../controllers/ManagerController.php')
?>

    <h1>Creación de manager</h1>

<?php
$sendData = false;
$managerCreated = false;

$manager = new managerController;

if(isset($_POST['createBtn'])){
    $sendData = true;
}

if($sendData) {
    if (isset($_POST['nameManager'])){
        $managerCreated = $manager->storeManager($_POST['nameManager'], $_POST['lastNameManager'], $_POST['birthday'], $_POST['nationality']);
    } else {
        echo "No se recibe el parámetro";
    }

}

if(!$sendData){
    ?>

    <form name="create_manager" method="POST">
        <label>Nombre del director</label>
        <input name="nameManager" type="text" required/><br>
        <label>Apellido del director</label>
        <input name="lastNameManager" type="text" required/><br>
        <label>Cumpleaños del director</label>
        <input name="birthday" type="date" required/><br>
        <label>Nacionalidad del director</label>
        <input name="nationality" type="text" required/><br>
        <input type="submit" value="Crear" name="createBtn"/>
    </form>

    <?php
}else {

    if($managerCreated){

        ?>
        <div>
            <div>
                El director ha sido creado correctamente. <br><a href="list.php">Volver al listado de directores</a>
            </div>
        </div>
        <?php
    } else {
        ?>
        <div>
            <div>
                El director no se ha creado correctamente <br> <a href="create.php">Volver a intentarlo</a>
            </div>
        </div>

        <?php
    }
}
?>