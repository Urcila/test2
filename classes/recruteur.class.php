<?php

require_once 'database.class.php';

class Recruteur extends Database
{
	public $id_recruteur;
    public $mail_recruteur;
    public $mdp_recruteur;
    public $domaine_recruteur;
    public $tdc_recruteur;
	public $lieu_recruteur;
    public $fiche_recruteur;
    public $texte_recruteur;

	public $bdd;

	public function __construct() {
		$this->bdd = $this->getConnexion();
	}

	public function create(){
        $requete = $this->bdd->prepare("INSERT INTO recruteur (mail_recruteur, mdp_recruteur domaine_recruteur, tdc_recruteur,  lieu_recruteur, fiche_recruteur, texte_recruteur) 
                                        VALUES (:mail_recruteur, :mdp_recruteur :domaine_recruteur, :tdc_recruteur, :lieu_recruteur, :fiche_recruteur, :texte_recruteur)");
        
        $requete->bindValue(":mail_recruteur", $this->mail_recruteur);
        $requete->bindValue(":mdp_recruteur", $this->mdp_recruteur);
        $requete->bindValue(":domaine_recruteur", $this->domaine_recruteur);
        $requete->bindValue(":tdc_recruteur", $this->tdc_recruteur);
        $requete->bindValue(":lieu_recruteur", $this->lieu_recruteur);
        $requete->bindValue(":fiche_recruteur", $this->fiche_recruteur);
        $requete->bindValue(":texte_recruteur", $this->texte_recruteur);        

        $resultat = $requete->execute();

        if($resultat) {
        	return true;
        }
        else {
        	return false;
        }
	}

    /*
	public function find() {

		$requete = $this->bdd->prepare("SELECT * FROM recruteur WHERE id_recruteur=:id");
		$requete->execute(['id' => $this->id_recruteur]);

		$row = $requete->fetch();

        $this->mail_recruteur = $row['mail_recruteur'];      
		$this->mdp_recruteur = $row['mdp_recruteur'];
        $this->domaine_recruteur= $row['domaine_recruteur'];
        $this->tdc_recruteur = $row['tdc_recruteur'];
        $this->lieu_recruteur = $row['lieu_recruteur'];	
        $this->fiche_recruteur = $row['fiche_recruteur'];
		$this->texte_recruteur = $row['texte_recruteur'];			
	}

    */

	public function findAll() {
		$requete = $this->bdd->query("SELECT * FROM recruteur");
		$recruteurs = $requete->fetchAll(PDO::FETCH_ASSOC);

		return $recruteurs;
	}

	public function update(){
		$requete = $this->bdd->prepare("UPDATE recruteur SET mail_recruteur = :mail_recruteur, mdp_recruteur = :mdp_recruteur, domaine_recruteur = :domaine_recruteur, tdc_recruteur = :tdc_recruteur, lieu_recruteur = :lieu_recruteur, fiche_recruteur = :fiche_recruteur, texte_recruteur = :texte_recruteur
         WHERE id_recruteur = :id");

        $requete->bindValue(":mail_recruteur", $this->mail_recruteur);
        $requete->bindValue(":mdp_recruteur", $this->mdp_recruteur);
        $requete->bindValue(":domaine_recruteur", $this->domaine_recruteur);
        $requete->bindValue(":tdc_recruteur", $this->tdc_recruteur);
        $requete->bindValue(":lieu_recruteur", $this->lieu_recruteur);
        $requete->bindValue(":fiche_recruteur", $this->fiche_recruteur);
        $requete->bindValue(":texte_recruteur", $this->texte_recruteur);  

        $resultat = $requete->execute();

        if($resultat) {
        	return true;
        }
        else {
        	return false;
        }		

	}

	public function delete(){
		$requete = $this->bdd->prepare("DELETE FROM recruteur WHERE id_recruteur=:id");
		$resultat = $requete->execute(['id' => $this->id_recruteur]);

		if($resultat) {
			return true;
		}
		else {
			return false;
		}

    }
}


