<?php echo "nippon ni mauvais" ?>
<!DOCTYPE html PUBLIC "­//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Page de bienvenue</title>
<meta http­equiv="content­type" content="text/html; charset=ISO­
8859­1">
</head>
<body>
<h1>Bienvenue sur ce site</h1>
<hr />
<?
$action=$HTTP_POST_VARS["action"];
if ($action!="OK") {
echo "<form action=\"bienvenue.php\" method=\"POST\">\n";
echo "<h2>Veuillez entrer votre Prénom et votre année de
naissance</h2>\n";
echo "<strong>Prenom : </strong><input type=\"text\"
name=\"prenom\" value=\"\" /><br/>\n";
echo "<strong>Année de naissance : </strong><input type=\"text\"
name=\"dnaiss\" value=\"\" />
<br/>\n";
echo "<input type=\"submit\" name=\"action\" value=\"OK\" />";
echo "</form>";
}
else {
$prenom=$HTTP_POST_VARS["prenom"];
$dnaiss=$HTTP_POST_VARS["dnaiss"];
$date=date("Y"); echo "<h2>Bonjour $prenom</h2>\n";
echo "Aujourd'hui nous somme le ",date("d/m/Y"),"<br />\n";
echo "Tu as <strong>",($date­$dnaiss),"</strong> ans.<br />\n";
}
?>
<hr />
Copyright (c) 2003 ­ Philippe BOUSQUET.<br />
Ce logiciel est sous licence <strong>Gnu General Public
License</strong>.
</body>
</html>
