var MusicService = angular.module('MusicService', [
    'ngRoute',
]);

MusicService
    .config(['$routeProvider', function ($routeProvider) {
        $routeProvider
            .when('/', {
                controller: 'DashboardController',
                templateUrl: 'partials/dashboard.html'
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
    .controller('DashboardController', ['$scope', function ($scope) {
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

        $scope.clearSongs = function() {
            $scope.songs = [];
        };
    }])
;