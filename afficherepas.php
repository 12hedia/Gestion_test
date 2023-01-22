<html>
<head>
<meta charset=utf-8">
</head>
<body>
<?php
$servername="127.0.0.1";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password) or die("connection failed");

mysqli_select_db($conn,'pfe');

mysqli_set_charset($conn, "utf8");

$query="select * from repas; ";
$result= mysqli_query($conn,$query);
echo"<table>";
while ($row =mysqli_fetch_assoc($result))
{
echo "<tr>";
echo "<td>".$row['id_rep']."</td>"; 
echo "<td>".$row['nom_rep']."</td>";
echo "<td>".$row['calor_rep']." cal </td>";
echo "<td>".$row['qte_rep']."</td>";

//echo"<td>";  <img src=<?php echo $row['img_rep'];width:"100" height:"100" background-repeat:"round" >"</td>";

echo"<td> <img src='data:image;base64'".base64_encode($row['img_rep'])."alt= 'Image' style='width:100px; height:100px; background-repeat:round;'></td>";
//echo"<td> <div style='width:100px; height:100px; background-repeat:round; background:urlencode(".base64_encode($row['img_rep']). ");'></div></td>";
echo "<td>".$row['cin']."</td>";
echo "<td><a href ='modifier.php?id=".$row['code']. "'>modifier </a></td>";
echo "</tr>";
}
echo"</table>";
?>
</body>
</html>