<?php
include "view/header-cand-nav.view.php";
?>


    <h1 class="container text-center">Informations</h1>

    <section>
        <div class="container">
            <div class="row justify-content-around">
                <form class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mail</label>
                        <input type="email" class="form-control" value="mail" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" value="******" disabled>
                    </div>
                </form>
                <form class="col-md-4">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Domaine</label>
                        <input type="text" class="form-control" value="le domaine choisi" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Type de contrat</label>
                        <input type="text" class="form-control" value="le Tdc choisi" disabled >
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Lieu</label>
                        <input type="text" class="form-control" value="le lieu choisi" disabled >
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn col-one ">Mon CV</button>
                    </div>
                </form>
            </div>
        </div>
    </section>



    
    <div class="form-row text-center">
        <div class="col-12">
            <button type="submit" class="btn col-one ">Modifier</button>
        </div>
    </div>


<?php
include "view/footer-cand.view.php";
?>
