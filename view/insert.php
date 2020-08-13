<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="box">
    <div class="card">
        <h1>Ajouter une nouvelle voiture</h1>

        <form method="post" action="index.php?controller=voiture&action=addVoiture" enctype="multipart/form-data">
            <label>Marque</label>
            <input name="marque" class="form-control">
            <br>
            <label>Modèle</label>
            <input name="modele" class="form-control">
            <br>
            <label>Energie</label><br>
            <select name="energie">
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
                <option value="Hybride">Hybride</option>
                <option value="Electrique">Electrique</option>

            </select>
            <br>
            <br>
            <label>Boite Automatique</label><br>
            <label for="choix1">Non</label>
            <input type="radio" id="choix1" name="estAutomatique" class="form-control" value="1">
            <label for="choix2">Oui</label>
            <input type="radio" id="choix2" name="estAutomatique" class="form-control" value="0">
            <br>

            <label>Image</label>
            <input type="file" name="image" class="form-control">

            <input class="btn" style="color: white" type="submit" value="Valider">
        </form>
        <?php
        if (isset($errors)) {
            echo('<ul>');
            foreach ($errors as $error) {
                echo('<li>' . $error . '</li>');
            }
            echo('</ul>');
        }
        ?>
    </div>
</div>

</body>
</html>