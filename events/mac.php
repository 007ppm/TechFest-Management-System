<?php
if(session_id()=='') {
  session_start();
}
 ?><!DOCTYPE html>
<html>
<head>
	<title>Pit Crew</title>
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../css/layout.css">
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:32px;
	top:137px;
	width:929px;
	height:439px;
	padding: 10px;
	border: 5px solid gray;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:18px;
	top:16px;
	width:384px;
	height:72px;
	margin:10px 15px auto auto;
	padding:20px,10px,10px,10px;
	border: 1px solid gray;
	background-color:#BBBBBB;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:18px;
	top:110px;
	width:143px;
	height:317px;
	border: 1px solid gray;
	z-index:2;
}
#apDiv4 {
	position:absolute;
	background: #dddddd;
	left:173px;
	top:168px;
	width:768px;
	height:274px;
	border: 1px solid gray;
	border-radius: 25000px;
	z-index:2;
}
#apDiv5 {
	position:absolute;
	/*border: 2px solid #a1a1a1; */
	padding: 10px 40px;
	width: 80px;
	left:172px;
	top:26px;
	width:683px;
	height:108px;
	z-index:2;
}
#apDiv6 {
	position:absolute;
	left:214px;
	top:175px;
	width:270px;
	height:118px;
	z-index:2;
}
#apDiv7 {
	position:absolute;
	left:605px;
	top:182px;
	width:342px;
	height:63px;
	z-index:3;
}
#apDiv8 {
	position:absolute;
	left:1010px;
	top:135px;
	width:350px;
	height:472px;
	z-index:1001;
	background-size: cover;
	background-position:center;
	background-image: url(../images/C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved%20Images_autowp-ru_volkswagen_golf_5-door_156-1024x768.jpg);
}
.style1 {font-size: x-large}
-->
</style>
</head>
<body>
<div id="apDiv7"><?php
  if(isset($_SESSION["tech_name"])) {
    echo '<a href="../event_reg.php">';
  } else {
    echo '<a href="../login.php">';
  }
  ?><img src="../images/register_button.png" alt="reg" width="356" height="63"></a></div>
<div id="apDiv8"></div>
<header>
<h1>TECH LAND</h1>

</header>
<nav>
<div class="dropdown">
  <div align="right"><img src="../images/burger_menu.png" alt="menu" height="30" width="50">  </div>
  <div class="dropdown-content">
    <div align="center">
      <ul>
          <li><a href="../homepage1.php">Home</a></li>
      </ul>
    </div>
    <ul>
			<li><a class="active" href="../schedule.php">Schedule</a></li>
  <li><a href="../aboutus.php">About</a></li>
  <?php
    if(isset($_SESSION["tech_name"])){
      echo '<li>
        <a href="../profile.php">Profile</a>
        </li>
        <li>
        <a href="../php/logout.php">Log Out</a>
        </li>';
    } elseif(isset($_SESSION["admin"])){
      echo '<li>
        <a href="../admin_prof.php">Profile</a>
        </li>
        <li>
        <a href="../php/logout.php">Log Out</a>
        </li>';
    } elseif (isset($_SESSION["college"])) {
      echo '<li>
        <a href="../college_prof.php">Profile</a>
        </li>
        <li>
        <a href="../php/logout.php">Log Out</a>
        </li>';
    } else {
      echo '<li>
        <a href="../login.php">Log In/Register</a>
      </li>';
    }?></ul>
  </div>
</div>
</nav>
<section>
<div id="apDiv1">
<div id="apDiv2">
  <div align="center" class="style1"><h3>PIT CREW</h3></div>
</div>
<div id="apDiv3">
  <img src="../images/trophy.png" alt="trophy" width="120" height="40">
  <h3>PRIZE </h3>
  <h4>1ST	:</h4>
  <h5>2ND:</h5>
  <h6>3RD:</h6>
<h6>pradeek ppm 9037543995</h6>
  </div>
<div id="apDiv4">
<h1 align="center">DESCRIPTION</h1>
<p align="center"> Dept. of Mechanical Engineering //17 Feb 2016 10AM<br>
  If you believe spanners are part of your fingers, show us how much mech runs through your blood. We provide a machine you are well versed in. the only problem is that it will be disassembled. All you need to do is put it back and make it work! Oh yeah..all those who hate grease and oil in their fingers- go watch pogo!!!</p>
<p align="center"> Rules</p>
<p align="center">-A team can comprise two to three members.<br>
  -Any sort of external help is prohibited.<br>
  -Use of electronic devices is prohibited.</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</div>
<div id="apDiv5"></div>

</div>
</section>
<marquee id="m1"> <font color="red">EVENT SHEDULED ON FEB 30</font></marquee>
<footer>
Copyright © techland.com
</footer>

</body>
</html>
