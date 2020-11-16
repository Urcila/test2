<?php 

include "view/header-recru-logo.view.php";

include 'classes/recruteur.class.php';

if(isset($_POST['mail_recruteur']) && isset($_POST['mdp_recruteur']) && isset($_POST['domaine_recruteur']) && isset($_POST['tdc_recruteur']) && isset($_POST['lieu_recruteur']) && isset($_POST['fiche_recuteur'])  && isset($_POST['texte_recruteur'])){

    if (!empty($_POST['mail_recruteur']) && !empty($_POST['mdp_recruteur'])) {
    
        /*
    && !empty($_POST['domaine_recruteur']) && !empty($_POST['tdc_recruteur']) 
    && !empty($_POST['lieu_recruteur']) && !empty($_POST['fiche_recruteur']) 
    && !empty($_POST['texte_recruteur'])  
        */

        $mail_recruteur = htmlentities($_POST['mail_recruteur']);
        $mdp_recruteur = htmlentities($_POST['mdp_recruteur']);
        $domaine_recruteur = htmlentities($_POST['domaine_recruteur']);
        $tdc_recruteur = htmlentities($_POST['tdc_recruteur']);
        $lieu_recruteur = htmlentities($_POST['lieu_recruteur']);
        $fiche_recruteur = htmlentities($_POST['fiche_recruteur']);
        $texte_recruteur = htmlentities($_POST['texte_recruteur']);

       $recruteur->mail_recruteur = $mail_recruteur;
       $recruteur->mdp_recruteur = $mdp_recruteur;
       $recruteur->domaine_recruteur = $domaine_recruteur;
       $recruteur->tdc_recruteur = $tdc_recruteur;
       $recruteur->lieu_recruteur = $lieu_recruteur;
       $recruteur->fiche_recruteur = $fiche_recruteur;
       $recruteur->texte_recruteur = $texte_recruteur;



        if($recruteur->create()){
            header("location:recruteur-connexion.php");
        } else {
            die("Erreur lors de la bdd");
        }

    }
}

?>

    <h1 class="container text-center">Inscription</h1>
    
    <section>
        <div class="container">
            <div class="row justify-content-around">
                <form class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Votre mail</label>
                        <input type="email" class="form-control" id="mail_recruteur" name="mail_recruteur" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputEmail1">Confirmer votre mail</label>
                            <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    <div class="form-group">
                        <label for="mail_recruteur">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp_recruteur" name="mdp_recruteur" placeholder="Password">
                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Confirmer votre mot de passe</label>
                            <input type="password" class="form-control"  placeholder="Password">
                    </div>
                </form>
                <form class="col-md-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Entreprise</label>
                        <input type="text" class="form-control" placeholder="entreprise">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Siret</label>
                        <input type="text" class="form-control" placeholder="siret">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="form-row text-center">
            <div class="col-12">
                <button type="submit" class="btn col-reverse ">Enregistrer</button>
            </div>
    </div>

<?php include "view/footer-recru.view.php";?>