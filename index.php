<!--
<p><span class="affiche_en">
Affficher en:
</span>

<?php
$i=0;
while($i<5){

//echo $table_langue[$i];
$i++;
//echo '&nbsp&nbsp&nbsp&nbsp';
}
?>
</p>
-->
<?php
$langue;
$table_langue=array(
'francais',
'anglais',
'Moore',
'dioula',
'gourounsi',
);
$traduction=array(
'bonjour',
'Good morning',
'né yibeogo',
'Ani sogma',
'a pan zémin'
);
?>
<?php
define ('afiche','all');
$langue=array(
'en'=>'<p style="color:blue">Hello World !</p>',
'fr'=>'<p style="color:blue">Bonjour le monde !</p>',
'es'=>'<p style="color:blue">¡ Hola mundo !</p>',
'de'=>'<p style="color:blue"> Halo welt !</p>'
);
$affiche='fr';
$retour= '<br />';
$toto='Re-Bonjour';
function paragraphe($message){
	echo '<p style="color:blue">'.$message. '</p>';
}
/*
$formatage_bloc=<<<EOT
je suis content d'apprendre PHP
$retour
cette formation est excellente et j'en suis heureux
$retour
aidez moi svp!
 
EOT
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css"/>
<title>Document PHP</title>
</head>
<body>
<?php
if (afiche=='all'){
		foreach($langue as $lang=>$message){
			$recup=$lang.':'.$message;
			paragraphe($recup);
		}
		
}
else{
//echo $formatage_bloc;
		switch(afiche){
			case 'en': echo paragraphe($langue['en']);
			break;
			case 'fr': echo paragraphe($langue['fr']);
			break;
			case 'es': echo paragraphe($langue['es']);
			break;
			case 'de': echo paragraphe($langue['de']);
			break;
			default: echo paragraphe("votre langue n'est pas connu");
		}
}
?>

</body>

</html>
