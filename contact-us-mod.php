<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Senior Care</title>
<?php include("includes/head-inc.php"); ?>
<!-- insert page specific head content here-->
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

</head>

<body id="contact">
<?php include("includes/header.php"); ?>
<!-- insert flash here-->
<?php include("includes/page-top.php"); ?>
<!-- insert page content here-->
<div id="pageLeft">
<h1>Request Information</h1>
<div id="inputArea">
<form action="contact-submit-sf.php" method="post">
    <fieldset>
        <p>
        <label for="first_name">First Name:</label><br />
        <input name="first_name" type="text" id="first_name" size="30" />
        <span class="errorMsg"><!--ERRORMSG:first_name--></span>
        </p>
        <p>
        <label for="last_name">Last Name:</label><br />
        <input name="last_name" type="text" id="last_name" size="30" />
        <span class="errorMsg"><!--ERRORMSG:last_name--></span>
        </p>
        <p>
        <label for="00N80000002ngQ5">Date of Birth:</label><br />
        <input name="00N80000002ngQ5" type="text" id="00N80000002ngQ5" size="10" /><span style="color:#80add5; font-size:10px;">(MM/DD/YYYY)</span>
        <span class="errorMsg"><!--ERRORMSG:00N80000002ngQ5--></span>
        </p>
        <p>
        <label for="00N80000004roD3">Current Insurance:</label><br />
        <input name="00N80000004roD3" type="text" id="00N80000004roD3" size="30" />
        <span class="errorMsg"><!--ERRORMSG:00N80000004roD3--></span>
        </p>
        <p>
        <label for="email">Email Address:</label><br />
        <input name="email" type="text" id="email" size="30" />
        <span class="errorMsg"><!--ERRORMSG:email--></span>
        </p>
        <p>
        <label for="phone">Phone Number:</label><br />
        <input name="phone" type="text" id="phone" size="30" />
        <span class="errorMsg"><!--ERRORMSG:phone--></span>
        </p>
        <p>

        <label for="00N80000004rnnj">Comments:</label>
        <br />
        <textarea name="00N80000004rnnj" cols="60" rows="12" id="00N80000004rnnj"></textarea><br /><span class="errorMsg"><!--ERRORMSG:00N80000004rnnj--></span>
        </p>
        <p>
        <input name="Submit" type="submit" value="Send Message" />
        </p>
    </fieldset>
    </form>
    <br /><br />
    <!-- end #inputArea--></div>
<!-- end #pageLeft--></div>
<div id="pageRight">
<div class="box">
	<div class="box-grandpa"></div>
    <p>"I'm glad I followed my doctor's advice and called you. Thank you so much for saving me money, and for your professionalism."</p>
    <p class="last">Arthur B.</p>
<!-- end .box--></div>
<div class="divider"></div>
<h3>Contact Info:</h3>
<p>Phone: 800-203-0380<br />Fax: 800-871-4313<br />
Email: <a href="mailto:info@65insurance.com">info@65insurance.com</a></p>
<!-- end #pageRight--></div>
<?php include("includes/footer.php"); ?>