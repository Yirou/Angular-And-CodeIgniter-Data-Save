/**
 * Auteur Yirou
 */


var App = angular.module('myApp', []);
App.controller('FormController', function ($scope, $http) {
    $scope.name = undefined;
    $scope.city = undefined;
    $scope.message = "";
    $scope.users = Array();

    $scope.allUsers = function () {
        
        $http({
            method:"GET",
            url:'angular/getUsers'
        }).success(function (data){
            $scope.users = data[0].users;
            console.log($scope.users)
        });
    }();
    
   
    
    $scope.submitForm = function () {
        console.log("données en cours de transmission ...");
        $http({
            method: 'POST',
            url: 'angular/add',
            headers: {'Content-Type': 'application/json'},
            data: {name: $scope.name, city: $scope.city}
        }).success(function (data) {
            console.log(data);
            $scope.message = data[0].status;
            $scope.users = data[0].users;
        });
    };
});