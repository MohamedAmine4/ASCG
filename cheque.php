<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>cheque</title>
    <link rel="stylesheet" href="DynamicForm.css" type="text/css">


</head>
<body>
	<div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1">
    <center><h2>Ajouter Cheque</h2></center>
    <form method="POST" action="connexion.php">
        <fieldset>
            <legend>Cheque</legend>
            <div class="NiceInput">
                <label for="i-prenom">	NCHEQUE ADHERENT </label>
                <input type="text" id="i-prenom" name="NCHEQUEADHERENT" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">NCOMPTE ADHERENT</label>
                <input type="text" id="i-nom" name="NCOMPTEADHERENT" required>
        <div>
        <div class="NiceInput">
                <label for="i-prenom">NOM BANQUE ADHERENT</label>
                <input type="text" id="i-prenom" name="NOMBANQUEADHERENT" required>
        <div>
        <div class="NiceInput">
                <label for="i-prenom">MONTANT CHEQUE</label>
                <input type="text" id="i-prenom" name="MONTANTCHEQUE" required>
        <div>
            <p>
                <input type="submit" id="submit" value="Envoyer">
                <input type="RESET" value="Annuler">
            </p>
        </div> 
    </fieldset>
</form>
</div></div></div>
</body>
</html>