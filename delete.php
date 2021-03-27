<?php

include 'db_conn.php';
if(isset($_POST['submit']) && $_POST['location']=="delete_offers"){

  $id = mysqli_real_escape_string($database, $_POST['id']);

  $query = "DELETE FROM article WHERE id='$id' ";

    
  mysqli_query($database, $query);
        header('location: articles.php?delete=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="aprov_offers"){

          $id = mysqli_real_escape_string($database, $_POST['id']);
          
      
      
           
      
          $query= mysqli_query($database,"UPDATE company_offers SET approved='yes' WHERE id='$id'");
      
          
          mysqli_query($database, $query);
                header('location: offers.php?approv=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="aprov_ccp"){

  $id = mysqli_real_escape_string($database, $_POST['id']);
  
  $id_user = mysqli_real_escape_string($database, $_POST['id_user']);
  $balance = mysqli_real_escape_string($database, $_POST['balance']);
  $some_sans = mysqli_real_escape_string($database, $_POST['some_sans']);

$balancenew=$balance+$some_sans;
   

  $query= mysqli_query($database,"UPDATE transaction_user SET approved='yes' WHERE id='$id'");

  
  mysqli_query($database, $query);

  $query1= mysqli_query($database,"UPDATE register_user SET balance='$balancenew' WHERE id='$id_user'");


  mysqli_query($database, $query1);

        header('location: depots.php?approv=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="delete_ccp"){

      $id = mysqli_real_escape_string($database, $_POST['id']);
    
      $query = "DELETE FROM transaction_user WHERE id='$id' ";
    
        
      mysqli_query($database, $query);
            header('location: depots.php?delete=succes');
}



elseif(isset($_POST['submit']) && $_POST['location']=="aprov_ccp_company"){

      $id = mysqli_real_escape_string($database, $_POST['id']);
      
      $id_user = mysqli_real_escape_string($database, $_POST['id_user']);
      $balance = mysqli_real_escape_string($database, $_POST['balance']);
      $some_sans = mysqli_real_escape_string($database, $_POST['some_sans']);
    
    $balancenew=$balance+$some_sans;
       
    
      $query= mysqli_query($database,"UPDATE transaction_company SET approved='yes' WHERE id='$id'");
    
      
      mysqli_query($database, $query);
    
      $query1= mysqli_query($database,"UPDATE register_company SET balance='$balancenew' WHERE id='$id_user'");
    
    
      mysqli_query($database, $query1);
    
            header('location: depots-company.php?approv=succes');
    }elseif(isset($_POST['submit']) && $_POST['location']=="delete_ccp_company"){
    
          $id = mysqli_real_escape_string($database, $_POST['id']);
        
          $query = "DELETE FROM transaction_company WHERE id='$id' ";
        
            
          mysqli_query($database, $query);
                header('location: depots-company.php?delete=succes');
    }


elseif(isset($_POST['submit']) && $_POST['location']=="aprov_baridi"){

      $id = mysqli_real_escape_string($database, $_POST['id']);
      
      $id_user = mysqli_real_escape_string($database, $_POST['id_user']);
      $balance = mysqli_real_escape_string($database, $_POST['balance']);
      $some_sans = mysqli_real_escape_string($database, $_POST['some_sans']);
    
    $balancenew=$balance+$some_sans;
       
    
      $query= mysqli_query($database,"UPDATE transaction_user SET approved='yes' WHERE id='$id'");
    
      
      mysqli_query($database, $query);
    
      $query1= mysqli_query($database,"UPDATE register_user SET balance='$balancenew' WHERE id='$id_user'");
    
    
      mysqli_query($database, $query1);
    
            header('location: baridi.php?approv=succes');
    }elseif(isset($_POST['submit']) && $_POST['location']=="delete_baridi"){
    
          $id = mysqli_real_escape_string($database, $_POST['id']);
        
          $query = "DELETE FROM transaction_user WHERE id='$id' ";
        
            
          mysqli_query($database, $query);
                header('location: baridi.php?delete=succes');
    }


    elseif(isset($_POST['submit']) && $_POST['location']=="aprov_baridi_company"){

      $id = mysqli_real_escape_string($database, $_POST['id']);
      
      $id_user = mysqli_real_escape_string($database, $_POST['id_user']);
      $balance = mysqli_real_escape_string($database, $_POST['balance']);
      $some_sans = mysqli_real_escape_string($database, $_POST['some_sans']);
    
    $balancenew=$balance+$some_sans;
       
    
      $query= mysqli_query($database,"UPDATE transaction_company SET approved='yes' WHERE id='$id'");
    
      
      mysqli_query($database, $query);
    
      $query1= mysqli_query($database,"UPDATE register_company SET balance='$balancenew' WHERE id='$id_user'");
    
    
      mysqli_query($database, $query1);
    
            header('location: baridi-company.php?approv=succes');
    }
    elseif(isset($_POST['submit']) && $_POST['location']=="delete_baridi_company"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);
    
      $query = "DELETE FROM transaction_company WHERE id='$id' ";
    
        
      mysqli_query($database, $query);
            header('location: baridi-company.php?delete=succes');
}


elseif($_POST['location']=="track"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);
      $select = mysqli_real_escape_string($database, $_POST['track']);


      if($select=="Start"){
            $querys= mysqli_query($database,"UPDATE company_offers SET start='yes' WHERE id='$id'");
            mysqli_query($database, $querys);

      }


      $query= mysqli_query($database,"UPDATE company_offers SET progress_user='$select' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: offers.php?track=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="message"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);
      $desc = mysqli_real_escape_string($database, $_POST['desc']);

      $query= mysqli_query($database,"UPDATE register_company SET message='$desc' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: company-non.php?message=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="balance_company"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);
      $balance = mysqli_real_escape_string($database, $_POST['balance']);

      $query= mysqli_query($database,"UPDATE register_company SET balance='$balance' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: company.php?balance=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="balance_user"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);
      $balance = mysqli_real_escape_string($database, $_POST['balance']);

      $query= mysqli_query($database,"UPDATE register_user SET balance='$balance' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: utilisateurs.php?balance=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="retrait_ccp_user"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);

      $query= mysqli_query($database,"UPDATE transaction_user SET approved='yes' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: retrait-user-ccp.php?retrait=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="retrait_ccp_company"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);

      $query= mysqli_query($database,"UPDATE transaction_company SET approved='yes' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: retrait-company-ccp.php?retrait=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="stop_offers"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);

      $query= mysqli_query($database,"UPDATE company_offers SET start='stop' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: offers.php?stop=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="aprov_offers_buy_from_company"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);
      $balance = mysqli_real_escape_string($database, $_POST['balance']);
      $company = mysqli_real_escape_string($database, $_POST['company']);

      $query= mysqli_query($database,"UPDATE transaction_offers SET approved='yes' WHERE id='$id'");

    
        
      mysqli_query($database, $query);

      $query3= mysqli_query($database,"UPDATE register_company SET balance=balance + $balance  WHERE id='$company'");

            header('location: offers-buy.php?aprov=succes');
}elseif(isset($_POST['submit']) && $_POST['location']=="delete_offers_buy_from_company"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);


      $sql3="SELECT * FROM transaction_offers WHERE id='$id'";
      $result3=mysqli_query($database,$sql3);
      $resultCheck3=mysqli_num_rows($result3);
      $row6=mysqli_fetch_array($result3);
      $totale=$row6['totale'];
      $user_id=$row6['user_id'];
      $offers_id=$row6['offers_id'];
      
      $number_offers=$row6['number_offers'];

      $date = date("Y/m/d");


      $sql1="SELECT * FROM register_user WHERE id='$user_id'";
      $result1=mysqli_query($database,$sql1);
      $resultCheck1=mysqli_num_rows($result1);
      $row4=mysqli_fetch_array($result1);
      $oldbal=$row4['balance'];
      $newbal=$oldbal+$totale;


     

      $query= mysqli_query($database,"UPDATE register_user SET balance='$newbal' WHERE id='$user_id'");
      $query2= mysqli_query($database,"UPDATE company_offers SET totale_buy=totale_buy - $number_offers  WHERE id='$offers_id'");
      $query4= mysqli_query($database,"INSERT INTO transaction_user (some, some_sans, type, id_user, date,approved) 
      VALUES('$totale', '$totale', 'refund', '$user_id','$date','yes')");

      $query1 = "DELETE FROM transaction_offers WHERE id='$id' ";

    


      mysqli_query($database, $query1);
            header('location: offers-buy.php?delete=succes');
}
elseif( $_POST['location']=="statut1"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);

      $query= mysqli_query($database,"UPDATE claim SET statut='viewed' WHERE id='$id'");
    
        
      mysqli_query($database, $query);
            header('location: claim.php?statut=succes');
}
elseif(isset($_POST['submit']) && $_POST['location']=="aprov_claim_pay"){
    
      $id = mysqli_real_escape_string($database, $_POST['claimid']);
      $userid = mysqli_real_escape_string($database, $_POST['userid']);
      $result = mysqli_real_escape_string($database, $_POST['result']);
      $pourcentage = mysqli_real_escape_string($database, $_POST['pourcentage']);
      $claimtype = mysqli_real_escape_string($database, $_POST['claimtype']);
      $totale = mysqli_real_escape_string($database, $_POST['totale']);
      $numoffers = mysqli_real_escape_string($database, $_POST['numoffers']);
      $offers = mysqli_real_escape_string($database, $_POST['offers']);

      $company = mysqli_real_escape_string($database, $_POST['company']);
      $profit = mysqli_real_escape_string($database, $_POST['profit']);

      

      if( $result =="loss" ){
            $balance=$totale-(($pourcentage*$profit/100)/$offers*$numoffers);

            $query= mysqli_query($database,"UPDATE claim SET approved='yes',balance='$balance' WHERE id='$id'");
    
        

            $query2= mysqli_query($database,"UPDATE register_user SET balance=balance + $balance  WHERE id='$userid'");

            $query3= mysqli_query($database,"UPDATE register_company SET balance=balance - $balance  WHERE id='$company'");


                  header('location: claim.php?statut=succes');

      }

      elseif($result =="win" ){
            $balance=(($pourcentage*$profit/100)/$offers*$numoffers)+$totale;

            $query= mysqli_query($database,"UPDATE claim SET approved='yes',balance='$balance' WHERE id='$id'");
    
            $query2= mysqli_query($database,"UPDATE register_user SET balance=balance + $balance  WHERE id='$userid'");
            $query3= mysqli_query($database,"UPDATE register_company SET balance=balance - $balance  WHERE id='$company'");


                  header('location: claim.php?statut=succes');

      } 



    
}

elseif(isset($_POST['submit']) && $_POST['location']=="reject_claim_pay"){
    
      $offerid = mysqli_real_escape_string($database, $_POST['offerid']);
      $claimid = mysqli_real_escape_string($database, $_POST['claimid']);
     

      $query= mysqli_query($database,"UPDATE company_offers SET 	result='',pourcentage='',final_doc='' WHERE id='$offerid'");

    
        
      mysqli_query($database, $query);

   
      $query1= mysqli_query($database,"UPDATE claim SET rejected='yes' WHERE id='$claimid'");
            header('location: offers-buy.php?reject=succes');
}
elseif(isset($_POST['submit']) && $_POST['location']=="aprov_company_info_up"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);
      $company_id = mysqli_real_escape_string($database, $_POST['company_id']);
      $company_name = mysqli_real_escape_string($database, $_POST['company_name']);
      $company_type = mysqli_real_escape_string($database, $_POST['company_type']);
      $company_number = mysqli_real_escape_string($database, $_POST['company_number']);
      $company_code = mysqli_real_escape_string($database, $_POST['company_code']);
      $company_boss = mysqli_real_escape_string($database, $_POST['company_boss']);
      $company_boss_phone = mysqli_real_escape_string($database, $_POST['company_boss_phone']);
      $company_address = mysqli_real_escape_string($database, $_POST['company_address']);
      $company_files = mysqli_real_escape_string($database, $_POST['company_files']);


      $query= mysqli_query($database,"UPDATE register_company SET company_name='$company_name',company_type='$company_type',company_number='$company_number',company_code='$company_code',company_boss='$company_boss',company_boss_phone='$company_boss_phone',company_address='$company_address',company_files='$company_files' WHERE id='$company_id'");

    
        
      mysqli_query($database, $query);

   
      $query1= mysqli_query($database,"UPDATE company_update SET approved='yes' WHERE id='$id'");
            header('location: comupdate.php?comupdate=succes');
}
elseif(isset($_POST['submit']) && $_POST['location']=="delete_company_info_up"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);


      $query1 = "DELETE FROM company_update WHERE id='$id' ";
      mysqli_query($database, $query1);

            header('location: comupdate.php?comupdate=DELETE');
}
elseif(isset($_POST['submit']) && $_POST['location']=="delete_conatctus"){
    
      $id = mysqli_real_escape_string($database, $_POST['id']);


      $query1 = "DELETE FROM contactus WHERE id='$id' ";
      mysqli_query($database, $query1);

            header('location: contacta.php?comupdate=DELETE');
}

else{
    header('location: index.php');

}

?>