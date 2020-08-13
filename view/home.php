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
    <div class="row">
        <a href="../voiture/index.php?controller=voiture&action=addForm">
            <button style="margin-bottom:10px;" class="btn">Ajouter une voiture</button>
        </a>
    </div>
</div>


<h1>Les voitures</h1>




<div class="box">
    <table class="table shadow">
        <thead>
        <td>@Id</td>
        <td>Marque</td>
        <td>Modèle</td>
        <td>Energie</td>
        <td>Boite automatique</td>
        <td>Image</td>
        <td>Action</td>
        </thead>

        <tbody>
        <?php
        foreach ($voiture as $voiture) {
            ?>
            <tr>
                <td><?php echo $voiture->getId();?></td>
                <td><?php echo $voiture->getMarque();?></td>
                <td><?php echo $voiture->getModele();?></td>
                <td><?php echo $voiture->getEnergie();?></td>
                <td><?php if ($voiture->getEstAutomatique() == 0){
                    echo 'Non';
                    }  else{
                    echo 'Oui';
                    } ;?></td>
                <td><img width="200px" height="auto" src="<?php echo 'asset/images/'.$voiture->getImage() ?>"</td>

                <td>
                    <a href="../voiture/index.php?controller=voiture&action=displayOne&id=<?php echo $voiture->getId()?>">Détail</a>
                    <a href="../voiture/index.php?controller=voiture&action=delete&id=<?php echo $voiture->getId()?>">Supprimer</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>



</body>
</html>