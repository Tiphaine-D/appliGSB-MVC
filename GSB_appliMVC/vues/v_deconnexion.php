<?php
/**
 * Vue D�connexion
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    R�seau CERTA <contact@reseaucerta.org>
 * @author    Jos� GIL <jgil@ac-nice.fr>
 * @copyright 2017 Réseau CERTA
 * @license   Réseau CERTA
 * @version   GIT: <0>
 * @link      http://www.reseaucerta.org Contexte « Laboratoire GSB »
 */
deconnecter();
?>
<div class="alert alert-info" role="alert">
    <p>Vous avez bien été déconnecté ! <a href="index.php">Cliquez ici</a>
        pour revenir à la page de connexion.</p>
</div>
<?php
header("Refresh: 3;URL=index.php");
