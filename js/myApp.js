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

    $scope.sortBachelorBy = function(propertyName) {
        $scope.bachelorReverse = ($scope.bachelorPropertyName === propertyName) ? !$scope.bachelorReverse : false;
        $scope.bachelorPropertyName = propertyName;
    };

    $scope.sortDiplomaBy = function(propertyName) {
        $scope.diplomaReverse = ($scope.diplomaPropertyName === propertyName) ? !$scope.diplomaReverse : false;
        $scope.diplomaPropertyName = propertyName;
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
    };

    $scope.showBachelorThesis = false;

    $scope.getBachelorThesis = function () {
        $scope.bachelorThesis = [];
        $http({
            method: 'POST',
            url: 'src/getThesis.php'
        }).then(function (response) {
            $scope.response = angular.fromJson(response.data);
            $scope.results = $scope.response.children[1].children[1].children[0];
            $scope.typeOfThesis = angular.copy($scope.response.children[1].children[1].children[0].children[0].children[3].children[1].children[0].children[0].children[1].children[0].children[0].children);
            $scope.studyProgram = angular.copy($scope.response.children[1].children[1].children[0].children[0].children[3].children[1].children[0].children[1].children[1].children[0].children[0].children);
            $scope.supervisor = angular.copy($scope.response.children[1].children[1].children[0].children[0].children[3].children[1].children[0].children[2].children[1].children[0].children[0].children);
            $scope.work = angular.copy($scope.results.children[0].children[3].children[8].children[1].children);
            angular.forEach($scope.work, function (thesis) {
                var workThesis = {};
                if (thesis.children[8].children[0].html.substring(0, 1) !== thesis.children[8].children[0].html.substring(4, 5)) {
                    workThesis = {
                        href: 'http://is.stuba.sk' + thesis.children[7].children[0].children[0].href,
                        type: thesis.children[1].children[0].html,
                        name: thesis.children[2].children[0].html,
                        supervisor: thesis.children[3].children[0].children[0].html,
                        program: thesis.children[5].children[0].html
                    };
                    if(workThesis.type === 'BP'){
                        $scope.bachelorThesis.push(workThesis);
                    }
                }
                $scope.backupTopics = angular.copy($scope.topics);
            });
            $scope.showBachelorThesis = true;
        })
    };

    $scope.showDiplomaThesis = false;

    $scope.getDiplomaThesis = function () {
        $scope.diplomaThesis = [];
        $http({
            method: 'POST',
            url: 'src/getThesis.php'
        }).then(function (response) {
            $scope.response = angular.fromJson(response.data);
            $scope.results = $scope.response.children[1].children[1].children[0];
            $scope.typeOfThesis = angular.copy($scope.response.children[1].children[1].children[0].children[0].children[3].children[1].children[0].children[0].children[1].children[0].children[0].children);
            $scope.studyProgram = angular.copy($scope.response.children[1].children[1].children[0].children[0].children[3].children[1].children[0].children[1].children[1].children[0].children[0].children);
            $scope.supervisor = angular.copy($scope.response.children[1].children[1].children[0].children[0].children[3].children[1].children[0].children[2].children[1].children[0].children[0].children);
            $scope.work = angular.copy($scope.results.children[0].children[3].children[8].children[1].children);
            angular.forEach($scope.work, function (thesis) {
                var workThesis = {};
                if (thesis.children[8].children[0].html.substring(0, 1) !== thesis.children[8].children[0].html.substring(4, 5)) {
                    workThesis = {
                        href: 'http://is.stuba.sk' + thesis.children[7].children[0].children[0].href,
                        type: thesis.children[1].children[0].html,
                        name: thesis.children[2].children[0].html,
                        supervisor: thesis.children[3].children[0].children[0].html,
                        program: thesis.children[5].children[0].html
                    };
                    if(workThesis.type === 'DP'){
                        $scope.diplomaThesis.push(workThesis);
                    }
                }
                $scope.backupDiplomaTopics = angular.copy($scope.topics);
            });
            $scope.showDiplomaThesis = true;
        })
    };

});