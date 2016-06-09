
    // $scope.page = 1;
    // $scope.accoms = $http.get('accommodationJson', {params: { page: $scope.page }}).success(function(response) {
    //     return response.data;
    // });

  
  // $scope.loadmore = function() {
  //   $scope.page += 1;
  //   $scope.accoms.push = $http.get('accommodationJson', {params: { page: $scope.page }}).success(function(response) {
  //     return response.data;
  //     });
  //   };


// Define the `phonecatApp` module
var phonecatApp = angular.module('phonecatApp', []);

// Define the `PhoneListController` controller on the `phonecatApp` module
phonecatApp.controller('PhoneListController', function PhoneListController($scope) {
  $scope.phones = [
    {
      name: 'Nexus S',
      snippet: 'Fast just got faster with Nexus S.'
    }, {
      name: 'Motorola XOOM™ with Wi-Fi',
      snippet: 'The Next, Next Generation tablet.'
    }, {
      name: 'MOTOROLA XOOM™',
      snippet: 'The Next, Next Generation tablet.'
    }
  ];
});
