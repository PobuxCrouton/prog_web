<div class="page form-wrap container">
	<h1>Commander</h1>
	<form action="?action=commande" method="POST">
		<div class="form-section">Vos informations</div>
		<label for="nomParent">Parent</label><input id="nomParent" type="text" name="nomParent"><br>
		<label for="nomEnfant">Enfant</label><input id="nomEnfant" type="text" name="nomEnfant"><br>
		<label for="age">Age</label><input id="age" type="text" name="age" value="0"><br>
		<label for="ecole">Ecole</label><input id="ecole" type="text" name="ecole">
		<div class="form-section">Vos choix cette semaine</div>
		<label for="lundi">Lundi</label>
		<select name="lundi" id="lundi">
			<option value="0">Choissisez un repas</option>
			<option value="spaghetti">Spaghetti</option>
			<option value="poulet">Poulet</option>
		</select>
		<label for="mardi">Mardi</label>
		<select name="mardi" id="mardi">
			<option value="0">Choissisez un repas</option>
			<option value="Soupe">Soupe</option>
			<option value="Viande">Viande</option>
		</select>
		<label for="mercredi">Mercredi</label>
		<select name="mercredi" id="mercredi">
			<option value="0">Choissisez un repas</option>
			<option value="Tofu">Tofu</option>
			<option value="Poisson">Poisson</option>
		</select>
		<label for="jeudi">Jeudi</label>
		<select name="jeudi" id="jeudi">
			<option value="0">Choissisez un repas</option>
			<option value="Riz">Riz</option>
			<option value="Toast">Toast</option>
		</select>
		<label for="vendredi">Vendredi</label>
		<select name="vendredi" id="vendredi">
			<option value="0">Choissisez un repas</option>
			<option value="Hamburger">Hamburger</option>
			<option value="Paella">Paella</option>
		</select>
		<input name="submit" type="submit" value="Commander">
	</form>
</div>