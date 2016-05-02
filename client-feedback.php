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

<body id="feedback">
<?php include("includes/header.php"); ?>
<!-- insert flash here-->
<?php include("includes/page-top.php"); ?>
<!-- insert page content here-->
<div id="pageLeft">
<h1>We Look Forward to Your Feedback</h1>
<div class="divider"></div>
<div id="inputArea">
<form action="client-feedback-post.php" method="POST">
<p>
<label for="name">Name</label><input  id="name" maxlength="40" name="name" size="30" type="text" />
<span class="errorMsg"><!--ERRORMSG:name--></span>
</p>
<p> 
<label for="email">Email</label><input  id="email" maxlength="80" name="email" size="30" type="text" />
<span class="errorMsg"><!--ERRORMSG:email--></span>
</p>
<p> 
Message:<textarea id="message" name="message" type="text" cols="60" rows="12" wrap="soft"></textarea>
<span class="errorMsg"><!--ERRORMSG:message--></span>
</p>
<p> 
<input type="submit" name="submit" value="Send Message" >
</p> 
</form>
    <br /><br />
    <!-- end #inputArea--></div>
<!-- end #pageLeft--></div>

<div id="pageRight">
<div class="box-feedback"><!-- end .imgBox-1 --></div>
<!-- end #pageRight--></div>

<?php include("includes/footer.php"); ?>