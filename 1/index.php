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
        <div ng-controller="DemoController as demo">
            <h2>Angular Binding</h2>
            <div>
                <label>Imię:</label>
                <br/>
                <input type="text" ng-model="demo.firstname">
            </div>
            <div>
                <label>Nazwisko:</label>
                <br/>
                <input type="text" ng-model="demo.lastname">
            </div>
            <br>
            <div>
                <button ng-click="demo.randomName()">Wylosuj imię</button>
            </div>
            <h2>Wpisane wartości:</h2>
            <table>
                <tr>
                    <td style="width: 170px;">Imię</td>
                    <td>{{ demo.firstname }}</td>
                </tr>
                <tr>
                    <td>Nazwisko</td>
                    <td>{{ demo.lastname }}</td>
                </tr>
                <tr>
                    <td>Pełna nazwa</td>
                    <td>{{ demo.firstname }} {{ demo.lastname }}</td>
                </tr>
            </table>
        </div>
    </div>
    <div style="width:50%; float: left;" ng-non-bindable>
        <pre>
            <code class="html" id="code1">
<?php echo htmlspecialchars(file_get_contents('snips/1.html')); ?>
            </code>
        </pre>
        <pre>
            <code class="JavaScript" id="code2">
<?php echo file_get_contents('snips/2.js'); ?>
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
