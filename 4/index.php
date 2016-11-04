<!doctype html>
<html ng-app="scopeExample">
<head>
    <meta charset="utf-8"/>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
    <script src="demo.js"></script>
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/styles/default.min.css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>
</head>
<body>
<div style="overflow: hidden;">
    <div style="width:50%; float: left;">
        <h2>$scope</h2>
        <div ng-controller="MyController">
            Twoje imię:

            <input type="text" ng-model="username">


            <button ng-click='sayHello()'>Pozdrów</button>
            <hr style="width:80%; float: left;">
            <br/>
            <br/>
            {{greeting}}
        </div>
    </div>
    <div style="width:50%; float: left;" ng-non-bindable>
        <pre>
            <code class="JavaScript" id="code1">
<?php echo htmlspecialchars(file_get_contents('snips/2.js')); ?>
            </code>
        </pre>
        <pre>
            <code class="html" id="code2">
<?php echo htmlspecialchars(file_get_contents('snips/1.html')); ?>
            </code>
        </pre>
    </div>
    <script>
        hljs.highlightBlock(document.getElementById('code1'));
        hljs.highlightBlock(document.getElementById('code2'));
    </script>
</div>
</body>
</html>
