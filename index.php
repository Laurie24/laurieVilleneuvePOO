<?php

require_once 'model/class/voiture.php';
require_once 'model/manager/bdManager.php';
require_once 'model/manager/voitureManager.php';
require_once 'controller/DefaultContoller.php';
require_once 'controller/VoitureController.php';


if(empty($_GET) or ($_GET['controller'] === 'default' && $_GET['action'] === 'home')) {
    $VoitureController = new DefaultController();
    $VoitureController->home();
}
else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'addForm'){
    $VoitureController = new VoitureController();
    $VoitureController->addForm();
}
else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'addVoiture'){
    $VoitureController = new VoitureController();
    $VoitureController->persistForm();
}
else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'displayOne' && isset($_GET['id'])){
    $VoitureController = new VoitureController();
    $VoitureController->displayOne($_GET['id']);
}
else if($_GET['controller'] === 'voiture' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $VoitureController = new VoitureController();
    $VoitureController->delete($_GET['id']);
}

else {
    throw new Exception('La page demandée n\'existe pas', 404);
}
