<div class="page form-wrap container">
	<h1>Commander</h1>
	<form action="?action=commande" method="POST">
		<div class="form-section information">
			<h3>Vos informations</h3>
			<label for="nom_parent">Nom du parent</label><input <?php FormValidator::hasError('nom_parent', true); ?> id="nom_parent" type="text" name="nom_parent"><br>
			<label for="nom_enfant">Nom de l'enfant</label><input <?php FormValidator::hasError('nom_enfant', true); ?> id="nom_enfant" type="text" name="nom_enfant"><br>
			<label for="age">Âge de l'enfant</label><input <?php FormValidator::hasError('age', true); ?> id="age" type="text" name="age" value="0"><br>
			<label for="ecole">Nom de l'école</label><input <?php FormValidator::hasError('ecole', true); ?> id="ecole" type="text" name="ecole">
		</div>
		<div class="form-section">
			<h3>Vos choix de repas</h3>
			<table class="table-choice">
				<tr>
					<td>Jour</td>
					<td>Lundi</td>
					<td>Mardi</td>
					<td>Mercredi</td>
					<td>Jeudi</td>
					<td>Vendredi</td>
				</tr>
				<tr>
					<td>Votre choix</td>
					<td>
						<select name="lundi" id="lundi">
							<option value="0">Choissisez un repas</option>
							<option value="spaghetti" <?php FormValidator::isSelected('lundi', 'spaghetti'); ?>>Spaghetti</option>
							<option value="poisson" <?php FormValidator::isSelected('lundi', 'poisson'); ?>>Poisson</option>
						</select>
					</td>
					<td>
						<select name="mardi" id="mardi">
							<option value="0">Choissisez un repas</option>
							<option value="poulet" <?php FormValidator::isSelected('mardi', 'poulet'); ?>>Poulet</option>
							<option value="riz" <?php FormValidator::isSelected('mardi', 'Riz'); ?>>Riz</option>
						</select>
					</td>
					<td>
						<select name="mercredi" id="mercredi">
							<option value="0">Choissisez un repas</option>
							<option value="soupe" <?php FormValidator::isSelected('mercredi', 'soupe'); ?>>Soupe</option>
							<option value="toast" <?php FormValidator::isSelected('mercredi', 'toast'); ?>>Toast</option>
						</select>
					</td>
					<td>
						<select name="jeudi" id="jeudi">
							<option value="0">Choissisez un repas</option>
							<option value="viande" <?php FormValidator::isSelected('jeudi', 'viande'); ?>>Viande</option>
							<option value="hamburger" <?php FormValidator::isSelected('jeudi', 'hamburger'); ?>>Hamburger</option>
						</select>
					</td>
					<td>
						<select name="vendredi" id="vendredi">
							<option value="0">Choissisez un repas</option>
							<option value="tofu" <?php FormValidator::isSelected('vendredi', 'tofu'); ?>>Tofu</option>
							<option value="paella" <?php FormValidator::isSelected('vendredi', 'paella'); ?>>Paella</option>
						</select>
					</td>
				</tr>
				<tr class="image">
					<td>Choix 1</td>
					<td>
						<img src="<?php get_img('spaghetti'); ?>" alt="repas spaghetti">
						<p>Spaghetti bolognaise maison</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Spaghetti</li>
								<li>Viande brune</li>
								<li>Sauce aux tomates</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('poulet'); ?>" alt="repas ">
						<p>Poulet frit facile à manger</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Poulet</li>
								<li>Frites</li>
								<li>Salade de choux</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('soupe'); ?>" alt="repas ">
						<p>Soupe santé "chunky mommy"</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Carottes</li>
								<li>Poulet</li>
								<li>Brocoli</li>
								<li>Épices</li>
								<li>Bouillon de légume</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('viande', '.png'); ?>" alt="repas ">
						<p>Viande rouge saignante AAA</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Boeuf canadien AAA</li>
								<li>Sauce aux poivres</li>
								<li>Haricots</li>
								<li>Patate pillée</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('tofu'); ?>" alt="repas ">
						<p>Tofu végétarien</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Tofu en cubes</li>
							</ul>
						</div>
					</td>
				</tr>
				<tr class="image">
					<td>Choix 2</td>
					<td>
						<img src="<?php get_img('poisson'); ?>" alt="repas ">
						<p>Poisson (saumon ou sole selon disponibilité)</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Saumon / sole</li>
								<li>Tranche de citron</li>
								<li>Poivre</li>
								<li>Sel</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('riz'); ?>" alt="repas ">
						<p>Un riz blanc nutritif</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Riz</li>
								<li>Baguette</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('toast'); ?>" alt="repas ">
						<p>Une toast grillée</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Toast blé entier</li>
								<li>Un bout de beurre</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('hamburger'); ?>" alt="repas ">
						<p>Hamburger conventionnel</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Pain</li>
								<li>Boulette de viande</li>
								<li>Laitue</li>
								<li>Tomate</li>
								<li>Fromage</li>
							</ul>
						</div>
					</td>
					<td>
						<img src="<?php get_img('paella'); ?>" alt="repas ">
						<p>Paella d'Espagne</p>
						<div class="ingredient-wrap">
							<p>Ingrédients</p>
							<ul>
								<li>Moules</li>
								<li>Crevettes</li>
								<li>Riz</li>
								<li>Petit pois</li>
								<li>Chorizo</li>
							</ul>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="submit-wrap">
			<input class="submit" name="submit" type="submit" value="Commander">
		</div>
	</form>
</div>