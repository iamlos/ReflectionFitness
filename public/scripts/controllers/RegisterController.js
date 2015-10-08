//Define Registration controller for RESTFUL API ngResource

(function() {

	'use strict';

	angular
		.module('workoutApp')
		.controller('RegisterController', RegisterController);

		function RegisterController(stripe, $scope) {

			//var vm = this;

			//stripe token
			var token;

			//stripe-form directive Stripe reponse handler callback

			$scope.stripeReflectionFitness = function(status, response) {
				if(response.error) {
					console.log("Stripe Error");
				} else {
					// got stripe token
					token = response.id
					//charge stripe token to API
					console.log("token sent response");
					console.log(token);
					//send Stripe to backend API to charge and
					//save new subscriber
					stripe.subscribe(token).then(function(success) {
						console.log("User added and charged");
					}, function(error) {
						console.log("Charge error");
					});
				}
			}
		}
})();