<!-- <!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body> -->

<?php
require_once 'db_connect.php';

// $q = intval($_GET['q']);
$q = $_GET['q'];

$conn = db_conn();
    //$sql = "SELECT `demail` FROM `doctor` ;";
    echo $q;
    $sql = "SELECT * FROM `supervisor` WHERE `susername`= '".$q."';";


$result = $conn->query($sql);


// echo "<table>
// <tr>
// <th>id</th>
// <th>email</th>
// <th>Age</th>
// <th>Hometown</th>
// <th>Job</th>
// </tr>";
// $row = $result->fetch();
//  {
// //  $a= $result->fetch();


// //echo "hellow";
//   echo "<tr>";
//   echo "<td>" . $row['did'] . "</td>";
//   echo "<td>" . $row['demail'] . "</td>";
// //   echo "<td>" . $row['Age'] . "</td>";
// //   echo "<td>" . $row['Hometown'] . "</td>";
// //   echo "<td>" . $row['Job'] . "</td>";
//   echo "</tr>";
// }
// echo "</table>";
/////////////////////////////////////////////////////////////////////////////////////

if ($result->rowCount() > 0){
  echo"<br>";
  echo " sorry the user name is already taken";
}



//mysqli_close($conn);
 ?>
<!--  </body>
 </html> -->