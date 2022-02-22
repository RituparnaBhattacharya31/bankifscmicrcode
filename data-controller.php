<?php
    
    include_once './db-config.php';
    class DataController {
       
            public function getbanks() 
            {
                $data            =           array();
                $db              =           new DBController();
                $conn            =           $db->connect();

                $sql             =           "SELECT DISTINCT(`bank_name`) FROM `neft` ORDER BY `bank_name`";
                $result          =           $conn->query($sql);
                if($result->num_rows> 0) 
                {
                    $data        =           mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
                
               $db->close($conn);
               return $data;
            }

        
            public function stateslisting($bank_name) 
            {
                $data           =            array();

                $db             =            new DBController();
                $conn           =            $db->connect();

                //$sql          =           "SELECT * FROM `neft` WHERE `bank_name` = '$bank_name'";
				$sql            =            "SELECT DISTINCT(`state`) FROM `neft` WHERE `bank_name` = '$bank_name' ORDER BY `state`";
                $result         =            $conn->query($sql);

                if($result->num_rows > 0)
                {
                    $data       =            mysqli_fetch_all($result, MYSQLI_ASSOC);
                }
                $db->close($conn);
                return $data;
            }

            public function distlisting($bank_name,$state) 
            {
                $data           =            array();

                $db             =            new DBController();
                $conn           =            $db->connect();
				
				//$sql            =            "SELECT * FROM `neft` WHERE `bank_name` = '$bank_name' AND `state` = '$state'";
                $sql            =            "SELECT DISTINCT(`district`) FROM `neft` WHERE `bank_name` = '$bank_name' AND `state` = '$state' ORDER BY `district`";
                $result         =            $conn->query($sql);

                if($result->num_rows > 0)
                {
                    $data       =            mysqli_fetch_all($result, MYSQLI_ASSOC);
                }

                $db->close($conn);
                return $data;
            }
            public function branchlisting($bank_name,$district) 
            {
                $data           =            array();

                $db             =            new DBController();
                $conn           =            $db->connect();

                $sql            =            "SELECT `branch` FROM `neft` WHERE `bank_name`='$bank_name' AND `district` = '$district' ORDER BY `branch`";
                $result         =            $conn->query($sql);

                if($result->num_rows > 0) 
                {
                    $data       =            mysqli_fetch_all($result, MYSQLI_ASSOC);
                }

                $db->close($conn);
                return $data;
            }
        }
?>