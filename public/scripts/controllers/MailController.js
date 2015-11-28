(function() {

	'use strict';

	angular
		.module('workoutApp')
		.controller('MailController', MailController);

		function MailController($scope, $http) {

			$scope.submitConsultation = function() {
				//var data = { 'email': $scope.email };
				$http({
					method: 'POST',
					url: '/submitConsultationForm',
					data : { 'email': $scope.email },
					headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
				});
			}	
		
			$scope.subscribe = function() {
				var data = { 'email': $scope.subscriber };
				$http:({
					method: 'POST',
					url: '/subscribe',
					data: { 'email': $scope.subscriber },
					headers: { 'Content-Type': 'application/x-www-form-urlencoded'}
				});
		}
	}
		

		
})();