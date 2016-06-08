
    

  
 


var bkkApp = angular.module('bkkApp', []);

bkkApp.controller('AccommodationController', ['$scope','$http' ,function ($scope, $http) {
  $scope.accoms;
  $scope.page;
  $scope.init = function(){
    $scope.page = 1;
    $http.get('accommodationJson',
      {
        params: {
            page: $scope.page
        }
     })
    .success(function(response) {
        if(response.status == 200){
          $scope.accoms = response.posts.data;    
        }
    });
  }
  $scope.loadmore = function() {
    $scope.page += 1;
    $http.get('accommodationJson',
    {
      params: {
          page: $scope.page
      }
    })
    .success(function(response) {
      if(response.status == 200){
        toObject(response.posts.data);
        
        
      }
    });
  }
  
  function toObject(arr) {
    var rv = {};
    if(arr.length == 0){
      $scope.page -= 1;
    }
    for (var i = 0; i < arr.length; ++i){
      if (arr[i] !== undefined) rv[i] = arr[i];
      $scope.accoms.push(rv[i]);
    }
  }
}]);