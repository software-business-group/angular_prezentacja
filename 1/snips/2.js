angular.module('demoApp', [])
    .controller('DemoController', function () {
        var demo = this;

        demo.randomName = function () {
            var names = ['Kacper', 'Marcin', 'Tomek', 'Michał', 'Jurek'];

            var randomIndex = Math.round(Math.random() * (names.length-1));

            demo.firstname = names[randomIndex];

        };
    });