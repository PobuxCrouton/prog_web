<p><strong>Votre commande a bien été reçue</strong></p>
<p>un courriel de confirmation vous a été envoyé.</p>
<p>Merci!</p>
<br>
<p><strong>Détails</strong></p>
<p>Parent : <?php echo $this->successList['nom_parent']; ?></p>
<p>Enfant : <?php echo $this->successList['nom_enfant']; ?></p>
<p>Âge : <?php echo $this->successList['age'] ?></p>
<?php if(isset($this->successList['ecole'])): ?>
<p>École : <?php echo $this->successList['ecole'] ?></p>
<?php endif; ?>
<br>
<p><strong>Mets commandés</strong></p>
<p>Lundi : <?php echo $this->successList['lundi'] ?></p>
<p>Mardi : <?php echo $this->successList['mardi'] ?></p>
<p>Mercredi : <?php echo $this->successList['mercredi'] ?></p>
<p>Jeudi : <?php echo $this->successList['jeudi'] ?></p>
<p>Vendredi : <?php echo $this->successList['vendredi'] ?></p>
