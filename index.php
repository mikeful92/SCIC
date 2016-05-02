<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Senior Care</title>
<?php include("includes/head-inc.php"); ?>
<?php include_once("includes/analytics.php") ?>
<!-- insert page specific head content here-->
<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript">
			var flashvars = {};
			var params = {};
			params.wmode = "transparent";
			var attributes = {};
			swfobject.embedSWF("flash/senior-care.swf", "flashContent", "940", "300", "9.0.0", false, flashvars, params, attributes);
		</script>
</head>

<body id="home">
<?php include("includes/header.php"); ?>
<!-- insert flash here-->
<div id="flashBanner">
	<div id="flashWrapper">
		<div id="flashContent"><img src="images/senior-care-home.jpg" width="940" height="300" alt="Senior Care Insurance Center" /></div>
	<!-- end #flashWrpper--></div>
<!-- end #flashBanner--></div>
<?php include("includes/page-top.php"); ?>
<!-- insert page content here-->
<div id="pageLeft">
<h1>Let Us Guide You with Your Medicare and Supplemental Needs!</h1>
<p>Since 1988 over 45,000 people have depended on us to find the best Medicare Supplement policy for their individual needs and budget. Our licensed and caring professionals make choosing a Medicare Supplement policy easy. You can also count on us for a lifetime of service.</p>
<p>For your convienience, you can apply by phone, email or fax. It's that simple.</p>

<div class="divider"></div>

<div id="fb-root"></div>
<script>(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<div class="fb-like-box" data-href="https://www.facebook.com/#!/pages/Senior-Care-Insurance-Center/252358888137983" data-width="600" data-show-faces="false" data-stream="false" data-header="false"></div>
<!-- end pageLeft--></div>
<div id="pageRight">

<!-- end #pageRight--></div>
<?php include("includes/footer.php"); ?>