 <?php
 if(!isset($_SESSION))
 {
session_start();
}
include("profilesql.php");
$result = mysql_query("SELECT * FROM addfriends where meid='$_SESSION[stuid]' ");
$i=1;
while($row = mysql_fetch_array($result))
  { 
$uid1[$i] = $row["friendid"];
$i++;
  }
if(isset($_REQUEST['$uid1'])){
 $acrec1 = mysql_query("SELECT * FROM addfriends WHERE userid='$uid1[1]'");
}

if(isset($_REQUEST['$acrec2'])){
while($row = mysql_fetch_array($acrec2))
  {
	$img1[0]=  $row["image"];
  }
 } 
 if(isset($_REQUEST['$uid1'])){
  $acrec2 = mysql_query("SELECT * FROM addfriends WHERE userid='$uid1[2]'");
}
if(isset($_REQUEST['$acrec2'])){
while($row = mysql_fetch_array($acrec2))
  {
	$img1[1]=  $row["image"];
  }
  }
  if(isset($_REQUEST['$uid1'])){
  $acrec3 = mysql_query("SELECT * FROM profile WHERE userid='$uid1[3]' ");
}

if(isset($_REQUEST['$acrec3'])){
while($row = mysql_fetch_array($acrec3))
  {
	$img1[2]=  $row["image"];
  }
  }
  if(isset($_REQUEST['$uid1'])){
  $acrec4 = mysql_query("SELECT * FROM profile WHERE userid='$uid1[4]' ");
  }
  if(isset($_REQUEST['$acrec4'])){
while($row = mysql_fetch_array($acrec4))
  {
	$img1[3]=  $row["image"];
  }}
  ?>