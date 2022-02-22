<?php
	$page='bankname';
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
        <h2 class="text-center shadow" style="height: 45px;"><i class="fa fa-bank" style="margin-right:8px;"></i>Search By Bank</h2>
    </div>
    <div class="row no-gutters justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2 d-none d-print-inline d-sm-none d-md-none d-lg-inline d-xl-inline" style="background-color: #999999;margin-top: 10px;margin-bottom: 10px;">
            <div id="container1" style="height: 180px;">
                
            </div>
            <div id="container2" style="height: 180px;">
                
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8">
            <div class="text-center" style="background-color: #ffffff;height: 95%;">
                <form class="border rounded shadow" method="POST" style="width: auto;margin-top: 10px;margin-bottom: 10px;margin-right: 5px;margin-left: 5px;max-width: 100%;min-width: 343px;padding: 8px;background-color: #f2f2f2;max-height: 100%;height: 100%;padding-top: 35px;padding-bottom: 35px;">
                <?php
                
                if(isset($_POST["submit"]))
                {
                    $bname=$_POST['bname'];
                    $state=$_POST['state'];
                    $dist=$_POST['dist'];
                    $branch=$_POST['branch'];
                                      
                                            
                    $db = new DBController();
                    $conn = $db->connect();
            
                    $st = "SELECT * FROM `neft` WHERE `bank_name`='$bname' AND `state`='$state' AND `district`='$dist' AND `branch`='$branch'";
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
                        echo '<h5 style="margin-bottom: 25px;">Search Bank Details By Bank Name, State &amp; Branch</h5>';
                     }
                   
                ?>
                    <select id="sel_bank" name="bname" class="form-control form-control-sm mx-auto" style="max-width: 335px;margin-bottom: 5px;" required="">
                    <option value="" selected="" disabled>~ Select Bank ~</option>
                        <?php foreach($bank as $bank): ?>
                            <option value="<?php echo $bank['bank_name']; ?> ">
                                <?php echo $bank['bank_name']; ?> </option>
                            <?php endforeach; ?></select>
                    <select id="sel_state" name="state" class="form-control form-control-sm mx-auto" style="max-width: 335px;margin-bottom: 5px;" required="">
                        <option value="" selected="" disabled>~ Select State ~</option> 
                    </select>
                    <select id="sel_dist" name="dist" class="form-control form-control-sm mx-auto" style="max-width: 335px;margin-bottom: 5px;" required="">
                        <option value="" selected="" disabled>~ Select District ~</option>
                    </select>
                    <select id="sel_branch" name="branch" class="form-control form-control-sm mx-auto" style="max-width: 335px;margin-bottom: 10px;" required="">
                        <option value="" selected="" disabled>~ Select Branch ~</option>
                    </select>
                        <button class="btn btn-primary" name="submit" id="submit" type="submit">Search</button>
                        <button class="btn btn-primary" name="reset" type="reset">Reset</button>

<?php  
	if(isset($_POST["submit"]))
	{
    	$bname=$_POST['bname'];
		$state=$_POST['state'];
		$dist=$_POST['dist'];
		$branch=$_POST['branch'];
                          
                                
        $db = new DBController();
        $conn = $db->connect();

        $st = "SELECT * FROM `neft` WHERE `bank_name`='$bname' AND `state`='$state' AND `district`='$dist' AND `branch`='$branch'";
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
         }
                                          
?>
                            <div id="vanish" class="text-left border rounded border-white mx-auto" style="max-width: 80%;min-width: 320px;background-color: #ffffff;margin-top: 30px;">
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
    <div class="row no-gutters" style="background-color: #d9d9d9;margin-top: 5px;margin-bottom: 5px;margin-left: 0px;margin-right: 0px;">
        <div id="container5" class="col" style="height: 180px;">
            
        </div>
    </div>
<?php include "footer.php"; ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    
<script>
    $(document).ready(function() {

        $("#sel_bank").change(function() {
            var bank_name = $(this).val();
            $("#sel_state").fadeIn('slow');

            $.ajax({
                url: 'process-controller.php',
                type: 'POST',
                data: {
                    bank_name: bank_name
                },
                dataType: "JSON",

                success: function(result) {
                    var items = "";
                    $("#sel_state").empty();
                    

                    $("#sel_state").append(
                        "<option value='' selected disabled>~ Select State ~</option>");
                 
                    $.each(result, function(i, items) {
                        $("#sel_state").append("<option value='" + items
                            .state + "'>" + items.state +
                            "</option>");
                    });
                }
        });
    });
        $("#sel_bank").change(function() {
            var bank_name = $(this).val();
        $("#sel_state").change(function() {
            var state = $(this).val();
            $("#sel_dist").fadeIn('slow');

            $.ajax({
                url: 'process-controller.php',
                type: 'POST',
                data: {
                    
					bank_name: bank_name,
                    state: state
                },
                dataType: "JSON",

                success: function(result) {
                    var dist = "";
                    $("#sel_dist").empty();
                    
                    $("#sel_dist").append(
                        "<option value='' selected disabled>~ Select District ~</option>");
                 
                    $.each(result, function(i, dist) {
                        $("#sel_dist").append("<option value='" + dist
                            .district + "'>" + dist.district +
                            "</option>");
                    });
                }
            });
        });
    });
        $("#sel_bank").change(function() {
            var bank_name = $(this).val();
        $("#sel_dist").change(function() { 
            var district = $(this).val();
            $("#sel_branch").fadeIn('slow');

            $.ajax({
                url: 'process-controller.php',
                type: 'POST',
                data: {
                    bank_name: bank_name,
                    district: district 
                },
                dataType: "JSON",
                success: function(result) {
                    var branch = "";
                    $("#sel_branch").empty();
                    $("#sel_branch").append(
                        "<option value='' selected disabled>~ Select Branch ~</option>");
                    
                    $.each(result, function(i, branch) {
                        $("#sel_branch").append("<option value='" + branch
                            .branch + "'>" + branch.branch +
                            "</option>");
                    

                    });
                }
            });
        });
    });
});
</script>

 
<?php 
	$enable_ads=false; //to disable the functionality of foreful ads reloading, set the variable '$enable_ads' to false  
	if($enable_ads)
	{
?>
<!--code for adds refresh starts here -->
<script>
    $(document).ready(function () 
    {

        $("#sel_bank").change(function() {
        $("#container1").load("ads.php");
        $("#container2").load("ads.php");
        $("#container3").load("ads.php");
        $("#container4").load("ads.php");
        $("#container5").load("ads.php");
        return false;
        });

    });
    $(document).ready(function () 
    {

        $("#sel_state").change(function() {
        $("#container1").load("ads.php");
        $("#container2").load("ads.php");
        $("#container3").load("ads.php");
        $("#container4").load("ads.php");
        $("#container5").load("ads.php");

        return false;
        });
    });

    $(document).ready(function () 
    {

        $("#sel_dist").change(function() {
        $("#container1").load("ads.php");
        $("#container2").load("ads.php");
        $("#container3").load("ads.php");
        $("#container4").load("ads.php");
        $("#container5").load("ads.php");
        return false;
        });
    });
    
    $(document).ready(function () 
    {


        $("#sel_branch").change(function() {
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
        $("#sel_bank").click(function() 
        {
           $("#vanish").remove();  
           $("#heading").load("title.php");       
        });
    });
</script>


</body>

</html>