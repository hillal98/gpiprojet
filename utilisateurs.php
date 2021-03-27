<?php
include 'header.php';

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Utilisateurs</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Utilisateurs</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body"></div>
                        </div>









                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Utilisateurs </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>


                                                <th>Nom</th>
                                                <th>Nom utlr</th>
                                                <th>Téléphone</th>
                                                <th>adresse</th>
                                                <th>city</th>
                                                <th>zip</th>

                                                <th>naissance</th>

                                                <th>Catégorie </th>
                                                <th>commercial </th>
                                                <th>Email </th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>


<th>Nom</th>
<th>Nom utlr</th>
<th>Téléphone</th>
<th>adresse</th>
<th>city</th>
<th>zip</th>

<th>naissance</th>

<th>Catégorie </th>
<th>commercial </th>
<th>Email </th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

<?php

$sql="SELECT * FROM users";
$result=mysqli_query($database,$sql);
$resultCheck=mysqli_num_rows($result);

  

while( $row3=mysqli_fetch_array($result) ){
?>


                                            <tr>
                                               <td><?php echo $row3['id']; ?></td>
                                               <td><?php echo $row3['name']; ?></td>

                                                <td><?php echo $row3['username']; ?></td>
                                                <td><?php echo $row3['phone']; ?></td>
                                                <td><?php echo $row3['address']; ?></td>

                                                <td><?php echo $row3['city']; ?></td>
                                                <td><?php echo $row3['zip']; ?></td>
                                                <td><?php echo $row3['birthday']; ?></td>
                                                <td><?php echo $row3['category']; ?></td>
                                                <td><?php echo $row3['commercial']; ?></td>
                                                <td><?php echo $row3['email']; ?></td>

                                            
</tr>









                                                <?php
}
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
             


                <?php

include 'footer.php';
?>