<?PHP
require_once("../profile/include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("index.php");
    exit;
}
$username=$fgmembersite->Username();
$lvl=17;
include("checkans.php");
//always give the name for submit button for answers as sub_ans	
//also give name for answer text as ans
//also give clues at end of the html content as comments
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRUX - Level 17</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online Treasure Hunt">
    <meta name="author" content="Ankit">

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

  <body style="background-image:url('img/collage.jpg');background-size:cover;background-repeat:no-repeat">
  <?php include("header.php"); ?>
    <div class="container-fluid">
      <div class="row-fluid" id="row-fluid" >
	    <?php include("leftsidebar.php"); ?>
        <div class="span9"id="span9">
          <div class="hero-unit" id="hero-unit" style="opacity:0.95;z-index:1000;position:relative;visibility:visible;padding-top:30px;padding-left:30px;">
		  <form action="" style="text-align:center" method="post">
		  		  		  <img src="./img/bulbon.gif" onclick="light()" title="Focus on the Level!" id="bulb" style="height:68px;width:38px;float:left;cursor:pointer"/>
		  <fieldset>
		  <legend>LEVEL 17</legend>
            <img border="0" src="/crux2/img/bbbb.jpg" title="#Science" />  <br/> <br/>
			<input type="text" name="ans" id="ans" placeholder="Answer here" onclick="this.placeholder=''"/>
            <p><button class="btn btn-primary btn-large" type="submit" name="sub_ans">Lock Kiya Jaye &raquo;</button></p>
			</fieldset>
			</form>
          </div>
        </div>
      </div>
      <hr style="margin:10px 0">

      <footer style="text-align:center;">
  <?php include('footer.php'); ?>
      </footer>
    </div>
<div id="lightsoff" style="width:100%;height:100%;position:fixed;background-color:#000000;z-index:-1;opacity:0;left:0px;top:0px;"></div>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="./js/lightsoff.js"></script>
  </body>
</html>
