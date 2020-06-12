<?php
define("WEBROOT","http://localhost/DATAQuizzB");
    define("ACTION","action");
    require_once("./traitement/control.php");
    require_once("./data/bass.php");
    if(isset($_GET[ACTION]))
    {

        if($_GET[ACTION]=='connexion')
        {

            pageConnexion($_POST);
        }
        else if($_GET[ACTION]=='inscription');
        {
                require_once './pages/joueur/inscription.php';
        }
        }














?>