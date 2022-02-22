<?php
	$page='ifsc';
	include_once './db-config.php';
	include_once './data-controller.php';

	$data = new DataController();
      $bank = $data->getbanks();
      
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>BANKIFSCMICRCODE</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php include "navbar.php"; ?>
    <div class="text-center" style="margin-top: 68px;"><img class="img-fluid" src="assets/img/head.jpg" style="background-size: auto;background-repeat: no-repeat;">
        <h2 class="text-center shadow" style="height: 45px;"><i class="fa fa-bank" style="margin-right:8px;"></i>Search By IFSC</h2>
    </div>
    <div class="row no-gutters justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 d-none d-print-inline d-sm-none d-md-none d-lg-inline d-xl-inline" style="background-color: #999999;margin-top: 10px;margin-bottom: 10px;">
            <div id="container1" style="height: 180px;">
                
            </div>
            <div id="container2" style="height: 180px;">
                
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8" style="margin-bottom: 11px;">
            <div style="background-color: #ffffff;max-height: 100%;height: 98%;">
                <form method="POST" class="text-center border rounded shadow" style="width: auto;margin-top: 10px;margin-left: 5px;max-width: 100%;min-width: 343px;padding: 8px;background-color: #f2f2f2;max-height: 100%;height: 100%;margin-bottom: 10px;padding-top: 35px;padding-bottom: 35px;margin-right: 5px;">
                <?php
                
                if(isset($_POST["submit"]))
                {
                    $ifsc=$_POST['ifsc'];
                                      
                                            
                    $db = new DBController();
                    $conn = $db->connect();
            
                    $st = "SELECT * FROM `neft` WHERE `ifsc`='$ifsc'";
                    $result = $conn->query($st);
                    if($result->num_rows> 0) 
                    {
                        while($sfres = mysqli_fetch_assoc($result))
                        {
                            
                            $bname=$sfres['bank_name'];
                            $state=$sfres['state'];
                            $dist=$sfres['district'];
                            $branch=$sfres['branch'];
                            $addr=$sfres['address'];
                            $cont=$sfres['contact'];
                            $ifsc=$sfres['ifsc'];
                            $micr=$sfres['micr'];
                         }
                         echo '<h5 id="heading" style="margin-bottom: 25px;">Details of&nbsp'; echo $bname; echo',&nbsp'; echo $branch; echo ' </h5>';
                     }
                     
                    }
                    else
                     {
                        echo '<h5 style="margin-bottom: 25px;">Search Bank Details By IFSC</h5>';
                     }
                   
                ?>
          
             
                    <input class="form-control mx-auto" id="ifsc" type="text" name="ifsc" style="margin-bottom: 10px;max-width: 335px;" placeholder="Enter IFSC number" required="">
                    <div id="alert">
                            <?php

	if(isset($_POST["submit"]))
    {
    	$ifsc=$_POST['ifsc'];
           
                    
        $db              =           new DBController();
        $conn            =           $db->connect();
        $st            =           "SELECT * FROM `neft` WHERE `ifsc`='$ifsc'";
        $result          =           $conn->query($st);
        if($result->num_rows> 0) 
        {
	        while($sfres = mysqli_fetch_assoc($result))
            {
				//$bank_name=$sfres['bank_name'];
				$bname=$sfres['bank_name'];
				$state=$sfres['state'];
				$dist=$sfres['district'];
				$branch=$sfres['branch'];
				$addr=$sfres['address'];
				$cont=$sfres['contact'];
				$ifsc=$sfres['ifsc'];
				$micr=$sfres['micr'];
            }
         }  
    }
    elseif(isset($_GET["i"]))
    {
    $str="*IFSC code is invalid, it should contain minimum 11 characters";
        echo "<font color=red>$str</font>";
    }
?>
                        
                    </div>
                    <br>
                    <button class="btn btn-primary" name="submit" type="submit">Search</button>
                    <button class="btn btn-primary" name="reset" type="reset">Reset</button>

<?php

	if(isset($_POST["submit"]))
    {
    	$ifsc=$_POST['ifsc'];
           
                    
        $db              =           new DBController();
        $conn            =           $db->connect();
        $st            =           "SELECT * FROM `neft` WHERE `ifsc`='$ifsc'";
        $result          =           $conn->query($st);
        if($result->num_rows> 0) 
        {
	        while($sfres = mysqli_fetch_assoc($result))
            {
				//$bank_name=$sfres['bank_name'];
				$bname=$sfres['bank_name'];
				$state=$sfres['state'];
				$dist=$sfres['district'];
				$branch=$sfres['branch'];
				$addr=$sfres['address'];
				$cont=$sfres['contact'];
				$ifsc=$sfres['ifsc'];
				$micr=$sfres['micr'];
            }
         }
         else
         {
            echo "<script>
            location.href='ifsc.php?i=1';
        </script>";
         }
?>
											
                    <div id="vanish"
                        class="text-left border rounded border-white mx-auto" style="max-width: 80%;min-width: 320px;background-color: #ffffff;margin-top: 30px;">
                        <div class="form-row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 text-break" style="font-size: 14px;padding-right: 10px;padding-left: 10px;padding-top: 5px;">
                            <div class="col"><label><strong>Bank :&nbsp;</strong></label><label><?php echo $bname; ?></label></div>
                            <div class="col"><label><strong>State :&nbsp;</strong></label><label><?php echo $state; ?></label></div>
                            <div class="col"><label><strong>District :&nbsp;</strong></label><label><?php echo $dist; ?></label></div>
                            <div class="col"><label><strong>Branch :&nbsp;</strong></label><label><?php echo $branch; ?></label></div>
                            <div class="col"><label><strong>Address :&nbsp;</strong></label><label><?php echo $addr; ?></label></div>
                            <div class="col"><label><strong>Contact :&nbsp;</strong></label><label><?php echo $cont; ?></label></div>
                            <div class="col"><label><strong>IFSC :&nbsp;</strong></label><label><?php echo $ifsc; ?></label></div>
                            <div class="col"><label><strong>MICR :&nbsp;</strong></label><label><?php echo $micr; ?></label></div>
                        </div>
            </div>
<?php
	}
?>
            </form>
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 justify-content-end" style="background-color: #8f8f8f;margin-top: 10px;margin-bottom: 10px;">
        <div id="container3" class="d-none d-sm-none d-md-none d-lg-block d-xl-block" style="height: 180px;">
            
        </div>
        <div id="container4" style="height: 180px;">
            
        </div>
    </div>
    </div>
    <div class="row no-gutters" style="margin-top: 5px;margin-bottom: 5px;background-color: #d7d7d7;margin-right: 0px;margin-left: 0px;">
        <div id="container5" class="col" style="height: 180px;">
            
        </div>
    </div>
<?php include "footer.php"; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

<?php 
	$enable_ads=false; //to disable the functionality of foreful ads reloading, set the variable '$enable_ads' to false
	if($enable_ads)
	{
?>    
<!--code for adds refresh starts here -->
    <script>
    $(document).ready(function () 
    {
        $("#ifsc").click(function() {
        $("#container1").load("ads.php");
        $("#container2").load("ads.php");
        $("#container3").load("ads.php");
        $("#container4").load("ads.php");
        $("#container5").load("ads.php");
        return false;
        });

    });
</script>
<!--code for adds refresh ends here -->
<?php
	}
?>

<script>
 $(document).ready(function () 
    {
        $("#ifsc").click(function() 
        {
           $("#alert").empty(); 
        });
    });
</script>

<script>
 $(document).ready(function () 
    {
        $("#ifsc").click(function() 
        {
           $("#vanish").remove(); 
           $("#heading").load("titleifsc.php");
        });
    });
</script>



</body>

</html>