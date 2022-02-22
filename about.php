<?php
	$page='about';
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
        <h2 class="text-center shadow" style="height: 45px;"><i class="fa fa-lightbulb-o" style="margin-right:8px;"></i>About Us</h2>
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
                 <p>It gives us immense pleasure to present to you www.bankifscmicrcode.net.in. A website where one can easily search IFSC (India Financial System Code) codes and MICR (Magnetic Ink Character Recognition technology) codes. Our website currently lists more than 1.5 lakhs bank branches of around 150 banks in the country. We have taken utmost care in collecting and publishing the data on the website, yet you are advised to contact your branch and bank before any transaction.
<p>Please contact us at contact@bankifscmicrcode.net.in
<p><font size="5px"><strong>Thank you,</strong></font>
<p><font size="3px"><strong>Team Bank Ifsc Micr Code</strong></font>

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
	<!--code for adds refresh starts here-->
    <script>
        $(document).ready(function () 
        {
        setInterval(function()
        {
            var rand=Math.floor(Math.random()*100);
            $("#container1").text("I am getting refreshed after 5 sec...!"+rand);
            $("#container2").text("I am getting refreshed after 5 sec...!"+rand);
            $("#container3").text("I am getting refreshed after 5 sec...!"+rand);
            $("#container4").text("I am getting refreshed after 5 sec...!"+rand);
            $("#container5").text("I am getting refreshed after 5 sec...!"+rand);
           

        },5000);
        
        });
    </script>
	<!--code for adds refresh ends here-->
<?php
	}
?>

</body>

</html>