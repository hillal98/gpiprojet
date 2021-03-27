<?php
include 'header.php';

?>



            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Articles</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Articles</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body"></div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Articles </div>
                            <div class="card-body">
                                <div class="table-responsive">




                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>

                                                <th>Nom</th>
                                                <th>Prix</th>

                                                <th>Quantité</th>

                                                <th>Description</th>
                                             
                                                <th>Suprimer</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>

<th>Nom</th>
<th>Prix</th>

<th>Quantité</th>

<th>Description</th>

<th>Suprimer</th>
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
                                               <td><?php echo $row3['id']; ?></td>

                                                <td><?php echo $row3['name']; ?></td>
                                                <td><?php echo $row3['price']; ?></td>

                                                <td><?php echo $row3['quantity']; ?></td>
                                                <td><?php echo $row3['descr']; ?></td>
                                               







                                                <form action="delete.php" method="post">
                                                <input type="hidden" value="delete_offers" name="location">

                                                <input type="hidden" value="<?php echo $row3['id']; ?>" name="id">
<td><button name="submit"><div class="sb-nav-link-icon"><i class="fas fa-trash-alt"></i></div></button></td></form>
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