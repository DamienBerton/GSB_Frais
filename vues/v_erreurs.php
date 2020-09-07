<?php
/**
 * Vue erreur
 *
 * PHP Version 7
 *
 * @author    BERTON Damien
 */
?>
<div class="alert alert-danger" role="alert">
    <?php
    foreach ($_REQUEST['erreurs'] as $erreur) {
        echo '<p>' . htmlspecialchars($erreur) . '</p>';
    }
    ?>
</div>