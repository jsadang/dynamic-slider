<?php
//connection
$connect = mysqli_connect("localhost", "root", "", "dynapic");
$data = json_decode(file_get_contents("php://input")); // convert json string to php assocciative array
// count is to checked the lenght of an array
if(count($data) > 0){
 	$id = $data->id; // get the value id
 	$query = "DELETE FROM dynapic WHERE id='$id' ";
 	if (mysqli_query($connect, $query)) {
 		echo "Photo Deleted";
 	}
 	else
 	{
 		echo "Error";
 	}
}

?>