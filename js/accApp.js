angular.module ('accApp', [
    'ngRoute'
])

.config(['$routeProvider', 
  function($routeProvider){
    $routeProvider
          .when('/', {
            templateUrl: '../accApp/templates/main.php'
          })
          .when('/dashboard', {
            templateUrl: '../accApp/templates/dashboard.php'
          }).when('/profile', {
            templateUrl: '../accApp/templates/profile.php'
          })
      .otherwise({
        redirectTo: '/'
      })
  }
])