<?PHP
require_once("../profile/include/membersite_config.php");

if($fgmembersite->CheckLogin())
{
	$username=$fgmembersite->Username();
	$conn=mysql_connect("ifestiitr.db.7118431.hostedresource.com","ifestiitr","D00rdie!") or die('Cannot connect to the database because: ' . mysql_error());
	mysql_select_db("ifestiitr",$conn);
	$res1=mysql_query("SELECT * FROM cruxdb WHERE username = '$username'") or  die(mysql_error());
	$row1=mysql_fetch_assoc($res1);
	$level=$row1['lvl'];
    $fgmembersite->RedirectToURL("lvl".$level.".php");
    exit;
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRUX </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Treasure Hunt">
    <meta name="author" content="Akshay">

    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<link rel="icon" href="./img/favicon_iFest.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="114x114" href="./img/favicon_iFest.ico">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9" style="position:relative;left:13%;top:20%">
          <div class="hero-unit" id="hero-unit" style="z-index:1000;position:relative;visibility:visible;">
		  <fieldset>
		  <legend><h3>CRUX Team</h3></legend>
		  <p>You are not logged in.</p>
		  <p>Please <a href="http://ifest.ieeeiitr.com/profile/login-reg.php">Login</a> to continue.</p>
			</fieldset>
          </div>
          </div>
        </div>
      </div>
<div id="lightsoff" style="width:100%;height:100%;position:fixed;background-color:#000000;z-index:999;opacity:0.8;left:0px;top:0px;"></div>
  </body>
</html>
<?php
	}
?>