<?php
	$page='terms';
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
        <h2 class="text-center shadow" style="height: 45px;"><i class="fa fa-file-text-o" style="margin-right:8px;"></i>Terms of use</h2>
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
                 <p><strong><u>1.Acceptance of terms</u></strong>
<p>Your access to and use of bankifscmicrcode.net.in is subject exclusively to these Terms and Conditions. You will not use the Website for any purpose that is unlawful or prohibited by these Terms and Conditions. By using the Website you are fully accepting the terms, conditions and disclaimers contained in this notice. If you do not accept these Terms and Conditions you must immediately stop using the Website.
<p><strong><u>2.Advice</u></strong>
<p>2.1 The contents of the Website do not constitute advice and should not be relied upon in making or refraining from making, any decision.
<p>2.2 We have utmost care in making sure the data we have collected is correct. However, we expect you to use this website only for reference, and please confirm from the bank directly before performing any transaction. Contact details for each bank/branch are provided in the same page where we list the IFSC Code.
<p><strong><u>3.Changes to website</u></strong>
<p>bankifscmicrcode.net.in reserves the right to:
<p>3.1 change or remove (temporarily or permanently) the Website or any part of it without notice and you confirm that bankifscmicrcode.net.in shall not be liable to you for any such change or removal; and
<p>3.2 change these Terms and Conditions at any time, and your continued use of the Website following any changes shall be deemed to be your acceptance of such change.
<p><strong><u>4. Links to third party websites </u></strong>
<p>The Website may include links to third party websites that are controlled and maintained by others. Any link to other websites is not an endorsement of such websites and you acknowledge and agree that we are not responsible for the content or availability of any such sites.
<p><strong><u>5. Copyright</u></strong>
<p>5.1 All product and brand names used in the website are trademarks, registered trademarks, or trade names of their respective holders. bankifscmicrcode.net.in is not associated with any product or vendor mentioned in this website.
<p>5.2 In accessing the Website you agree that you will access the content solely for your personal, non-commercial use. None of the content may be downloaded, copied, reproduced, transmitted, stored, sold or distributed without the prior written consent of the copyright holder.
<p>5.3 The Website is not responsible for any errors or issues whatsoever with the content contributed by the users of the website. Any views or opinions expressed by the contributors and solely theirs and the Website cannot be held responsible for it.
    <p><strong><u>6. Severance</u></strong>
<p>If any of these Terms and Conditions should be determined to be invalid, illegal or unenforceable for any reason by any court of competent jurisdiction then such Term or Condition shall be severed and the remaining Terms and Conditions shall survive and remain in full force and effect and continue to be binding and enforceable.
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