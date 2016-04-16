var app = angular.module( 'application' , [] );

app.controller( 'controllerTablePerformers' , [ '$scope' , '$filter', '$http' , function( $scope , $filter, $http){
  $http.get('/getPerformers').
    success(function(data, status, headers, config) {
      $scope.performers = data;
    }).
      error(function(data, status, headers, config) {
        // log error
      });
}]);