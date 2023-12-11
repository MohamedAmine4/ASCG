<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Inscreption</title>
    <link rel="stylesheet" href="DynamicForm.css" type="text/css">
    <style>
      .box {
        width: 120px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: #1c87c9;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px #ccc;
      }
    </style>    
</head>

<body>
	<div class="landing-page"><div class="form-appointment"><div class="wpcf7" id="wpcf7-f560-p590-o1">
    <center><h2>Ajouter Inscreption</h2></center>
    <form method="POST" action="connexion.php">
        <fieldset>
            <legend>Inscreption</legend>
            <!-- <div class="NiceInput">
                <label for="i-nom">Num Adherent</label>
                <input type="text" id="i-nom" name="num" required>
            </div> -->
            <div class="NiceInput">
    <label for="i-prenom">NOM ADHERENT</label>
    <br>
    <select class="box" style="width:800px;" aria-label="Default select example" id="i-prenom" name="NADHERENT" required>
    <?php
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ascg2";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        // Requête pour récupérer les données depuis une table (ajustez selon votre base de données)
        $sql = "SELECT * FROM adherent";
        $result = $conn->query($sql);

        // Afficher les options du select
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['NADHERENT'] . "'>" . $row['NOMADHERENT'] . "</option>";
            }
        } else {
            echo "<option value=''>Aucune donnée trouvée</option>";
        }
        ?>
      </select>
     </div>
     <br>
     <div class="NiceInput">
    <label for="i-prenom" >NCHEQUEADHERENT</label>
    <label for="nom" style="color: gray;">(Noter Bien!!! il faut ajouter le cheque de cette adeherent avant l'inscreption)</label>
    <br>
    <select class="box" style="width:800px;" aria-label="Default select example" id="i-prenom" name="NCHEQUEADHERENT" required>
    <?php
    
        $sql = "SELECT NCHEQUEADHERENT FROM cheque";
        $result = $conn->query($sql);

        // Afficher les options du select
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['NCHEQUEADHERENT'] . "'>" . $row['NCHEQUEADHERENT'] . "</option>";
            }
        } else {
            echo "<option value=''>Aucune donnée trouvée</option>";
        }

        // Fermer la connexion à la base de données
      
        ?>
      </select>
     </div>
     <br>
        <div class="NiceInput">
            <label for="i-mail2">NACTIVITE</label>
            <select class="box" style="width:800px;" aria-label="Default select example" id="i-prenom" name="NACTIVITE" required>
            <?php
        // Requête pour récupérer les données depuis une table (ajustez selon votre base de données)
        $sql = "SELECT * FROM activite";
        $result = $conn->query($sql);

        // Afficher les options du select
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['NACTIVITE'] . "'>" . $row['LIBELLEACTIVITE'] . "</option>";
            }
        } else {
            echo "<option value=''>Aucune donnée trouvée</option>";
        }

        // Fermer la connexion à la base de données
        $conn->close();
        ?>
            </select>
        </div>
        <br>
            <div class="NiceInput">
                <label for="i-prenom">DATE_INSCRIPTION</label>
                <input type="text" id="i-prenom" name="DATE_INSCRIPTION" placeholder="2023-12-12" required>
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