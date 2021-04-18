<html>
<head>
  <style>table{margin: 20px auto; border-style:solid; border-width:2px;}</style>
</head>

<body bgcolor="#f8d7da">
<?php
$con = mysql_connect("sql206.epizy.com","epiz_24332971","wKlEK6YhZL6Hm0");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("epiz_24332971_db_name", $con);
$result = mysql_query("SELECT * FROM stud_tb");
echo "<table border='1'>
<tr>
  <th>First_Name</th>
  <th>Last_Name</th>
  <th>Department</th>
  <th>E-mail</th>
</tr>";
 while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysql_close($con);
?>
</body>
</html>