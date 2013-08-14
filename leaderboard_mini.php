<html>
<head>
<title>Mini Leaderboard</title>
<style type="text/css">
#leaderboard
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:100%;
border-collapse:collapse;
}
#leaderboard th
{
font-size:15px;
padding:2px 0px 2px 0px;
background-color:#A7C942;
color:#ffffff;
}
#leaderboard td
{
text-align:center;
font-size:12px;
border:1px solid #98bf21;
padding:2px 0px 2px 0px;
}

</style>
</head>
<body>
<?php
$conn = mysql_connect("ifestiitr.db.7118431.hostedresource.com","ifestiitr","D00rdie!");
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("ifestiitr", $conn);


$result = mysql_query("SELECT * FROM cruxdb order by lvl desc, timest asc");
$counter=1;
echo "<table id='leaderboard' border=2 cellpadding=7>
<tr>
<th>Rank</th>
<th>Username</th>
<th>Level</th>
</tr>";


while($row = mysql_fetch_array($result))
  {
  if($counter==16)
  break;
  echo "<tr>";
  echo "<td>".$counter."</td>";
  echo "<td>".$row['username']."</td>"; 
  echo "<td>".$row['lvl']."</td>";
  echo "</tr>";
  $counter++;
}
echo "</table>";
mysql_close($conn);
?>
</body>
</html>