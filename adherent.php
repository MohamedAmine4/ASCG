<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>adherent</title>
    <link rel="stylesheet" href="DynamicForm.css" type="text/css">
</head>
<body>
	<div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1">
    <center><h2>Ajouter Adherent</h2></center>
    <form method="POST" action="connexion.php">
        <fieldset>
            <legend>Adherent</legend>
            <!-- <div class="NiceInput">
                <label for="i-nom">Num Adherent</label>
                <input type="text" id="i-nom" name="num" required>
            </div> -->
            <div class="NiceInput">
                <label for="i-nom">Nom</label>
                <input type="text" id="i-nom" name="nom" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">Prénom</label>
                <input type="text" id="i-prenom" name="prenom" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">Date Naissance</label>
                <input type="text" id="i-prenom" name="naissance" placeholder="2002-12-12" required>
            </div><div class="NiceInput">
                <label for="i-prenom">Adresse</label>
                <input type="text" id="i-prenom" name="adresse" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">CodePostal</label>
                <input type="text" id="i-prenom" name="codepostal" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">Ville</label>
                <input type="text" id="i-prenom" name="ville" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">telephone</label>
                <input type="text" id="i-prenom" name="telephon" required>
            </div>
            <div class="NiceInput">
                <label for="i-mail">Adresse mail</label>
                <input type="email" id="i-mail1" name="mail1" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">DateAdhesion</label>
                <input type="text" id="i-prenom" name="DateAdhesion" required>
            </div>
            <div class="NiceInput">
                <label for="i-prenom">Age</label>
                <input type="text" id="i-prenom" name="age" required>
            </div>
            <div class="NiceInput">
                <label for="i-mail2">Numero Carte Adherent</label>
                <input type="text" id="i-mail2" name="carte" required>
            </div>
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