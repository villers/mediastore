<div class="ui vertical stripe segment">
	<h1 class="ui header">Mes commandes</h1>

	<div class="column" style="max-width: 450px; margin: 0px auto; padding: 20px;">
		<form method="post" action="" class="ui large form" enctype="multipart/form-data">
			<div class="ui stacked segment">
				<?php app\helper\Auth::getFlash() ?>
				<div class="field">
					<label for="login">Login</label>
					<input id="login" value="<?= isset($user->login) ? e($user->login) : '' ?>" name="login" placeholder="jdoe" type="text" maxlength="255" required>
				</div>
				<?php if(isset($user->id)): ?>
					<input value="<?= $user->id ?>" name="id" type="hidden">
				<?php endif; ?>
				<div class="field">
					<label for="email">E-mail</label>
					<input id="email" value="<?= isset($user->email) ? e($user->email) : '' ?>" name="email" placeholder="john.doe@mail.com" type="email" maxlength="255" required>
				</div>
				<div class="field">
					<label for="prenom">Prénom</label>
					<input id="prenom" value="<?= isset($user->prenom) ? e($user->prenom) : '' ?>" name="prenom" placeholder="John" type="text" maxlength="255" required>
				</div>
				<div class="field">
					<label for="nom">Nom</label>
					<input id="nom" value="<?= isset($user->nom) ? e($user->nom) : '' ?>" name="nom" placeholder="Doe" type="text" maxlength="255" required>
				</div>
				<div class="field">
					<label for="adresse">Adresse</label>
					<input id="adresse" value="<?= isset($user->adresse) ? e($user->adresse) : '' ?>" name="adresse" placeholder="156 Rue Paul Bert" type="text" maxlength="255" required>
				</div>
				<div class="field">
					<label for="cp">Code postal</label>
					<input id="cp" value="<?= isset($user->cp) ? e($user->cp) : '' ?>" name="cp" placeholder="69003" type="number" maxlength="255" required>
				</div>
				<div class="field">
					<label for="tel">N° de téléphone</label>
					<input id="tel" value="<?= isset($user->tel) ? e($user->tel) : '' ?>" name="tel" placeholder="02 62 96 52 90" type="tel" maxlength="255" required>
				</div>

				<div class="ui buttons">
					<a href="<?= \app\helper\Link::url('ArticlesController@nouveautes')?>" class="ui button">Retour</a>
					<div class="or" data-text="ou"></div>
					<button type="submit" class="ui positive button">Envoyer</button>
				</div>
			</div>
		</form>
	</div>
</div>