<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="header">
    <div class="row">
        <a class="logo" href="../voiture/index.php?controller=default&action=home"><img style="width: 12rem"
                                                                                        src="asset/images/logo.png"></a>

    </div>
</div>
<h1>Détail de ma voiture</h1>
<div class="row justify-content-center">
    <div class="card shadow" style="width: 25rem;">

        <div class="card-body">
            <h2><?php echo($voiture->getMarque()) ?></h2><br>
            <h4><?php echo($voiture->getModele()) ?></h4><br>
            <div>Energie : <?php echo($voiture->getEnergie()) ?></div><br>
            <div>Boite Automatique : <?php if ($voiture->getEstAutomatique() == 1){
                    echo 'Non';
                }  else{
                    echo 'Oui';
                } ;?></div><br>
            <div><img width="200px" height="auto" src="<?php echo 'asset/images/'.$voiture->getImage() ?>"</div>
        </div>
    </div>
</div>

</body>
</html>