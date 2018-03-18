<?php
/**
 * Vue choix remboursement frais
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Tiphaine DEMAIRY
 * @version   GIT: <0>
 */
?>
<h3>
	<td>
		<a href="index.php?uc=suivrePaiements&action=mettreEtatRembourse<?php echo $id ?>" 
		onclick="return confirm('Voulez-vous vraiment rembourser cette fiche de frais?');">Rembourser ce frais</a>
	</td>
</h3>