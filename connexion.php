<?php
try {
$connection=new PDO("mysql:host=localhost;dbname=ascg2;port:3306;charset=utf8",'root','');
}
catch(Exception $e){
echo"erreur de connexion $e->$getMessage()";
}
//////////////////////////////////////////////////Insertion d'adherent 
if (
   isset($_POST['nom']) && isset($_POST['prenom']) &&
  isset($_POST['naissance']) && isset($_POST['adresse']) && isset($_POST['codepostal']) &&
  isset($_POST['ville']) && isset($_POST['telephon']) && isset($_POST['mail1']) &&
  isset($_POST['DateAdhesion']) && isset($_POST['age']) && isset($_POST['carte'])
) {
  if (
      !empty($_POST['nom']) && !empty($_POST['prenom']) &&
      !empty($_POST['naissance']) && !empty($_POST['adresse']) && !empty($_POST['codepostal']) &&
      !empty($_POST['ville']) && !empty($_POST['telephon']) && !empty($_POST['mail1']) &&
      !empty($_POST['DateAdhesion']) && !empty($_POST['age']) && !empty($_POST['carte'])
  ) {
    
      $nom = htmlspecialchars($_POST['nom']);
      $prenom = htmlspecialchars($_POST['prenom']);
      $naissance = htmlspecialchars($_POST['naissance']);
      $adresse = htmlspecialchars($_POST['adresse']);
      $codepostal = htmlspecialchars($_POST['codepostal']);
      $ville = htmlspecialchars($_POST['ville']);
      $telephon = htmlspecialchars($_POST['telephon']);
      $mail1 = htmlspecialchars($_POST['mail1']);
      $DateAdhesion = htmlspecialchars($_POST['DateAdhesion']);
      $age = htmlspecialchars($_POST['age']);
      $carte = htmlspecialchars($_POST['carte']);

  		$insertionClient = $connection->prepare('INSERT INTO `adherent` ( `NOMADHERENT`, `PRENOMADHERENT`, `NAISSANCEADHERENT`, `ADRESSEADHERENT`, `CODEPOSTALADHERENT`, `VILLLEADHERENT`, `TELEPHONADHERENT`, `COURRIELADHERENT`, `DATEADHESION`, `AGE`, `NUMERO_CARTE_ADHERENT`)
                         VALUES(?,?,?,?,?,?,?,?,?,?,?)');
  		$insertionClient->execute(array($nom,$prenom,$naissance,$adresse,$codepostal,$ville,$telephon,$mail1,$DateAdhesion,$age,$carte));

  		echo '<center><h1>Adherent a été bien ajouté !!</h1></center>';
  	}else{
  		echo 'Attention, Tous Les Champs Sont Obligatoires !!';
  	}
  }

//////////////////////////////////////////////////Insertion de section 
  if (
    isset($_POST['code']) && isset($_POST['libelle']) &&
   isset($_POST['saison'])  
 ) {
   if (
       !empty($_POST['code']) && !empty($_POST['libelle']) && !empty($_POST['saison']) 
   ) {
     
       $code = htmlspecialchars($_POST['code']);
       $libelle = htmlspecialchars($_POST['libelle']);
       $saison = htmlspecialchars($_POST['saison']);
       $insertionClient = $connection->prepare('INSERT INTO `section` (`CODESECTION`, `LIBELLE`, `DATEDEBUTSAISON`)
                          VALUES(?,?,?)');
       $insertionClient->execute(array($code,$libelle,$saison));
       echo '<center><h1>L a Section  a été bien ajouté !!</h1></center>';
     }else{
       echo 'Attention, Tous Les Champs Sont Obligatoires !!';
     }
   }
//////////////////////////////////////////////////Insertion de Activter 

if (
  isset($_POST['NActivite']) && isset($_POST['NOMLIEU']) && isset($_POST['CODESECTION']) &&
  isset($_POST['libelleActivite']) && isset($_POST['Description']) && isset($_POST['JOUR&Horaire']) &&
  isset($_POST['DUREESEANCE']) && isset($_POST['TARIFANNUEL'])
) {
  if (
      !empty($_POST['NActivite']) && !empty($_POST['NOMLIEU']) && !empty($_POST['CODESECTION']) &&
      !empty($_POST['libelleActivite']) && !empty($_POST['Description']) && !empty($_POST['JOUR&Horaire']) &&
      !empty($_POST['DUREESEANCE']) && !empty($_POST['TARIFANNUEL'])
  ) {
      $NActivite = htmlspecialchars($_POST['NActivite']);
      $NOMLIEU = htmlspecialchars($_POST['NOMLIEU']);
      $CODESECTION = htmlspecialchars($_POST['CODESECTION']);
      $libelleActivite = htmlspecialchars($_POST['libelleActivite']);
      $Description = htmlspecialchars($_POST['Description']);
      $JOURHoraire = htmlspecialchars($_POST['JOUR&Horaire']);
      $DUREESEANCE = htmlspecialchars($_POST['DUREESEANCE']);
      $TARIFANNUEL = htmlspecialchars($_POST['TARIFANNUEL']);

      $insertionClient = $connection->prepare('INSERT INTO `activite` (`NACTIVITE`, `NOMLIEU`, `CODESECTION`, `LIBELLEACTIVITE`, `DESCRIPTIONACTIVITE`, `JOUR&Horaire`, `DUREESEANCE`, `TARIFANNUEL`) 
      VALUES(?,?,?,?,?,?,?,?)');
      $insertionClient->execute(array($NActivite,$NOMLIEU,$CODESECTION,$libelleActivite,$Description,$JOURHoraire,$DUREESEANCE,$TARIFANNUEL));

echo '<center><h1>L\'Activité a été bien ajouté !!</h1></center>';
}else{
echo 'Attention, Tous Les Champs Sont Obligatoires !!';
  }
}
//////////////////////////////////////////////////Insertion de Benevole 

if (
  isset($_POST['NOMBENEVOLE']) && isset($_POST['PRENOMBENEVOLE']) && isset($_POST['TELEPHONBENEVOLE']) &&
  isset($_POST['COURRIELBENEVOLE'])
) {
  if (
      !empty($_POST['NOMBENEVOLE']) && !empty($_POST['PRENOMBENEVOLE']) && !empty($_POST['TELEPHONBENEVOLE']) &&
      !empty($_POST['COURRIELBENEVOLE'])
  ) {
      $NOMBENEVOLE= htmlspecialchars($_POST['NOMBENEVOLE']);
      $PRENOMBENEVOLE = htmlspecialchars($_POST['PRENOMBENEVOLE']);
      $TELEPHONBENEVOLE = htmlspecialchars($_POST['TELEPHONBENEVOLE']);
      $COURRIELBENEVOLE = htmlspecialchars($_POST['COURRIELBENEVOLE']);
    

      $insertionClient = $connection->prepare('INSERT INTO `benevole` (`NOMBENEVOLE`, `PRENOMBENEVOLE`, `TELEPHONBENEVOLE`, `COURRIELBENEVOLE`) 
      VALUES(?,?,?,?)');
      $insertionClient->execute(array($NOMBENEVOLE,$PRENOMBENEVOLE,$TELEPHONBENEVOLE,$COURRIELBENEVOLE));

echo '<center><h1>L\'Benevole a été bien ajouté !!</h1></center>';
}else{
echo 'Attention, Tous Les Champs Sont Obligatoires !!';
  }
}
    
//////////////////////////////////////////////////Insertion de Cheque 

if (
  isset($_POST['NCHEQUEADHERENT']) && isset($_POST['NCOMPTEADHERENT']) && isset($_POST['NOMBANQUEADHERENT']) &&
  isset($_POST['MONTANTCHEQUE'])
) {
  if (
      !empty($_POST['NCHEQUEADHERENT']) && !empty($_POST['NCOMPTEADHERENT']) && !empty($_POST['NOMBANQUEADHERENT']) &&
      !empty($_POST['MONTANTCHEQUE'])
  ) {
      $NCHEQUEADHERENT= htmlspecialchars($_POST['NCHEQUEADHERENT']);
      $NCOMPTEADHERENT = htmlspecialchars($_POST['NCOMPTEADHERENT']);
      $NOMBANQUEADHERENT = htmlspecialchars($_POST['NOMBANQUEADHERENT']);
      $MONTANTCHEQUE = htmlspecialchars($_POST['MONTANTCHEQUE']);
    

      $insertionClient = $connection->prepare('INSERT INTO `cheque` (`NCHEQUEADHERENT`, `NCOMPTEADHERENT`, `NOMBANQUEADHERENT`, `MONTANTCHEQUE`) 
      VALUES(?,?,?,?)');
      $insertionClient->execute(array($NCHEQUEADHERENT,$NCOMPTEADHERENT,$NOMBANQUEADHERENT,$MONTANTCHEQUE));

echo '<center><h1>Le Cheque a été bien ajouté !!</h1></center>';
}else{
echo 'Attention, Tous Les Champs Sont Obligatoires !!';
  }
}

//////////////////////////////////////////////////Insertion d'Inscreption 

if (
  isset($_POST['NADHERENT']) && isset($_POST['NCHEQUEADHERENT']) && isset($_POST['NACTIVITE']) &&
  isset($_POST['DATE_INSCRIPTION'])
) {
  if (
      !empty($_POST['NADHERENT']) && !empty($_POST['NCHEQUEADHERENT']) && !empty($_POST['NACTIVITE']) &&
      !empty($_POST['DATE_INSCRIPTION'])
  ) {
      $NADHERENT= htmlspecialchars($_POST['NADHERENT']);
      $NCHEQUEADHERENT = htmlspecialchars($_POST['NCHEQUEADHERENT']);
      $NACTIVITE = htmlspecialchars($_POST['NACTIVITE']);
      $DATE_INSCRIPTION = htmlspecialchars($_POST['DATE_INSCRIPTION']);
    

      $insertionClient = $connection->prepare('INSERT INTO `inscrire` (`NADHERENT`, `NCHEQUEADHERENT`, `NACTIVITE`, `DATE_INSCRIPTION`) 
      VALUES(?,?,?,?)');
      $insertionClient->execute(array($NADHERENT,$NCHEQUEADHERENT,$NACTIVITE,$DATE_INSCRIPTION));

echo '<center><h1>L\'inscreption a été bien ajouté !!</h1></center>';
}else{
echo 'Attention, Tous Les Champs Sont Obligatoires !!';
  }
}

?>