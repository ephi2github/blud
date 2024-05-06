<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><body bgcolor="" >
  <script type="text/javascript">
    </script>
</head>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 15px;
    }
  </style>
</head>
<body>
<form>

<div id="all">

  <img src="chh.JPG" name="slide" width="1002" height="638" />
  <script>
    </script>
    <div id="header" ><?php include("openpage.php");?></div>
    <div id="main_container">
      <div style=" margin-left:0px ;"id="left_content">
        <h2 align=" center" >Available donors</h2>
        <?php
          session_start();

          // Use mysqlii_connect instead of mysqli_connect
          $con = mysqlii_connect("localhost", "root", "", "brc");

          // Check connection
          if (!$con) {
            die("Failed to connect: " . mysqlii_connect_error());
          }

          $sql = "select * from drreg";
          $result = mysqlii_query($con, $sql) or die("Query Error: " . mysqlii_error($con));

          if (!$result) {
            die("Unable to query:");
          }

          echo "<table border=1>";
          echo "<tr><th>donor_Id</th><th>fname</th><th>mname</th><th>lname</th><th>sex</th><th>age</th><th>date</th><th>zone</th><th>city</th><th>mobile</th><th>email </th><th>woreda</th><th>kebele</th><th>bloodgroup</th></tr>";
          while ($row = mysqlii_fetch_row($result)) {
            echo "<tr>";
            for ($i = 0; $i < count($row); $i++) {
              echo "<td>$row[$i]</td> ";
            }
            echo "</tr> ";
          }
          echo "</table>";

          echo "<a href='link.html'></a>";

          mysqlii_close($con); // Close connection
        ?>
      </form>
    </div>
  </div>
  <div id="footer" ><center><font color="white">Copyright &copy; 2016 Gondar Blood Bank</font></center></div>
</div>
</body>
</html>
