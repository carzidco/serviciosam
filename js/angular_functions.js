var app = angular.module('serviciosAmApp', []);

//Main Nav Menu Bar
app.directive('menu', function() {
	return {
		restrict: 'E',
		templateUrl: 'menu.html'
	};
});

//Logo
app.directive('logo', function() {
	return {
		restrict: 'E',
		templateUrl: 'logo.html'
	};
});

app.directive('footerinfo', function() {
	return {
		restrict: 'E',
		templateUrl: 'footer.html'
	};
});

app.controller('HeaderContactInfo', function($scope){
	$scope.headerContact = '(506) 2234-4484 / 2234-9726 / 2253-2283';
});

app.controller('EditController', function($scope, $http){

                $http({
                        method : 'GET',
                        url : 'classes/ICall.php?method=getproducts',
                        headers : {'Content-Type': 'application/x-www-form-urlencoded'}  

                })
                .success(function(res){
                        $scope.products = res;
                })
                .error(function(error){
                        console.log(error);
                });
});
