<?php

include "view/header-recru-logo.view.php";

include 'classes/recruteur.class.php';

?>

<h1 class="container text-center">Inscription</h1>

<section>
    <div class="container">
        <div class="row justify-content-around">
            <form class="col-md-4" action="action.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Votre mail</label>
                    <input type="email" class="form-control" id="mail_recruteur" name="mail_recruteur" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Confirmer votre mail</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="mail_recruteur">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp_recruteur" name="mdp_recruteur" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirmer votre mot de passe</label>
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <!-- </form> -->
                <!-- <form class="col-md-4"> -->
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Entreprise</label>
                    <input type="text" class="form-control" placeholder="entreprise">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Siret</label>
                    <input type="text" class="form-control" placeholder="siret">
                </div>
                <div class="form-row text-center">
                    <div class="col-12">
                        <button type="submit" class="btn col-reverse ">Enregistrer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<?php include "view/footer-recru.view.php"; ?>