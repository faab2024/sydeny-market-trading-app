<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>

<?php
$servername = "localhost";
$username = "u587940520_gray";
$password = "!@#123qweasdZXC";
$dbname = "u587940520_gary";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM alldata LIMIT 10";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    
echo "<thead><th>".$row["filename"]."</th></thead>";
echo "<tr>
<th>Date</th>
<th>Close</th>
<th>Volume</th>
</tr>";

$rowData=explode(",",$row["file_contents"]);

//echo count($data);
  
echo "<tr>";
/*
echo "<td>".$rowData[0]."</td>";
echo "<td>".$rowData[1]."</td>";
echo "<td>".$rowData[2]."</td>";
echo "<td>".$rowData[3]."</td>";
echo "<td>".$rowData[4]."</td>";
*/
echo "<td>".$rowData[5]."</td>";
echo "<td>".$rowData[9]."</td>";
echo "<td>".$rowData[10]."</td>";
echo "</tr>";

}

} else { 
    echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>