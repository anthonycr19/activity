<?php
    require_once('../../controllers/IdiomController.php')

?>

<div>
    <?php
    $list = new IdiomController;
    $listIdioms = $list->listIdiom();
    if(count($listIdioms) > 0){
        ?>
        <table>
            <thead>
                <th>ID</th>
                <th>ISO CODE</th>

            </thead>
            <tbody>
                <?php
//                     foreach ($listIdioms as $idiom){
                ?>
                <tr>
                    <td><?php ?></td>
                    <td><?php ?></td>
                </tr>
                <?php
//                     }
                ?>
            </tbody>
        </table>


        <?php
    } else {
        ?>
        <p>No contiene idiomas</p>
        <?php
    }
    ?>
</div>
