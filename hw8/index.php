<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My First Project</title>
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td0,td1,td2, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td0 = tr[i].getElementsByTagName("td")[0];
	td1 = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    if (td0||td1||td2) {
      txtValue0 = td0.textContent;
	  txtValue1 = td1.textContent;
      txtValue2 = td2.textContent;
      if (txtValue0.toUpperCase().indexOf(filter) > -1 ||txtValue1.toUpperCase().indexOf(filter) > -1||txtValue2.toUpperCase().indexOf(filter) > -1) 
	  {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
<link rel="stylesheet" href="css/style.css" />
</head>

<body>
<div id="logo">
<img src="img/logo.png" alt="logo" height="150px" width="100%" />
</div>
<div id="ban">
<img src="img/bird5.jpg" alt="bird" height="150px" width="100%" />
</div>
<div id="menu"> <marquee> <p> This Site Is For Bird Lovers...</p></marquee></div>
<div id="lsb"> 
<a href="index.php"><p> Home </p></a>
<p> Contact </p>
<p> Aboutus </p>
<p> <a href="model/userform.php">Signup</a> </p>
<p> <a href="model/alluserindex.php"> All User</a></p>
</div>
<div id="rsb"> Right side bar</div>

<div id="cont">
    <input id="myInput" type="text" placeholder="search here"  onKeyUp="return myFunction()";>
<table id="myTable" border="2px" width="100%">
<tr><th>Id</th><th>Name</th><th>Dept</th></tr>
<tr><td>10003</td><td>Tania</td><td>CSE</td></tr>
<tr><td>10005</td><td>Ritu</td><td>CSE</td></tr>
<tr><td>10007</td><td>Dolon</td><td>EEE</td></tr>
<tr><td>10011</td><td>Chitra</td><td>BSS</td></tr>
    </table>
        </div>
<div id="footer"> 
<div id="footercont"><p> designe by btch Tania </p>  </div>
<div id="icon">
<a href="index.html"><img src="img/fb.jpg" /></a>
<img src="img/tr.png" />
<img src="img/wt.jpg" />
</div>
        </div>
    </body>
</html>
