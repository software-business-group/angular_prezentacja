var MusicService = angular.module('MusicService', [
    'ngRoute',
]);

MusicService
    .config(['$routeProvider', function ($routeProvider) {
        $routeProvider
            .when('/', {
                controller: 'DashboardController',
                template: 'partials/dashboard.html'
            })
            .when('/profile', {
                controller: 'ProfileController',
                templateUrl: 'partials/profile.html'
            })
            .when('/music', {
                controller: 'MusicController',
                templateUrl: 'partials/music.html'
            })
        ;
    }])
    .directive('myMenu', function () {
        return {
            restrict: 'E',
            scope: {
                items: '=items'
            },
            templateUrl: 'partials/myMenu.html'
        };
    })
    .controller('DashboardController', ['$scope', function ($scope) {
        $scope.itemsListForMenu = [
            {
                name: 'Profil',
                url: '#/profile'
            },
            {
                name: 'Muzyka',
                url: '#/music'
            },
            {
                name: 'Duza strona',
                url: '#/strona'
            }
        ];
    }])
    .controller('ProfileController', ['$scope', function ($scope) {
        $scope.firstname = "Kamil";

        $scope.resetName = function () {
            $scope.firstname = "Kamil";
        }
    }])
    .controller('MusicController', ['$scope', function ($scope) {
        $scope.songs = [
            'Ricky Martin - My L.O.V.E.',
            'Justin Bieber - Baby',
            'Sabaton - Monster Baby'
        ];

        $scope.addSong = function (title) {
            $scope.songs.push(title);
            $scope.songName = '';
        };

        $scope.clearSongs = function () {
            $scope.songs = [];
        };
    }])
;