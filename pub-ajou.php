<?php
include 'header.php';

include 'db_conn.php';

// REGISTER USER
if (isset($_POST['ajouter']) &&  !empty($_POST['service']) ) {
    // receive all input values from the form
    $category = mysqli_real_escape_string($database, $_POST['category']);
    $residance = mysqli_real_escape_string($database, $_POST['residance']);
    $client = mysqli_real_escape_string($database, $_POST['client']);
    $cataloge = mysqli_real_escape_string($database, $_POST['cataloge']);
    $age1 = mysqli_real_escape_string($database, $_POST['age1']);
    $age2 = mysqli_real_escape_string($database, $_POST['age2']);

    $name = mysqli_real_escape_string($database, $_POST['name']);

    $descr = mysqli_real_escape_string($database, $_POST['desc']);
    $type="no";
    $date=date("Y/m/d");
    $check = mysqli_real_escape_string($database, $_POST['service']);
    $chk="";  
    foreach($_POST['service'] as $chk1)  
     {  
      $chk .= $chk1.",";  
     } 


     if($cataloge=="1"){

        $rand = rand() ;

        $target_dir = "uploads/";
        $target_file = $target_dir . $rand.'-'.basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        
        
        
        
        
        
        
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
          } else {
            echo "Sorry, there was an error uploading your file.";
            header('location: pub-ajou.php?ajou=e');
        
          }
        }
        }
 
    
    

        $query = "INSERT INTO pub (name,descr,type,articles,state,date,client,category,cataloge,age1,age2) 
                  VALUES('$name','$descr','$type','$chk', '$residance', '$date', '$client', '$category', '$target_file', '$age1', '$age2')";
        mysqli_query($database, $query);

        $last_id = mysqli_insert_id($database);

   

      
        header('location: pub-ajou.php?ajou=s');
    }



?>
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
     <script type="text/javascript">
$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("Il faut choisir un article au minimum.");
        return false;
      }


      if(checked>5) {
        alert("Il faut choisir 5 articles au max.");
        return false;
      }

      

    });

    

    var limit = 5;
$('input.checkbox').on('click', function (evt) {
    if ($('.checkbox:checked').length > limit) {
        this.checked = false;
    }
});


});

</script>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Ajouter une Publicité</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Saisir des critères de sélection d’individus</li>
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
                Publicité ajouter avec succée</p>
            </div>
        </div>

<?php
}
?>



                        <form method="post" action="pub-ajou.php" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Catégorie socio-professionnelle</label>
      <select id="inputState" class="form-control"  name="category" required>
      <option value="1"  >Artisans. commerçants. chefs entreprise	</option>
        <option value="2" >Cadres et professions intellectuelles supérieures		</option>
        <option value="3" >Professions intermédiaires		</option>
        <option value="4" >Employés		</option>
        <option value="5" >Ouvriers		</option>
        <option value="6" >Retraités</option>
        <option value="7" >Autres personnes sans activité professionnelle	</option>
      </select>    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Département de résidence</label>
      <input type="text" class="form-control"  placeholder="résidence" name="residance" required>
       </div>
       <div class="form-group col-md-2">
      <label for="inputPassword4">Age</label>
      <input type="number" class="form-control"  placeholder="De" name="age1" required>
      <input type="number" class="form-control"  placeholder="a" name="age2" required>

       </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Sélection d’individus déjà clients ou non</label>
      <select id="inputState" class="form-control"  name="client" required>
        <option value="oui" selected> déjà clients</option>
        <option value="non">Non</option>
      </select>
       </div>
  </div><br><br>
  <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Créer la publicité </li>
                        </ol>



<div class="row">

   <div class="form-group col-md-3">
      <label for="inputPassword4">catalogue papier ou canaux Internet</label>
      <select id="selector" class="form-control" name="cataloge" required>
        <option value="1" selected> catalogue</option>
        <option value="2">canaux Internet</option>
      </select>
       </div>
       <div class="form-group col-md-1">
       </div>

  <div class="form-group colors  col-md-4" id="1">
    <label for="exampleFormControlFile1">choisir catalogue papier</label>
    <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload" required>
  </div>
  </div>
<br>
<div class="row">

  <div class="form-group col-md-4">
      <label for="inputPassword4">Titre</label>
      <input type="text" class="form-control"  placeholder="Titre" name="name" required>
      </div>
      </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required></textarea>
  </div>
  <br>
  <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Choisir Les Articles </li>
                        </ol>



<div class="row" style="    justify-content: center;">


<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th></th>

                                            <th>ID</th>

                                                <th>Nom</th>
                                                <th>Prix</th>

                                                <th>Quantité</th>

                                                <th>Description</th>
                                             
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th></th>

                                            <th>ID</th>

<th>Nom</th>
<th>Prix</th>

<th>Quantité</th>

<th>Description</th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

<?php


$sql="SELECT * FROM article ";
$result=mysqli_query($database,$sql);
$resultCheck=mysqli_num_rows($result);






while( $row3=mysqli_fetch_array($result) ){

    

?>


<tr >
<td>  
 <label class="customcheck">
          <input type="checkbox" value="<?php echo $row3['id']; ?>" name="service[]" class="checkbox"   data-validation-minchecked-minchecked="2" 
          data-validation-minchecked-message="Choose at least two" >
          <span class="checkmark"></span>
        </label>
</td>
                                               <td><?php echo $row3['id']; ?></td>

                                                <td><?php echo $row3['name']; ?></td>
                                                <td><?php echo $row3['price']; ?></td>

                                                <td><?php echo $row3['quantity']; ?></td>
                                                <td><?php echo $row3['descr']; ?></td>
                                               







                                               
</tr>









                                                <?php
}
                                                ?>
                                        </tbody>
                                    </table>

                                   

</div>
<br>
                                    <br>
                
           
<div class="row" style="justify-content: center;">
  <button type="submit" class="btn btn-success" name="ajouter" style="height: 55px;
    width: 120px;
    font-size: 20px;"  id="checkBtn">Ajouter</button></div>
    </form>      

<br>
<br>
<br>
<br>

<script> 
 $(function() {

        $('#selector').change(function(){
            $('#fileToUpload').prop('required',false);

            $('.colors').hide();
            

            $('#' + $(this).val()).show();



        });
    });
</script>
         </div>
                </main>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
