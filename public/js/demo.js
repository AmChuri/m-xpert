'use strict';

var app = angular.module('demo', ['ngSanitize', 'ui.select']);
 app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('{[{');
    $interpolateProvider.endSymbol('}]}');
});

/**
 * AngularJS default filter with the following expression:
 * "person in people | filter: {name: $select.search, age: $select.search}"
 * performs an AND between 'name: $select.search' and 'age: $select.search'.
 * We want to perform an OR.
 */
app.filter('propsFilter', function() {
  return function(items, props) {
    var out = [];

    if (angular.isArray(items)) {
      var keys = Object.keys(props);

      items.forEach(function(item) {
        var itemMatches = false;

        for (var i = 0; i < keys.length; i++) {
          var prop = keys[i];
          var text = props[prop].toLowerCase();
          if (item[prop].toString().toLowerCase().indexOf(text) !== -1) {
            itemMatches = true;
            break;
          }
        }

        if (itemMatches) {
          out.push(item);
        }
      });
    } else {
      // Let the output be the input untouched
      out = items;
    }

    return out;
  };
});

app.controller('DemoCtrl', function ($scope, $http, $timeout, $interval) {
  var vm = this;

  vm.disabled = undefined;
  vm.searchEnabled = undefined;

  vm.setInputFocus = function (){
    $scope.$broadcast('UiSelectDemo1');
  };

  vm.enable = function() {
    vm.disabled = false;
  };

  vm.disable = function() {
    vm.disabled = true;
  };

  vm.enableSearch = function() {
    vm.searchEnabled = true;
  };

  vm.disableSearch = function() {
    vm.searchEnabled = false;
  };

  vm.clear = function() {
    vm.person.selected = undefined;
    vm.address.selected = undefined;
    vm.country.selected = undefined;
  };

  vm.someGroupFn = function (item){

    if (item.name[0] >= 'A' && item.name[0] <= 'M')
        return 'From A - M';

    if (item.name[0] >= 'N' && item.name[0] <= 'Z')
        return 'From N - Z';

  };

  vm.firstLetterGroupFn = function (item){
      return item.name[0];
  };

  vm.reverseOrderFilterFn = function(groups) {
    return groups.reverse();
  };

  vm.personAsync = {selected : "wladimir@email.com"};
  vm.peopleAsync = [];

  $timeout(function(){
   vm.peopleAsync = [
        { name: 'Python'},
        { name: 'Php'}
      ];
  },3000);

  vm.counter = 0;
  vm.onSelectCallback = function (item, model){
    vm.counter++;
    vm.eventResult = {item: item, model: model};
  };

  vm.removed = function (item, model) {
    vm.lastRemoved = {
        item: item,
        model: model
    };
  };

  vm.tagTransform = function (newTag) {
    var item = {
        name: newTag
    };

    return item;
  };

  vm.peopleObj = {
    '1' : { name: 'Python',      email: 'adam@email.com',      age: 12, country: 'United States' },
    '2' : { name: 'Amalie',    email: 'amalie@email.com',    age: 12, country: 'Argentina' },
    '3' : { name: 'Estefanía', email: 'estefania@email.com', age: 21, country: 'Argentina' },
    '4' : { name: 'Adrian',    email: 'adrian@email.com',    age: 21, country: 'Ecuador' },
    '5' : { name: 'Wladimir',  email: 'wladimir@email.com',  age: 30, country: 'Ecuador' },
    '6' : { name: 'Samantha',  email: 'samantha@email.com',  age: 30, country: 'United States' },
    '7' : { name: 'Nicole',    email: 'nicole@email.com',    age: 43, country: 'Colombia' },
    '8' : { name: 'Natasha',   email: 'natasha@email.com',   age: 54, country: 'Ecuador' },
    '9' : { name: 'Michael',   email: 'michael@email.com',   age: 15, country: 'Colombia' },
    '10' : { name: 'Nicolás',   email: 'nicolas@email.com',    age: 43, country: 'Colombia' }
  };

  vm.person = {};

  vm.person.selectedValue = vm.peopleObj[3];
  vm.person.selectedSingle = 'Samantha';
  vm.person.selectedSingleKey = '5';
  // To run the demos with a preselected person object, uncomment the line below.
  //vm.person.selected = vm.person.selectedValue;

  vm.people = [
    {
        "name": "HTMl",
            "id": "html"
    }, {
        "name": "CSS",
            "id": "css"
    }, {
        "name": "Python",
            "id": "python"
    }, {
        "name": "PHP",
            "id": "php"
    }, {
        "name": "Perl",
            "id": "perl"
    }, {
        "name": "C",
            "id": "c"
    }, {
        "name": "C++",
            "id": "cplusplus"
    }, {
        "name": "Database",
            "id": "database"
    }, {
        "name": "Mysql",
            "id": "mysql"
    }, {
        "name": "Software Engineering",
            "id": "software-engineering"
    }, {
        "name": "Linux",
            "id": "linux"
    }, {
        "name": "Javascript",
            "id": "javascript"
    }, {
        "name": "Laravel",
            "id": "laravel"
    }, {
        "name": "AngularJS",
            "id": "angularjs"
    }, {
        "name": "NodeJS",
            "id": "nodejs"
    }, {
        "name": "CGI",
            "id": "cgi"
    }, {
        "name": "Cobol",
            "id": "cobol"
    }, {
        "name": "MEAN Stack",
            "id": "meanstack"
    }, {
        "name": "LAMP Stack",
            "id": "lampstack"
    }, {
        "name": "Django",
            "id": "django"
    }, {
        "name": "Scrapy",
            "id": "scrapy"
    }, {
        "name": "Distributed System",
            "id": "distributed-systems"
    }, {
        "name": "MongoDB",
            "id": "mongodb"
    }, {
        "name": "PgSql",
            "id": "pgsql"
    }, {
        "name": "Flask Micro web framework",
            "id": "flask"
    }, {
        "name": "Testing",
            "id": "testing"
    }, {
        "name": "Selenium",
            "id": "selenium"
    }, {
        "name": "Windows Application Developer",
            "id": "windowsappdeveloper"
    }, {
        "name": "Application Developer",
            "id": "appdeveloper"
    }, {
        "name": "Website Development",
            "id": "website"
    }, {
        "name": "Yii",
            "id": "yii"
    }, {
        "name": "Code Ignitor Framework",
            "id": "codeignitor"
    }, {
        "name": "Software Testing",
            "id": "softwaretesting"
    }, {
        "name": "QA Engineer",
            "id": "qa-engineer"
    }, {
        "name": "Business Analyst",
            "id": "business-analyast"
    }, {
        "name": "Data Analyst",
            "id": "data-analyst"
    }, {
        "name": "Analyst",
            "id": "analyst"
    }, {
        "name": "Software Architech",
            "id": "software-architech"
    }, {
        "name": "Mobile Application Developer",
            "id": "mobile-app-developer"
    }, {
        "name": "Developer",
            "id": "developer"
    }, {
        "name": "System Administrator",
            "id": "system-admin"
    }, {
        "name": "Network Engineer",
            "id": "network-engineer"
    }, {
        "name": "FullStack Developer",
            "id": "fullstack"
    }, {
        "name": "System Engineer",
            "id": "system-engineer"
    }, {
        "name": "Social Media",
            "id": "social-media"
    }, {
        "name": "Backend Developer",
            "id": "backend-developer"
    }, {
        "name": "Designer",
            "id": "designer"
    }, {
        "name": "Business Development",
            "id": "business-development"
    }, {
        "name": "Data Engineer",
            "id": "data-engineer"
    }, {
        "name": "Data Scientist",
            "id": "data-scientist"
    }, {
        "name": "Database Administrator",
            "id": "database-admin"
    }, {
        "name": "Frontend Developer",
            "id": "frontend-developer"
    }, {
        "name": "Fashion Designer",
            "id": "fashion-designer"
    }, {
        "name": "Andrioid Developer",
            "id": "android-developer"
    }, {
        "name": "Growth Hacking",
            "id": "growth-hacking"
    }, {
        "name": "Visual Designer",
            "id": "visual-designer"
    }, {
        "name": "Content Writer",
            "id": "content-writer"
    }, {
        "name": "Marketing",
            "id": "marketing"
    }, {
        "name": "Wordpress",
            "id": "wordpress"
    },{
        "name": "Adobe Photoshop",
            "id": "adobe-photoshop"
} ];

  vm.availableColors = ['Red','Green','Blue','Yellow','Magenta','Maroon','Umbra','Turquoise'];

  vm.singleDemo = {};
  vm.singleDemo.color = '';
  vm.multipleDemo = {};
  vm.multipleDemo.colors = ['Blue','Red'];
  vm.multipleDemo.colors2 = ['Blue','Red'];
  //vm.multipleDemo.selectedPeople = [vm.people[5], vm.people[4]];
  vm.multipleDemo.selectedPeople2 = vm.multipleDemo.selectedPeople;
  vm.multipleDemo.selectedPeopleWithGroupBy = [vm.people[8], vm.people[6]];
  vm.multipleDemo.selectedPeopleSimple = ['samantha@email.com','wladimir@email.com'];
  vm.multipleDemo.removeSelectIsFalse = [vm.people[2], vm.people[0]];

  vm.appendToBodyDemo = {
    remainingToggleTime: 0,
    present: true,
    startToggleTimer: function() {
      var scope = vm.appendToBodyDemo;
      var promise = $interval(function() {
        if (scope.remainingTime < 1000) {
          $interval.cancel(promise);
          scope.present = !scope.present;
          scope.remainingTime = 0;
        } else {
          scope.remainingTime -= 1000;
        }
      }, 1000);
      scope.remainingTime = 3000;
    }
  };

  vm.address = {};
  vm.refreshAddresses = function(address) {
    var params = {address: address, sensor: false};
    return $http.get(
      'http://maps.googleapis.com/maps/api/geocode/json',
      {params: params}
    ).then(function(response) {
      vm.addresses = response.data.results;
    });
  };

  vm.addPerson = function(item, model){
    if(item.hasOwnProperty('isTag')) {
      delete item.isTag;
      vm.people.push(item);
    }
  }

  vm.country = {};
 
});


$( document ).ready(function() {
	Notify("Can't Touch This");
	Notify("Stop! Hammer time", null, null, 'danger');

	Notify("I told you homeboy (You can't touch this)",
	function () { 
		alert("clicked notification")
	},
	function () { 
		alert("clicked x")
	},
	'success'
);

});
$(window).unload( function() {
  alert('hello');
});

