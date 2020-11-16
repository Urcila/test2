<?php

require_once 'classes/recruteur.class.php';


// if (isset($_POST['mail_recruteur']) && isset($_POST['mdp_recruteur'])
//  && isset($_POST['domaine_recruteur']) && isset($_POST['tdc_recruteur']) && isset($_POST['lieu_recruteur']) && isset($_POST['fiche_recuteur'])  && isset($_POST['texte_recruteur'])) {


    if (isset($_POST['mail_recruteur']) && isset($_POST['mdp_recruteur'])) {

        /*
    && !empty($_POST['domaine_recruteur']) && !empty($_POST['tdc_recruteur']) 
    && !empty($_POST['lieu_recruteur']) && !empty($_POST['fiche_recruteur']) 
    && !empty($_POST['texte_recruteur'])  
        */

        $mail_recruteur = htmlentities($_POST['mail_recruteur']);
        $mdp_recruteur = htmlentities($_POST['mdp_recruteur']);
        // $domaine_recruteur = htmlentities($_POST['domaine_recruteur']);
        // $tdc_recruteur = htmlentities($_POST['tdc_recruteur']);
        // $lieu_recruteur = htmlentities($_POST['lieu_recruteur']);
        // $fiche_recruteur = htmlentities($_POST['fiche_recruteur']);
        // $texte_recruteur = htmlentities($_POST['texte_recruteur']);

        $recruteur = new Recruteur();

        $recruteur->mail_recruteur = $mail_recruteur;
        $recruteur->mdp_recruteur = $mdp_recruteur;
        // $recruteur->domaine_recruteur = $domaine_recruteur;
        // $recruteur->tdc_recruteur = $tdc_recruteur;
        // $recruteur->lieu_recruteur = $lieu_recruteur;
        // $recruteur->fiche_recruteur = $fiche_recruteur;
        // $recruteur->texte_recruteur = $texte_recruteur;



        if ($recruteur->create()) {
            header("location:recruteur-connexion.php");
        } else {
            die("Erreur lors de la bdd");
        }
    }
// }
