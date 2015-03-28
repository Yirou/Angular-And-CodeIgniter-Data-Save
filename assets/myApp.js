/**
 * Auteur Yirou
 */


var App = angular.module('myApp', []);
App.controller('FormController', function ($scope, $http) {
    $scope.name = undefined;
    $scope.city = undefined;
    $scope.message = "";

    $scope.submitForm = function () {
        console.log("données en cours de transmission ...");
        $http({
            method: 'POST',
            url: 'angular/add',
            headers: {'Content-Type': 'application/json'},
            data: {name: $scope.name, city: $scope.city}
        }).success(function (data) {
            $scope.message = data.status;
        });
    };
});