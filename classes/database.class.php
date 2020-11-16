
<?php

class Database 
{
    private $hote = "localhost";
    private $bdd = "job-anonyme";
    private $user = "root";
    private $mdp = "";

    public function getConnexion() {
        error_log("getConnexion");

        try {
            $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
            $this->connexion = new PDO("mysql:host=" . $this->hote . ";dbname=" . $this->bdd, $this->user, $this->mdp);

        } catch (Exception $e) {
            echo $e->getMessage() . "<br>";

            die("<h1>Erreur lors de la connexion à la base de données</h1>");
        }

        return $this->connexion; 
    }
}