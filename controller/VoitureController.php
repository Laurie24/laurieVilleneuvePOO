<?php

class VoitureController
{

    public function displayOne($id)
    {
        $voitureManager = new voitureManager();
        $voiture = $voitureManager->select($id);
        require 'view/detail.php';
    }

    public function addForm()
    {
        require 'view/insert.php';
    }

    public function persistForm()
    {
        $errors = [];
        if (empty($_POST['energie'])) {
            $errors[] = 'Erreur ! Le champ énergie est requis';
        }
        if (empty($_POST['modele'])) {
            $errors[] = 'Erreur ! Le champ modèle est requis';
        }
        if (empty($_POST['marque'])) {
            $errors[] = 'Erreur ! Le champ marque est requis';
        }
        if (count($errors) === 0) {
            move_uploaded_file($_FILES['image']['tmp_name'], 'asset/images/' . $_FILES['image']['name']);
            $voiture = new Voiture(null, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['estAutomatique'], $_FILES['image']['name']);
            $voitureManager = new voitureManager();
            $voitureManager->insert($voiture);
            header('Location: /voiture/index.php?controller=default&action=home');
            return $_FILES['file'];
        }else{
            require 'view/insert.php';
        }
    }

    public function delete($id)
    {
        $voitureManager = new voitureManager();
        $voitureManager->delete($id);
        header('Location: /voiture/index.php?controller=default&action=home');
    }


}