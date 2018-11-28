<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>NodeJS</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div id="users"></div>
	<div id="message">
		<div class="message" id="msgtpl">
			<img src="{{{user.avatar}}}" alt="">
			<div class="info">
				<p><strong>{{user.username}}</strong></p>
				<p>{{message}}</p>
				<span class="date">{{h}}:{{m}}</span>
			</div>
		</div>
	</div>
	<div id="login">
		<form action="" id="loginform">
			<h1>bienvenue</h1>
			<p>ceci est un tchat nodeJS, entrez votre pseudo et mail (utilis&eacute; pour l'avatar gravatar)</p>
			<input type="text" name="login" id="username" placeholder="Nom d'utilisateur">
			<input type="text" name="mail" id="mail" placeholder="E-mail">
			<input type="submit" value="Envoyer">
		</form>
	</div>
	<form action="" id="form">
		<input type="text" name="message" class="text">
		<input type="submit" value="Envoyer mon message" class="submit" id="send">
	</form>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="node_modules/mustache/mustache.js"></script>
</body>
</html>