<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body bgcolor="gray">

<div ng-app="myApp" ng-controller="myCtrl"> 
<div align="center">
<h1>select</h1>

<select><option ng-repeat="x in content">{{x.name}}</option></select>
</div>
</div>
<div>{{name}}</div>

<?php
$file;
$dir = "upload/";?>

<div ng-model="name"><?php if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo '<a href="./upload/'.$file.'">'. $file .'</a> <br>';
    }
    closedir($dh);
  }
}
?>
</div>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.post("select.php")
  .then(function(response) {
      $scope.content = response.data;
      $scope.statuscode = response.status;
      $scope.statustext = response.statusText;            
  });
});
</script>

</body>
</html>