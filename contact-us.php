<!DOCTYPE html>
<html>
<head>
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <title>Senior Care</title>
    <?php include("includes/head-inc.php"); ?>
    <?php include_once("includes/analytics.php"); ?><!-- insert page specific head content here-->
    <?php require_once("includes/recaptchalib.php"); ?>
    <script type="text/javascript">
        $(document).ready(function(){
        $("input, textarea").addClass("idle");
            $("input, textarea").focus(function(){
                $(this).addClass("activeField").removeClass("idle");
        }).blur(function(){
                $(this).removeClass("activeField").addClass("idle");
        });
        });
    </script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="contact">
    <?php include("includes/header.php"); ?><!-- insert flash here-->
    <?php include("includes/page-top.php"); ?><!-- insert page content here-->
    <div id="pageLeft">
        <h1>Request Information</h1>
        <div id="inputArea">
            <form action="verify.php" method="POST">
                <input type=hidden name="oid" value="00D80000000Lpoq">
                <input name="retURL" type="hidden" value="http://65insurance.com/thank-you.php">
                <p><label for="first_name">First Name</label><input id="first_name" maxlength="40" name="first_name" size="30" type="text"></p>
                <p><label for="last_name">Last Name</label><input id="last_name" maxlength="80" name="last_name" size="30" type="text"></p>
                <p>Birthdate:<span class="dateInput dateOnlyInput"><input id="00N80000002ngQ5" name="birthdate" size="12" type="text"></span><br></p>
                <p>Email:<input id="00NC0000006ZTAg" maxlength="80" name="email" size="20" type="text"><br></p>
                <p><label for="phone">Phone</label><input id="phone" maxlength="40" name="phone" size="20" type="text"><br></p>
                <p>How can we help you?
                <textarea id="00N80000004rnnj" name="comment" wrap="soft"></textarea><br></p>
                <?php echo recaptcha_get_html("6LfVSx8TAAAAAKrx2ejQCvahBdzljRupkIKwneFr", null);?>
                <!--<div class="g-recaptcha" data-sitekey="6LfVSx8TAAAAAKrx2ejQCvahBdzljRupkIKwneFr"></div>-->
                <p><input name="submit" type="submit"></p>
            </form>
            <br>
            <br>            
        </div><!-- end #inputArea-->
    </div><!-- end #pageLeft-->
    <div id="pageRight">
        <div class="box">
            <div class="box-grandpa"></div>
            <p>"I'm glad I followed my doctor's advice and called you. Thank you so much for saving me money, and for your professionalism."</p>
            <p class="last">Arthur B.</p><!-- end .box-->
        </div>
        <div class="divider"></div>
        <h2>Contact Info:</h2>
        <h5>Phone:&nbsp; 800-203-0380</h5>
        <h5>Fax:&nbsp;&nbsp;&nbsp;&nbsp; 800-871-4313</h5>
        <h5>Email:&nbsp; <a href="mailto:info@65insurance.com">info@65insurance.com</a></h5>
        <h5>Palm Beach: 561-290-1114</h5>
        <h5><a href=
        "mailto:?subject=I%20wanted%20you%20to%20see%20this%20site&amp;body=Senior%20Care%20Insurance%20Center%20-%20Medicare%20Supplement%20Specialist%20http://www.65insurance.com."
        title="Share by Email"><i aria-hidden="true" class="fa fa-share-square">Share</i></a></h5>
        <h5><a href="https://www.facebook.com/SeniorCareInsuranceCenter"><i aria-hidden="true" class="fa fa-facebook-square">Facebook</i></a></h5>
        <h5><a href="https://www.linkedin.com/in/debraminervini" target="_blank"><i aria-hidden="true" class="fa fa-linkedin-square">LinkedIn</i></a></h5><!-- end #pageRight-->
    </div>
    <?php include("includes/footer.php"); ?>
</body>
</html>