<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Angular Blog</title>
    <!-- include css -->
    <link rel="stylesheet" href="/bower_components/angular-material/angular-material.min.css"/>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.min.css"/>
    <!-- include js -->
    <script src="/bower_components/angular/angular.min.js"></script>
    <script src="/bower_components/angular-animate/angular-animate.min.js"></script>
    <script src="/bower_components/angular-aria/angular-aria.min.js"></script>
    <script src="/bower_components/angular-messages/angular-messages.min.js"></script>
    <script src="/bower_components/angular-material/angular-material.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- include app js -->
    <script src="/app/app.js"></script>
    <script src="/app/js/controllers/MainController.js"></script>
    
</head>
<body ng-app="app">
    
    <div ng-controller="MainController">
        <h1>{{ testText }}</h1>
    </div>
    
</body>
</html>