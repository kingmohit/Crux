<?PHP
require_once("../profile/include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("../profile/login-reg.php");
    exit;
}
$username=$fgmembersite->Username();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CRUX - Team</title>
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

  <body onload="active()">
  <?php include("header.php"); ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9" style="position:relative;left:13%;top:20%">
          <div class="hero-unit" id="hero-unit" style="z-index:1000;position:relative;visibility:visible;padding-top:10px;padding-left:30px;padding-bottom:0px">
		  <h2 style="text-align:center;">CRUX TEAM</h2><hr/>
		  <!--fieldset-->
		  <legend style="text-align:center;"><h3>Co-ordinator</h3></legend>
		  <h4 style="text-align:center;"><a href="http://www.facebook.com/amishbedi" target="_blank" style="color:rgb(0,0,0)">Amish Bedi, III Year, CSE</a></h4>
		  <!--/fieldset--><br/><br/>
		  <fieldset>
		  <legend style="text-align:center;"><h3>The Creators</h3></legend>
		  <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                  <img src="http://i.imgur.com/vAMSy.png" style="height:200px" alt="">
                  <div class="caption">
                    <h4><a href="http://www.facebook.com/alive.akshay" target="_blank" style="color:rgb(0,0,0)">Akshay Agarwal, II Year, CSE</a></h4>
                    <h6>It was just too much fun making Crux 2.0!</h6>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="http://alltheragefaces.com/img/faces/large/angry-say-what-again-l.png" style="height:200px" alt="">
                  <div class="caption">
                    <h4><a href="http://www.facebook.com/thedarkrai" target="_blank" style="color:rgb(0,0,0)">Ankit Patel, II Year, CSE</a></h4>
                    <h6>I'm WikiPatel ! Dare say "what" again :P.</h6>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="http://alltheragefaces.com/img/faces/large/happy-kitteh-smile-l.png" style="height:200px" alt="">
                  <div class="caption">
                    <h4><a href="http://www.facebook.com/mohit70007" target="_blank" style="color:rgb(0,0,0)">Mohit Choudhary, II Year, CSE</a></h4>
                    <h6>I love making weird connections. Hence the tough questions :P</h6>
                  </div>
                </div>
              </li>
			  <li class="span3">
                <div class="thumbnail">
                  <img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-ash4/185177_313164272115067_1542204732_n.jpg" style="height:200px" alt="">
                  <div class="caption">
                    <h4><a href="http://www.facebook.com/shreyas.mishra.94" target="_blank" style="color:rgb(0,0,0)">Shreyas Mishra, II Year, CSE</a></h4>
                    <h6>Seriously, I don't give a ChainSaw! :P</h6>
                  </div>
                </div>
              </li>
            </ul>
			</fieldset>
          </div>
          </div>
        </div>
      </div>
	  </div>
<div id="lightsoff" style="width:100%;height:100%;position:fixed;background-color:#000000;z-index:999;opacity:0.8;left:0px;top:0px;"></div>
<script>
function active()
{
var list=document.getElementsByTagName("li")[2];
list.setAttribute("class","active");
var list=document.getElementsByTagName("li")[0];
list.removeAttribute("class");
}
</script>
</body>
</html>
