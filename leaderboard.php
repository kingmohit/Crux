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
    <title>CRUX - LeaderBoard</title>
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
<?php
$conn = mysql_connect("ifestiitr.db.7118431.hostedresource.com","ifestiitr","D00rdie!");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ifestiitr", $conn);


$result = mysql_query("SELECT * FROM cruxdb order by lvl desc, timest asc");
$counter=1; ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span9" style="position:relative;left:13%;top:20%">
          <div class="hero-unit" id="hero-unit" style="z-index:1000;position:relative;visibility:visible;padding:10px 30px 10px 30px">
		  <h2>CRUX LEADERBOARD</h2>
<table class='table table-bordered table-hover table-condensed'>
<tr>
<th>Rank</th>
<th>Username</th>
<th>College</th>
<th>Level</th>
</tr>
<?php
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>".$counter."</td>";
  echo "<td>".$row['username']."</td>"; 
  echo "<td>".$row['college_name']."</td>";
  echo "<td>".$row['lvl']."</td>";
  echo "</tr>";
  $counter++;
} ?>
</table>
				</div>
			</div>
		</div>
	  </div>
<?php
mysql_close($conn);
?>
<div id="lightsoff" style="width:100%;height:100%;position:fixed;background-color:#000000;z-index:999;opacity:0.8;left:0px;top:0px;"></div>
<script>
function active()
{
var list=document.getElementsByTagName("li")[1];
list.setAttribute("class","active");
var list=document.getElementsByTagName("li")[0];
list.removeAttribute("class");
}
</script>
</body>
</html>