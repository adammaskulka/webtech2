var app = angular.module("myApp", []);

app.controller("myCtrl", function ($scope, $http) {
    $scope.nameOfDays = ['Ned', 'Pon', 'Uto', 'Str', 'Štv', 'Pia', 'Sob'];

    $scope.staff = [];

    $scope.getStaff = function () {
        $http.get('json/staff.json').then(function (data) {
            // console.log('data from staff json');
            // console.log(data);
            $scope.staff = angular.copy(data.data);
            $scope.showStaff = true;
        });
    };

    $scope.propertyName = 'name';

    $scope.sortBy = function (propertyName) {
        $scope.reverse = ($scope.propertyName === propertyName) ? !$scope.reverse : false;
        $scope.propertyName = propertyName;
    };

    $scope.sortPubBy = function (propertyName) {
        $scope.pubReverse = ($scope.pubPropertyName === propertyName) ? !$scope.pubReverse : false;
        $scope.pubPropertyName = propertyName;
    };

    $scope.sortBachelorBy = function (propertyName) {
        $scope.bachelorReverse = ($scope.bachelorPropertyName === propertyName) ? !$scope.bachelorReverse : false;
        $scope.bachelorPropertyName = propertyName;
    };

    $scope.sortDiplomaBy = function (propertyName) {
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
        if ($scope.person.photo === "") {
            $scope.person.photo = "noface.jpg";
        }
        $scope.showPub = false;
        if ($scope.person.ldapLogin !== "") {
            $scope.getPublication();
        }
        $scope.showStaff = false;
    };

    $scope.publication = [];

    $scope.getPublication = function () {
        // console.log('getting publication');
        // console.log($scope.person.ldapLogin);
        $scope.publication = [];
        for (var year = 2017; year >= 2013; year--) {
            $http({
                method: 'POST',
                url: 'src/getPublication.php',
                data: {aisLogin: $scope.person.ldapLogin, year: year}
            }).then(function (response) {
                // console.log(response.data);

                if (angular.isDefined(response.data)) {
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
                    if (workThesis.type === 'BP') {
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
                    if (workThesis.type === 'DP') {
                        $scope.diplomaThesis.push(workThesis);
                    }
                }
                $scope.backupDiplomaTopics = angular.copy($scope.topics);
            });
            $scope.showDiplomaThesis = true;
        })
    };

    $scope.getCurrentMonth = function () {
        $scope.getStaff();
        $scope.attendanceYear = 2017;
        $scope.attendanceMonth = '05';
        $scope.dates = [];
        $scope.weekDays($scope.daysOfMonth());
        $scope.printTable($scope.attendanceMonth, $scope.attendanceYear);

    };

    $scope.daysOfMonth = function () {
        return new Date($scope.attendanceYear, $scope.attendanceMonth, 0).getDate();
    };

    $scope.weekDays = function (days) {
        $scope.dates = [];
        for (var i = 0; i < days; i++) {
            $scope.dates[i] = {
                numb: i,
                name: $scope.nameOfDays[new Date($scope.attendanceYear, $scope.attendanceMonth - 1, i + 1).getDay()]
            };
        }
    };

    $scope.exportAction = function () {
        // console.log('gonna export table to pdf');
        // html2canvas(document.getElementById('printTable'), {
        //     onrendered: function (canvas) {
        //         var data = canvas.toDataURL();
        //         var docDefinition = {
        //             content: [{
        //                 image: data,
        //                 width: 500,
        //             }]
        //         };
        //         pdfMake.createPdf(docDefinition).download("dochadzka.pdf");
        //     }
        // });
    };

    $scope.type = '';

    $scope.printTable = function (month, year) {
        $scope.persons = [];
        $scope.attendanceYear = year;
        $scope.attendanceMonth = month;
        $http({
            method: 'POST',
            url: 'src/attendance.php',
            data: {month: month, year: year, todo: 1}
        }).then(function (response) {
            console.log(response);
            var calendarJson = angular.copy(angular.fromJson(response.data));
            var index = 0;
            var days = $scope.daysOfMonth();
            var dates = [];
            $scope.weekDays(days);
            $scope.staff.forEach(function (staff) {
                staff.days = [];
                staff.days = Array(days).join('.').split('.');
            });
            calendarJson.forEach(function (atDay) {
                $scope.staff[atDay.userId].days[parseInt(atDay.date.substr(8)) - 1] = atDay.typeOfDay;
            })

        }, function (response) {
            console.log(response.data, response.status);
        })

    };
    $scope.editing = false;
    $scope.allowEditing = function(id){
        // console.log('row ' + id);
        $scope.editingRow = id;

        if(!$scope.editing){
            // console.log('allowing edit for row ' + id);
            $scope.editing = true;
        } else if (id === $scope.editingRow && $scope.editing){
            // console.log('finished editing row '+ id);
            $scope.editing = false;
        }
        // console.log($scope.editing);

    };


    $scope.editCell = function (id, day) {
        if($scope.editing && id === $scope.editingRow){
            // console.log('editCell: ' + id + ' ' + day);

            // console.log('in editing mode');
            var d = day + 1;
            d = d < 10 ? '0' + d : d;
            // console.log('editCell');
            // console.log(id, day + 1, $scope.type);
            if ($scope.type !== undefined) {
                var dateToInsert = $scope.attendanceYear + '-' + $scope.attendanceMonth + '-' + d;
                // console.log(dateToInsert);
                if ($scope.staff[id].days[day] === "") {
                    $scope.staff[id].days[day] = $scope.type;
                    $http({
                        method: 'POST',
                        url: 'src/attendance.php',
                        data: {state: $scope.type, date: dateToInsert, id: id, todo: 0}
                    }).then(function (response) {
                        // console.log(response);
                    })
                } else if ($scope.type === "") {
                    $scope.staff[id].days[day] = $scope.type;
                    $http({
                        method: 'POST',
                        url: 'src/attendance.php',
                        data: {state: $scope.type, date: dateToInsert, id: id, todo: 2}
                    }).then(function (response) {
                        // console.log(response);
                    })
                } else {
                    $scope.staff[id].days[day] = $scope.type;
                    $http({
                        method: 'POST',
                        url: 'src/attendance.php',
                        data: {state: $scope.type, date: dateToInsert, id: id, todo: 3}
                    }).then(function (response) {
                        // console.log(response);
                    })
                }
            }
        } else {
            // console.log('not allowed to edit row ' + id);
        }
    }
});