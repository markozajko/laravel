//Articles angular -index page
var app = angular.module('myApp', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });


app.controller('articlesCtrl', function($scope, $http) {
  
  $http.get("http://api.kme.si/v1/articles?resource_id=22&order=desc&limit=20")
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

app.filter('filterKategorija', function() {
  return function(input) {
    input = input.split("/");
    input = input.slice(-1)[0] 

    return input;
  };
})

app.controller('dadaj_priljubljene', function($scope, $http) {
   $scope.update = function(title, image, category) {
      console.log(title);
      console.log(image);
      console.log(category);

      $http({method: 'POST',
            url: 'http://localhost/2laravel/aplikacija/public/articles',                
            data: title,
        }).success(function (data) {
          alert(JSON.stringify(data));
      });
    };
});


//Popular articles angular - /articles page
var app1 = angular.module('myAppPopular', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });


app1.controller('popularCtrl', function($scope, $http) {
  $http.get("http://localhost/2laravel/aplikacija/public/articles/show" )
  .success(function (data) {
      $scope.populararticles = data.articles;
  });
});


