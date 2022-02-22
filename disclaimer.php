<?php
	$page='disclaimer';  
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
        <h2 class="text-center shadow" style="height: 45px;"><i class="fa fa-exclamation-triangle" style="margin-right:8px;"></i>Disclaimer</h2>
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
                 <p><strong><u>1.Disclaimer and limitation of liability</u></strong>
<p>1.1 The Website is provided on an "AS IS" and "AS AVAILABLE" basis without any representation or endorsement made and without warranty of any kind whether express or implied, including but not limited to the implied warranties of satisfactory quality, fitness for a particular purpose, non-infringement, compatibility, security and accuracy.
<p>1.2 To the extent permitted by law, bankifscmicrcode.net.in will not be liable for any indirect or consequential loss or damage whatever (including without limitation loss of business, opportunity, data, profits) arising out of or in connection with the use of the Website.
<p>1.3 bankifscmicrcode.net.in makes no warranty that the functionality of the Website will be uninterrupted or error free, that defects will be corrected or that the Website or the server that makes it available are free of viruses or anything else which may be harmful or destructive.
<p>1.4 Nothing in these Terms and Conditions shall be construed so as to exclude or limit the liability of bankifscmicrcode.net.in for death or personal injury as a result of the negligence of bankifscmicrcode.net.in or that of its team members.
<p><strong><u>2.Indemnity</u></strong>
<p>You agree to indemnify and hold bankifscmicrcode.net.in and softusvista Inc. harmless from and against all liabilities, legal fees, damages, losses, costs and other expenses in relation to any claims or actions brought against bankifscmicrcode.net.in arising out of any breach by you of these Terms and Conditions or other liabilities arising out of your use of this Website.
<p><strong><u>3.Content</u></strong>
<p>3.1 bankifscmicrcode.net.in cannot be held responsible for the content in any way.
<p>3.2 We have utmost care in making sure the data we have collected is correct. However, we expect you to use this website only for reference, and please confirm from the bank directly before performing any transaction. Contact details for each bank/branch are provided in the same page where we list the IFSC Code.

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
	<!--code for adds refresh starts here-->
<?php 
	}
?>
</body>

</html>