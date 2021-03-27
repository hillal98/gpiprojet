<?php

include 'db_conn.php';

include('server.php');

include 'login-page-den.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>S'inscrire</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Crée un compte</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="server-reg.php">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName"> Nom d'Utilisateur</label><input class="form-control py-4" id="inputFirstName" type="text" placeholder="Nom d'Utilisateur" name="username"  required></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputLastName"> Nom et prénom</label><input class="form-control py-4" id="inputLastName" type="text" placeholder="Nom et prénom" name="name"  required></div>
                                                </div>
                                            </div>


                                            <div class="form-row">
                                                <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Email</label><input  aria-describedby="emailHelp" class="form-control py-4" id="inputEmailAddress" type="email"   placeholder="  email address" name="email"  required></div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Date de naissance</label><input class="form-control py-4" id="inputEmailAddress" type="date"   placeholder="Date de naissance"   name="birthday"  required></div>
                                                </div>
                                            </div>
                                            

                                            <div class="form-row">
                                                <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Adresse </label><input class="form-control py-4" id="inputEmailAddress" type="text"   placeholder="Adresse" name="address"   required></div>
                                                </div>
                                                <div class="col-md-3">
                                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">code postal</label><input class="form-control py-4" id="inputEmailAddress" type="text"   placeholder="code" name="zip"  required></div>
                                                </div>
                                                <div class="col-md-3">
                                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Ville</label><input class="form-control py-4" id="inputEmailAddress" type="text"   placeholder="Ville" name="city"  required></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">	Numéro de téléphone </label><input class="form-control py-4" id="inputEmailAddress" type="text"   placeholder=" Numéro de téléphone"  name="phone"  required></div>
                                                </div>
                                                <div class="col-md-6">

                                                <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Catégorie socio-professionnelle </label>
      <select id="inputState" class="form-control"  name="category"  required>
        <option selected>Choisir...</option>
        <option value="1"  >Artisans. commerçants. chefs entreprise	</option>
        <option value="2" >Cadres et professions intellectuelles supérieures		</option>
        <option value="3" >Professions intermédiaires		</option>
        <option value="4" >Employés		</option>
        <option value="5" >Ouvriers		</option>
        <option value="6" >Retraités</option>
        <option value="7" >Autres personnes sans activité professionnelle	</option>

      </select>
                     

    </div>        </div>    </div>    



                                           
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="  password" name="pass"  required></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" name="pass1"  required></div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" type="submit" name="signup_button">Crée un compte</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.php">Aller à la connexion</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main><br>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
