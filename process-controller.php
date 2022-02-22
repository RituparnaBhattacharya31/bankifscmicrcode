<?php
    require_once './data-controller.php';
    
    if(isset($_POST['bank_name']) && !isset($_POST['state']) && !isset($_POST['district'])) 
    {
        $bank_name    =    $_POST['bank_name'];
        $dController  =    new DataController();
        $state        =     $dController->stateslisting($bank_name);

        echo json_encode($state);
    }
    elseif(isset($_POST['bank_name']) && isset($_POST['state']))//&& !isset($_POST['district'])) 
    {
        $bank_name  =  $_POST['bank_name'];
        $state   =   $_POST['state'];
        $dController   =  new DataController();
        $district  =  $dController->distlisting($bank_name,$state);
        
        echo json_encode($district);

    }
    elseif(isset($_POST['bank_name']) && isset($_POST['district'])) 
    {
       $bank_name = $_POST['bank_name'];        
       $district = $_POST['district'];
        $dController  = new DataController();
        $branch = $dController->branchlisting($bank_name,$district);
        
        echo json_encode($branch);

    } 
?>