<!DOCTYPE html>
<html>

<head>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
</head>

<body>

<div ng-app="myApp" ng-controller="articlesCtrl"> 

  <li ng-repeat="article in articles">
  <h1>{{ article.title }}</h1>
  {{ article.section_name }} <br />
  <img src="{{ article.image|filterSlika  }}" />
</div>



<script>
var app = angular.module('myApp', []);

app.controller('articlesCtrl', function($scope, $http) {
  $http.get("http://api.kme.si/v1/articles?resource_id=22&order=desc&limit=5")
  .success(function (data) {
	  $scope.articles = data.data.list;
  });
});


app.filter('filterSlika', function() {
  return function(input) {
    input = input.replace('##WIDTH##', '237')
	input = input.replace('##HEIGHT##', '237')

    return input;
  };
})

</script>

</body>
</html>

