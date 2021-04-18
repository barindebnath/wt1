<html>
<head>
  <style>table{border-style:solid;border-width:2px;margin: 20px auto;}</style>
</head>

<body bgcolor="#f8d7da">
  <a href="register.html">Add New Data</a><br/><br/>
  <?php
  $con = mysql_connect("sql206.epizy.com","epiz_24332971","wKlEK6YhZL6Hm0");
  if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
  mysql_select_db("epiz_24332971_db_name", $con);
   $result = mysql_query("SELECT * FROM user_tb");
   echo "<table border='1'>
  <tr>
  <th>NAME</th>
  <th>AGE</th>
  <th>CITY</th>
  </tr>";
   while($row = mysql_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "</tr>";
    }
  echo "</table>";
   mysql_close($con);
  ?>
</body>
</html>