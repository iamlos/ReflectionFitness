<!doctype html>
<html ng-app="workoutApp">
	<head>
		<title>Reflection Fitness</title>
		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
	</head>
	
	<!-- define angular controller
	<body ng-controller="WorkoutController as vm"> -->
    <body>
		
		<!-- Main container and content with injected views -->
		<div class="container-fluid" id="container-fluid">
            
            <!-- ui-router view injection -->
            <!-- <div ui-view></div> -->
            <div ui-view="adminNavbar"></div>
            <div ui-view="userNavbar"></div>
            <div ui-view="profile"></div>

            <!-- NgRoute view injection -->
            <!-- <div ng-view></div> -->
      
        </div> <!-- global container -->
	</body>
	
	<!-- Application Dependencies -->
    <script type="text/javascript" src="bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
    <script type="text/javascript" src="bower_components/angular-resource/angular-resource.js"></script>
    <script type="text/javascript" src="bower_components/moment/moment.js"></script>
    <script type="text/javascript" src="bower_components/angular-ui-utils/ui-utils.js"></script>
    <script type="text/javascript" src="bower_components/angular-route/angular-route.js"></script>
    <script type="text/javascript" src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script type="text/javascript" src="bower_components/satellizer/satellizer.js"></script>

    <!-- Application Scripts -->
    <script type="text/javascript" src="scripts/app.js"></script>

    <script type="text/javascript" src="scripts/controllers/WorkoutController.js"></script>
    <script type="text/javascript" src="scripts/controllers/AuthController.js"></script>
    <script type="text/javascript" src="scripts/controllers/UserController.js"></script>

    <script type="text/javascript" src="scripts/services/workout.js"></script>
    <script type="text/javascript" src="scripts/services/users.js"></script>
    <script type="text/javascript" src="scripts/services/bodyweight.js"></script>
    <script type="text/javascript" src="scripts/services/rep.js"></script>
    <script type="text/javascript" src="scripts/services/cardio.js"></script>
</html>

















