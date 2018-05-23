<? php

$info = array( 
'nom'=>$_POST['nom'],
'prenom'=>$_POST['prenom'],
'age'=> $_POST['age'],
'mail'=> $_POST['mail'],
'mdp' => $_POST['mdp'],
'domaineComp' => $_POST['domaineComp']
);

if($fp = fopen("info.txt","a")){ /* ouverture du fichier en écriture !c'est la ligne 17 */ 
fputs($fp, "\n"); // on va a la ligne
fputs($fp, "$info['nom']#$info['prenom']#$info['age']#$info['email']#$info['mdp']#$info['domaineComp']#");
fclose($fp);
?>