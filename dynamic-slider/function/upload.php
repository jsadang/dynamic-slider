<?php  
 $connect = mysqli_connect("localhost", "root", "", "dynapic");  
 if(!empty($_FILES))  
 {  
      $path = '../data1/images/' . $_FILES['file']['name'];  
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      {  
           $insertQuery = "INSERT INTO dynapic(photo_image, photo_title) VALUES ('".$_FILES['file']['name']."', '".$_FILES['file']['name']."')";  
           if(mysqli_query($connect, $insertQuery))  
           {  
                echo "File Uploaded! \n ---> Refresh The Page to make Changes";  
           }  
           else  
           {  
                echo 'File Uploaded But not Saved';  
           }  
      }  
 }  
 else  
 {  
      echo 'Please Select an Image';  
 }  
 ?>  