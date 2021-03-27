<?php
    session_start();

   include 'db_conn.php';


    session_destroy();
    header('location: index.php?logout=succes');
?>