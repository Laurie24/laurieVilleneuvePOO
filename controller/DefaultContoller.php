<?php
class DefaultController{

    public function home()
    {
        $voitureManager = new voitureManager();
        $voiture = $voitureManager->selectAll();
        require 'view/home.php';
    }

}