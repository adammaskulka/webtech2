var app = angular.module("myApp", []);

app.controller("myCtrl", function ($scope, $http) {
    $scope.staff = [];

    $scope.getStaff = function () {
        $http.get('json/staff.json').then(function(data) {
            // console.log('data from staff json');
            // console.log(data);
            $scope.staff = angular.copy(data.data);
            $scope.showStaff = true;
        });
    };

    $scope.propertyName = 'name';

    $scope.sortBy = function(propertyName) {
        $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
        $scope.propertyName = propertyName;
    };

    $scope.sortPubBy = function(propertyName) {
        $scope.pubReverse = ($scope.pubPropertyName === propertyName) ? !$scope.pubReverse : false;
        $scope.pubPropertyName = propertyName;
    };

    $scope.person = {};
    $scope.person.photo = 'noface.jpg';

    $scope.changeShowStaff = function () {
        $scope.showStaff = !$scope.showStaff;
    };

    $scope.showPub = false;

    $scope.openModalForStaff = function (person) {
        // console.log('staf:');
        // console.log(person);

        $scope.person = angular.copy(person);
        if($scope.person.photo === ""){
            $scope.person.photo = "noface.jpg";
        }
        $scope.showPub = false;
        if($scope.person.ldapLogin !== ""){
            $scope.getPublication();
        }
        $scope.showStaff = false;
    };

    $scope.publication = [];

    $scope.getPublication = function () {
        // console.log('getting publication');
        // console.log($scope.person.ldapLogin);
        $scope.publication = [];
        for(var year = 2017; year >= 2013; year--){
            $http({
                method: 'POST',
                url: 'src/getPublication.php',
                data: {aisLogin: $scope.person.ldapLogin, year: year}
            }).then(function (response) {
                // console.log(response.data);

                if(angular.isDefined(response.data)){
                    $scope.workPub = angular.copy(response.data.children[1].children[1].children[0].children[0].children[12].children[1].children);
                    angular.forEach($scope.workPub, function (pub) {
                        var workPub = {
                            name: pub.children[1].children[0].children[0].html,
                            type: pub.children[2].children[0].html,
                            year: parseInt(pub.children[3].children[0].html),
                            href: 'http://is.stuba.sk/lide/' + pub.children[4].children[0].children[0].href
                        };
                        $scope.publication.push(workPub);
                    });
                    $scope.showPub = true;
                }
            }, function (err) {
                console.log('There was error: ' + err);
            })
        }
    }
});