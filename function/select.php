<?php  
 $connect = mysqli_connect("localhost", "root", "", "dynapic");  
 $output = '';  
 $query = "SELECT * FROM dynapic ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output); 
?>  