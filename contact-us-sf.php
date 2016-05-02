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
<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
 
<input type=hidden name="oid" value="00D80000000Lpoq">
<input type=hidden name="retURL" value="http://65insurance.com/thank-you.php">
<p>
<label for="first_name">First Name</label><input  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
</p>
<p> 
<label for="last_name">Last Name</label><input id="last_name" maxlength="80" name="last_name" size="20" type="text" />
</p>
<p>
Birthdate:<span class="dateInput dateOnlyInput"><input id="00N80000002ngQ5" name="00N80000002ngQ5" size="12" type="text" /></span>
</p>
<p> 
Current Insurance:<textarea  id="00N80000004roD3" name="00N80000004roD3" type="text" wrap="soft"></textarea>
</p>
<p> 
<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="20" type="text" />
</p>
<p> 
<label for="phone">Phone</label><input  id="phone" maxlength="40" name="phone" size="20" type="text" />
</p>
<p> 
Website Comments:<textarea id="00N80000004rnnj" name="00N80000004rnnj" type="text" cols="60" rows="12" wrap="soft"></textarea>
</p>
<p> 
<input type="submit" name="submit">
</p> 
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