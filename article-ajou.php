<?php
include 'header.php';

include 'db_conn.php';

// REGISTER USER
if (isset($_POST['ajouter']) ) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($database, $_POST['name']);

    $price = mysqli_real_escape_string($database, $_POST['price']);
    $descr = mysqli_real_escape_string($database, $_POST['desc']);
    $quantity = mysqli_real_escape_string($database, $_POST['quantity']);

    
          
    
    
        $query = "INSERT INTO article (name, price, descr,quantity) 
                  VALUES('$name', '$price', '$descr', '$quantity')";
        mysqli_query($database, $query);




      
        header('location: article-ajou.php?ajou=s');
    }



?>

<div id="layoutSidenav_content">
                <main>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

                    <div class="container-fluid">
                        <h1 class="mt-4">Ajouter un article</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Ajouter un article</li>
                        </ol>

                        <?php
$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl, "ajou=s") ==True){?>


<div class="col-sm-10 col-md-10">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Message de réussite</strong>
                <hr class="message-inner-separator">
                <p>
                    Article ajouter avec succée</p>
            </div>
        </div>

<?php
}
?>


                        <form method="post" action="#">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control"  placeholder="Nom" name="name" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">prix</label>
      <input type="number" class="form-control" placeholder="prix" name="price" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Quantité</label>
      <input type="number" class="form-control" placeholder="Quantité" name="quantity" required>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
</form>           <?php
include 'header.php';

include 'db_conn.php';

// REGISTER USER
if (isset($_POST['ajouter']) ) {
    // receive all input values from the form
    $name = mysqli_real_escape_string($database, $_POST['name']);

    $price = mysqli_real_escape_string($database, $_POST['price']);
    $descr = mysqli_real_escape_string($database, $_POST['desc']);
    $quantity = mysqli_real_escape_string($database, $_POST['quantity']);

    
          
    
    
        $query = "INSERT INTO article (name, price, descr,quantity) 
                  VALUES('$name', '$price', '$descr', '$quantity')";
        mysqli_query($database, $query);




      
        header('location: article-ajou.php?ajou=s');
    }



?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ajouter un article</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Ajouter un article</li>
                        </ol>

                        <?php
$fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($fullUrl, "ajou=s") ==True){?>


<div class="col-sm-10 col-md-10">
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                    ×</button>
               <span class="glyphicon glyphicon-ok"></span> <strong>Message de réussite</strong>
                <hr class="message-inner-separator">
                <p>
                    Article ajouter avec succée</p>
            </div>
        </div>

<?php
}
?>


                        <form method="post" action="#">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control"  placeholder="Nom" name="name" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">prix</label>
      <input type="number" class="form-control" placeholder="prix" name="price" required>
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Quantité</label>
      <input type="number" class="form-control" placeholder="Quantité" name="quantity" required>
    </div>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
</form>           
