<?php
    require_once('../../controllers/IdiomController.php')

?>

<div>
    <div>
        <a href="./create.php">Crear idioma</a>
    </div>
    <?php
    $list = new IdiomController;
    $listIdioms = $list->listIdiom();
    if(count($listIdioms) > 0){
        ?>
        <table>
            <thead>
                <th>ID</th>
                <th>ISO CODE</th>
                <th>Nombre de Idioma</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                     foreach ($listIdioms as $idiom){
                ?>
                <tr>
                    <td><?php echo $idiom->getIdIdiom(); ?></td>
                    <td><?php echo $idiom->getIsoCode(); ?></td>
                    <td><?php echo $idiom->getNameIdiom(); ?></td>
                    <td>
                        <div>
                            <a href="./edit.php?id=<?php echo $idiom->getIdIdiom();?>">Editar</a>
                            <form name="delete_isocode" action="delete.php" method="POST">
                                <input type="hidden" name="idiomId" value="<?php echo $idiom-> getIdIdiom();?>">
                                <button type="submit">Borrar</button>
                            </form>

                        </div>
                    </td>
                </tr>
                <?php
                     }
                ?>
            </tbody>
        </table>


        <?php
    } else {
        ?>
        <p>No contiene ningún idioma</p>
        <?php
    }
    ?>
</div>