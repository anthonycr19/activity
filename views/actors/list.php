<?php
require_once('../../controllers/ActorController.php')

?>

<div>
    <div>
        <a href="./create.php">Crear actor</a>
    </div>
    <?php
    $list = new actorController;
    $listActors = $list->listActor();
    if(count($listActors) > 0){
        ?>
        <table>
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cumpleaños</th>
            <th>Nacionalidad</th>
            <th>Acciones</th>
            </thead>
            <tbody>
            <?php
            foreach ($listActors as $actor){
                ?>
                <tr>
                    <td><?php echo $actor->getIdactor(); ?></td>
                    <td><?php echo $actor->getNameActor(); ?></td>
                    <td><?php echo $actor->getLastNameActor(); ?></td>
                    <td><?php echo $actor->getBirthday(); ?></td>
                    <td><?php echo $actor->getNationality(); ?></td>
                    <td>
                        <div>
                            <a href="./edit.php?id=<?php echo $actor->getIdActor();?>">Editar</a>
                            <form name="delete_actor" action="delete.php" method="POST">
                                <input type="hidden" name="actorId" value="<?php echo $actor-> getIdActor();?>">
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
        <p>No contiene ningún actor</p>
        <?php
    }
    ?>
</div>