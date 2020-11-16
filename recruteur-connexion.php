<?php
include "view/header-recru-logo.view.php";
?>

<h1 class="container text-center">Connexion recruteur</h1>

    <p></p>

    <section class="container-fluid">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-12 col-sm-6 col-md-3">
                <form class="form-container">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="col-reverse">
                          <a href="#">mot de passe oublié</a>
                        </div>
                        <button type="submit" class="btn col-one btn-block">Connexion</button>
                        <div class="col-reverse">
                            <a href="candidat-inscription.php">inscription</a>
                        </div>
                 </form>
                </div>  

              </div>
    </section>


<?php
include "view/footer-recru.view.php";
?>
