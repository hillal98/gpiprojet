<?php


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
        <title>Connexion Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Connexion Admin</h3></div>
                                    <div class="card-body">
                                        <form action="login-admin.php" method="post">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">Nom d'Utilisateur</label><input class="form-control py-4" id="inputEmailAddress" type="text" placeholder="Enter email address" name="email" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Mots de Passe</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" /></div>
                                          
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="password.html"></a><button class="btn btn-primary"  name="login_button_admin" type="submit">Connexion</button></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php" style="margin-right:30px">S'inscrire</a>  <a href="login.php">Connexion</a>  
                                        <?php    include('errors.php');?> 
 
</div>
                           </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
