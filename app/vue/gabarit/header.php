<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="<?php echo REL_PATH ?>skin/css/main.css">
	<title>Commande</title>
</head>
<body>
<div class="nav-wrap">
	<nav class="top-menu container">
		<ul>
			<li><a href="<?php echo REL_PATH; ?>">Accueil</a></li>
			<li><a href="?action=information">Information</a></li>
			<li class="cta-commande"><a href="?action=commande">Commande</a></li>
		</ul>
	</nav>
</div>
<?php if($this->notice != ""): ?>
<div class="notice container <?php echo $this->notice ?>">
	<?php include($this->notice.".php") ?>	
</div>
<?php endif; ?>