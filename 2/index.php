<!doctype html>
<html ng-app="demoApp">
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
        <div ng-controller="DemoController as demo2">
            <h2>Angular Binding</h2>

            <label for="">Podaj imię:</label><br />
            <input type="text" ng-model="demo2.imie">

            <br /><br/>

            <label for="">Podaj swój wiek:</label><br />
            <input type="text" ng-model="demo2.wiek">

            <h3>Filmy dla {{ demo2.imie }}:</h3>
            <div style="height: 100px; position: relative; width: 100%;">
                <div style="width:33%; background: red; text-align: center; height: 100px; font-size: 25px; position: absolute; top: 0; left: 0">
                    Dzieci:<br/>
                    Król Lew
                </div>
                <div ng-show="demo2.wiek>13" style="width:33%; background: orchid; text-align: center; height: 100px; font-size: 25px; position: absolute; top: 0; left: 33%">
                    13+<br />
                    Pulp fiction
                </div>
                <div ng-show="demo2.wiek>18" style="width:33%; background: cornflowerblue; text-align: center; height: 100px; font-size: 25px; position: absolute; top: 0; left: 66%">
                    18+<br />
                    Omen
                </div>
            </div>
        </div>
    </div>
    <div style="width:50%; float: left;" ng-non-bindable>
        <pre>
            <code class="html" id="code1">
<?php echo htmlspecialchars(file_get_contents('snips/1.html')); ?>
            </code>
        </pre>
    </div>
    <script>
        hljs.highlightBlock(document.getElementById('code1'));
    </script>
</div>
</body>
</html>
