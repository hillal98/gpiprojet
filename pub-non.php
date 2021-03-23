<?php
include 'header.php';

?>



            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Publicté non Active</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Publicté non Active</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body"></div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Publicté non Active </div>
                            <div class="card-body">
                                <div class="table-responsive">



                          
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>ID</th>

                                                <th>Titre</th>
                                                <th>Description</th>

                                                <th>Catégorie</th>
                                                <th>Age</th>

                                                <th>Département</th>

                                             
                                                <th>client</th>
                                                <th>date</th>

                                                <th>catalogue </th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>ID</th>

<th>Titre</th>
<th>Description</th>

<th>Catégorie</th>
<th>Age</th>

<th>Département</th>


<th>client</th>
<th>date</th>

<th>catalogue </th>

                                            </tr>
                                        </tfoot>
                                        <tbody>

<?php


$sql="SELECT * FROM pub ";
$result=mysqli_query($database,$sql);
$resultCheck=mysqli_num_rows($result);






while( $row3=mysqli_fetch_array($result) ){

    

?>


<tr >


                                               <td><?php echo $row3['id']; ?></td>

                                                <td><?php echo $row3['name']; ?></td>
                                                <td><?php echo $row3['descr']; ?></td>

                                                <td><?php echo $row3['category']; ?></td>
                                                <td><?php echo $row3['age1']; ?> - <?php echo $row3['age2']; ?></td>
                                                <td><?php echo $row3['state']; ?></td>
                                                <td><?php echo $row3['client']; ?></td>
                                                <td><?php echo $row3['date']; ?></td>
                                                <td><a href="<?php echo $row3['cataloge']; ?>">catalogue</a></td>








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