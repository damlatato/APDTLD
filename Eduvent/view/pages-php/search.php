<!DOCTYPE html>
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
<body>

<?php
$term=$_GET['go'];

$con=mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "eduventdb");

/*$query="SELECT * FROM events
		  WHERE MATCH(EventTitle, EventDescription, EventLocation, EventTopics)
		  AGAINST ('" . $term . "'  IN NATURAL LANGUAGE MODE)
";*/

$query="SELECT * FROM events WHERE (
		(EventTitle LIKE '%" . $term . "%') OR
		(EventDescription LIKE '%" . $term . "%') OR
		(EventLocation LIKE '%" . $term . "%') OR
		(EventTopics LIKE '%" . $term . "%')
)";

$result=mysqli_query($con, $query) or die('Error: ' . mysqli_error($con));

echo "<table>
<tr>
<th>ID</th>
<th>Title</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['EventTitle'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>