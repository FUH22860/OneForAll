<!DOCTYPE html>
<html>
<head>
	<title>OneForAll</title>
	<link rel="stylesheet" href="index.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
	<body>
		
		<div class="divtop">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
				<input type="text" class="searchtop" name="name" placeholder="Suche nach etwas">
				<input type="submit" class="buttontop" name="lizerst" value="Lizenz eintragen">
				<input type="submit" class="buttontop" name="lizab" value="Kategorie erstellen">
				<input type="submit" class="buttontop" name="lizab" value="Benutzer erstellen">
			</form>
		</div>
		<div>
			<button type="button" class="buttontop2">Lizenzen</button>
			<button type="button" class="buttontop2">Kategorien</button>
			<button type="button" class="buttontop2">Benutzer</button>
		</div>
		<div class="divmain">
			<div class="divmaintop">
				<h2>Übersicht</h2>
			</div>
			<div class="divmainbody">
			</div>
		</div>
		
	</body>
</html>