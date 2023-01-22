<?php
require 'connection.php';
error_reporting(E_ERROR);
$repas = [];
$query="select id_rep , nom_rep , calor_rep , qte_rep , cin from repas; ";

if($result= mysqli_query($con,$query))
{
	$cr=0;
	while($row = mysqli_fetch_assoc($result))
	{
		$repas[$cr]['id'] = $row['id_rep'];
		$repas[$cr]['nom'] = $row['nom_rep'];
		$repas[$cr]['calorie'] = $row['calor_rep'];
		$repas[$cr]['qte'] = $row['qte_rep'];
		//$repas[$cr]['image'] = "<img src='data:image;base64'".base64_encode($row['img_rep'])."alt= 'Image' style='width:100px; height:100px; background-repeat:round;'>";
		$cr++;
	}
print_r($repas);
	//echo json_encode($repas);
}
else
{
	http_response_code(404);
}
?>