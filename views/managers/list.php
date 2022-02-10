<?php
require_once('../../controllers/ManagerController.php')

?>

<div>
    <div>
        <a href="./create.php">Crear director</a>
    </div>
    <?php
    $list = new managerController;
    $listManagers = $list->listManager();
    if(count($listManagers) > 0){
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
            foreach ($listManagers as $manager){
                ?>
                <tr>
                    <td><?php echo $manager->getIdManager(); ?></td>
                    <td><?php echo $manager->getNameManager(); ?></td>
                    <td><?php echo $manager->getLastNameManager(); ?></td>
                    <td><?php echo $manager->getBirthday(); ?></td>
                    <td><?php echo $manager->getNationality(); ?></td>
                    <td>
                        <div>
                            <a href="./edit.php?id=<?php echo $manager->getIdManager();?>">Editar</a>
                            <form name="delete_manager" action="delete.php" method="POST">
                                <input type="hidden" name="managerId" value="<?php echo $manager-> getIdManager();?>">
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
        <p>No contiene ningún director</p>
        <?php
    }
    ?>
</div>