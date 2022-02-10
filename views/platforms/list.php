<?php
require_once('../../controllers/PlatformController.php')

?>

<div>
    <div>
        <a href="./create.php">Crear plataformas</a>
    </div><br>
    <?php
    $list = new platformController;
    $listPlatforms = $list->listPlatform();
    if(count($listPlatforms) > 0){
        ?>
        <table>
            <thead>
            <th>ID</th>
            <th>Nombre de platforma</th>
            <th>Acciones</th>
            </thead>
            <tbody>
            <?php
            foreach ($listPlatforms as $platform){
                ?>
                <tr>
                    <td><?php echo $platform->getIdplatform(); ?></td>
                    <td><?php echo $platform->getNamePlatform(); ?></td>
                    <td>
                        <div>
                            <a href="./edit.php?id=<?php echo $platform->getIdPlatform();?>">Editar</a>
                            <form name="delete_isocode" action="delete.php" method="POST">
                                <input type="hidden" name="platformId" value="<?php echo $platform-> getIdPlatform();?>">
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
        <p>No contiene ninguna plataforma</p>
        <?php
    }
    ?>
</div>
