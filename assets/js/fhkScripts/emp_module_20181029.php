<?php ?>
<script>
var app = angular.module('profileApp', []);

app.controller('cluster1', function($scope, $http) {

	//initializer
    angular.element(document).ready(function () {});

    $scope.message= "Hello AngularJs and Fahad";

    $scope.cvSection= {
    	display: "",

    };

    //cluster 1 CV section
    //list of all cvs
    //display primary sign on permenant cv
    //click any cv to make it active
   
    //add latest cv which will replace primary cv
    //edit cv will replace active cv
    //delete, download and print will work on active cv

});
</script>