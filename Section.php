<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>section</title>
    <link rel="stylesheet" href="DynamicForm.css" type="text/css">
</head>
<body>
	<div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1">
    <center><h2>Ajouter Section</h2></center>
    <form method="POST" action="connexion.php">
        <fieldset>
            <legend>Section</legend>
            <div class="NiceInput">
                <label for="i-nom">Code Section</label>
                <input type="text" id="i-nom" name="code" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">libelle</label>
                <input type="text" id="i-prenom" name="libelle" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">Date Debut Saison</label>
                <input type="text" id="i-prenom" name="saison" placeholder="2023-12-12"required>
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