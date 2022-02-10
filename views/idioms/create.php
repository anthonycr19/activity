<?php
    require_once('../../controllers/IdiomController.php')
?>

<h1>Creación de Idioma</h1>

<?php
    $sendData = false;
    $idiomCreated = false;

    $idiom = new IdiomController;

    if(isset($_POST['createBtn'])){
        $sendData = true;
    }

    if($sendData) {
        if (isset($_POST['isoIdiom'])){
            $idiomCreated = $idiom->storeIdiom($_POST['isoIdiom'], $_POST['nameIdiom']);
        } else {
            echo "No se recibe el parámetro";
        }

    }

    if(!$sendData){
?>

    <form name="create_idiom" method="POST">
        <label>ISO Code del Idioma</label>
        <input name="isoIdiom" type="text" required/><br>
        <label>Nombre del Idioma</label>
        <input name="nameIdiom" type="text" required/><br>
        <input type="submit" value="Crear" name="createBtn"/>
    </form>

<?php
    }else {

        if($idiomCreated){

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