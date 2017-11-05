<?php  
	$db = mysqli_connect('localhost', 'root', '', 'dynapic');
	$sql = "SELECT * FROM `dynapic` ORDER BY `id` ASC";
	$result = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Html5 slider</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Html5 slider" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

	<!-- Custom extra tools section -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/angular.min.js"></script>
    <script src="js/jquery-2.0.2.js"></script>

</head>
<body>

	<div class="container">
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<header>
		<h1>Dynamic Slider Application</h1>
	</header>

	<div id="wowslider-container1">
		<!-- Audio -->
		<audio src="engine1/Hotel_California_Acoustic.mp3"></audio>
		<div class="ws_images">
			<ul> 
			<?php while ($row = mysqli_fetch_array($result)) : ?>
				<li><img src="data1/images/<?php echo $row['photo_image']; ?>" alt="<?php echo $row['photo_alt']; ?>" title="<?php echo $row['photo_title']; ?>" id="<?php echo $row['photo_hash']; ?>"/></li>
			<?php endwhile; ?>
			</ul>
		</div>	<!-- .ws_images -->
		<div class="ws_bullets">
			<div>
			<?php 
				$db = mysqli_connect('localhost', 'root', '', 'dynapic');
				$sql = "SELECT * FROM `dynapic` ORDER BY `id` ASC";
				$result = $db->query($sql);
			?>
			
			<?php while ($row = mysqli_fetch_array($result)) : ?>
				<a href="#" title="<?php echo $row['photo_title']; ?>"><span><img src="data1/tooltips/<?php echo $row['photo_image']; ?>" width="100" height="100" alt="<?php echo $row['photo_alt']; ?>"/><?php echo $row['id']; ?></span></a>
			<?php endwhile; ?>
			</div>
		</div> <!-- .ws_bullets -->
		<div class="ws_script" style="position:absolute;left:-99%">
			<a href="http://wowslider.net">html5 slider</a> by WOWSlider.com v8.8
		</div> <!-- .ws_script -->
		<div class="ws_shadow"></div>
	</div> <!-- .wowslider-container1 -->


	<div class="upload" ng-app="myapp" ng-controller="myController" ng-init="select()">  
        <div class="upload-items">
             <input type="file" file-input="files"/>  
             <button class="btn" ng-click="uploadFile()" id="upload">Upload</button>  
        </div>  
		<div class="upload-images-container">
        <div class="upload-images" ng-repeat="image in images">
             <img ng-src="data1/images/{{image.photo_image}}" width="125" height="125"/> 
             <button name="delete" ng-click="deleteImage(image.id)" class="btn delete"> Delete</button>
        </div>
        </div>
   </div> <!-- .upload -->

   <footer>
   		<p>Sadang, Daniella maee Alimania, Mark Irish Cana, Jesse boy Camacho</p>
   </footer>
</div>	<!-- .container -->




	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->
	
<script>  
 var app = angular.module("myapp", []);  
 app.directive("fileInput", function($parse){  
      return{  
           link: function($scope, element, attrs){  
                element.on("change", function(event){  
                     var files = event.target.files;  
                     //console.log(files[0].name);  
                     $parse(attrs.fileInput).assign($scope, element[0].files);  
                     $scope.$apply();  
                });  
           }  
      }  
 });  
 app.controller("myController", function($scope, $http){  
      $scope.uploadFile = function(){  
           var form_data = new FormData();  
           angular.forEach($scope.files, function(file){  
                form_data.append('file', file);  
           });  
           $http.post('function/upload.php', form_data,  
           {  
                transformRequest: angular.identity,  
                headers: {'Content-Type': undefined,'Process-Data': false}  
           }).then(function(response){  
                alert(response.data);  
                $scope.select();  
           });  
      }  
      $scope.select = function(){  
           $http.get("function/select.php")
          .then(function(responce) {
            $scope.images = responce.data;
          });
      }  

      //delete data by the help of delete.php
      $scope.deleteImage = function(id) {
        if (confirm("Are you sure you want to delete this data?")) {
          $http.post("function/delete.php", {'id': id})
          .then(function(responce) {
            $scope.message = responce.data;
            alert(responce.data);
            $scope.select();
          });
        }
        else
        {
          return false;
        }
      }
 });  
 </script>  





</body>
</html>