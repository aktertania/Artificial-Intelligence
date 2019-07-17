<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My First Project </title>
<link rel="stylesheet" href="../css/style.css" />
<style>
#cont{ height:400px; width:79.5%;left:20%; right:20%; top:200px; position:absolute; border:2px solid # 0FF; background-color: #666;}
</style>
</head>

<body>
<div id="logo">
<img src="../img/logo.png" alt="bird" height="150px" width="100%" />
</div>
<div id="ban">
<img src="../img/bird5.jpg" alt="bird" height="150px" width="100%" />
</div>
<div id="menu"> <marquee> <p> This Site Is For Bird Lovers...</p></marquee></div>
<div id="lsb"> 
<a href="../index.php"><p> Home </p></a>
<p> Contact </p>
<p> Aboutus </p>
<p> <a href="../model/userform.php">Signup</a> </p>
<p> <a href="../model/alluserindex.php"> All User</a></p>
</div>

<div id="cont">
<?php
include("../view/alluser.php");
?>
</div>

<div id="footer"> 
<div id="footercont"><p> designe by btch Tania </p>  </div>
<div id="icon">
<a href="index.html"><img src="../img/fb.jpg" /></a>
<img src="../img/tr.png" />
<img src="../img/wt.jpg" />
</div>

</div>


</body>
</html>
