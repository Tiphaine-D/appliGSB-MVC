<?php
/**
 * Menu déroulant pour choisir le visiteur et le mois
 *
 * PHP Version 7
 *
 * @category  PPE
 * @package   GSB
 * @author    Tiphaine DEMAIRY
 * @version   GIT: <0>
 */
?>
 
<div id="contenu">
 <!--Affichage du menu déroulant pour choisir le visiteur -->   
	<p> Choisir le visiteur :<p>
	<form action="index.php?uc=validerFrais&action=voirEtatFrais" method="post">
	<div class="corpsForm">  
	<p>
		<label for="lstVisiteurs" accesskey="n">Visiteur : </label>
		<select id="lstVisiteurs" name="lstVisiteurs">
			<?php
 			foreach ($lesVisiteurs as $unVisiteur){
 				$id = $unVisiteur['id'];
				$nom =  $unVisiteur['nom'];
				$prenom =  $unVisiteur['prenom'];
				if(isset($id) && $id == $visiteurASelectionner){
				?>
				<option selected value="<?php echo $id ?>"><?php echo  $nom." ".$prenom ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $id ?>"><?php echo  $nom." ".$prenom ?> </option>
				<?php 
				}
			}
			?>
		</select> 
	</p>
	</div>
	
	<div class="piedForm">
	<p>
		<input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
	</p> 
	</div>
 <!--Affichage de la liste des mois disponibles pour le visiteur choisi dans une liste déroulante -->      	
	<div class="corpsForm">  
	<p>
		<label for="lstMois" accesskey="n">Mois : </label>
		<select id="lstMois" name="lstMois">
            <?php
			foreach ($lesMois as $unMois)
			{
			    $mois = $unMois['mois'];
				$numAnnee =  $unMois['numAnnee'];
				$numMois =  $unMois['numMois'];
				if(isset($mois) && $mois == $moisASelectionner){
			?>
				<option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php 
				}
			}
		   ?>
		</select>
	</p>
	</div>
	<div class="piedForm">
	<p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
	</p>
	</form> 
	</div> 