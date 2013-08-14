<?php
if(isset($_POST))
{
	$conn=mysql_connect("ifestiitr.db.7118431.hostedresource.com","ifestiitr","D00rdie!") or die('Cannot connect to the database because: ' . mysql_error());
	mysql_select_db("ifestiitr",$conn);
	$sql="SELECT * FROM cruxdb WHERE username = '$username'";
	$res1=mysql_query($sql) or  die(mysql_error());
	$row1=mysql_fetch_assoc($res1);
	$level=$row1['lvl'];
	$sql2="SELECT * FROM ansdb WHERE lvl = '$lvl'";
	$res2=mysql_query($sql2) or  die(mysql_error());
	$row2=mysql_fetch_assoc($res2);
	$answer = $row2['ans'];
	
	if(mysql_num_rows($res1)!=1)
	{
		header("Location: http://ifest.ieeeiitr.com/profile/home.php");
	}
	else if($level>=$lvl)
	{
		 if(isset($_POST['ans']))
		 {
		 $salt='alliswell';
		 $tmp=md5($_POST['ans']);
		  $ans=md5($tmp.$salt);
		  if($ans==$answer)
		  {			    
			if($level==$lvl)
			{			     
			 $level=$level+1;
			 $sql1="UPDATE cruxdb SET lvl=$level, lvl".($level)."= NOW(),timest= NOW() WHERE username = '$username'";
			 $res1=mysql_query($sql1,$conn) or die(mysql_error());
			 mysql_close($conn);
			}
			header("Location: lvl".($lvl+1).".php");
		  }
		  else
		  {
			header("Location: lvl".$lvl.".php");
			#echo "Wrong Answer";
		  }
		}
	}
	else
	{	
		header("Location: bitchplease.html");
	}
}
	mysql_close($conn);

?>