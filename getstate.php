<?php 
            $conn = mysqli_connect(
                'localhost',
                'root',
                '',
                'trial');
            
              if($conn)
              {
                print "";
              }
       
             $bank_name=$POST['bank_name'];
                    
                    $tsql="SELECT `state` FROM `neft` WHERE `bank_name`='$bank_name'";
                    $trec=mysqli_query($conn,$tsql);
                    $state_arr = array();
                    while($trows=mysqli_fetch_array($trec))
                    {
                       
                      $state=$trows['state'];
                      $state_arr[] = array("state" => $state);
                    }
                    echo json_encode($state_arr);
                
?>