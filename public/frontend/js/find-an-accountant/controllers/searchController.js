/**
 * Created by mattp on 29/10/2015.
 */
(function () {

    var injectParams = ['$scope', '$filter','memberSearchService'];

    var SearchController = function($scope, $filter, memberSearchService) {

        $scope.sort = {
            sortingOrder: 'id',
            reverse: false
        };

        $scope.gap = 5;
        $scope.name = "";
        $scope.filteredItems = [];
        $scope.groupedItems = [];
        $scope.itemsPerPage = 20;
        $scope.pagedItems = [];
        $scope.currentPage = 0;
        $scope.totalPages = 0;
        $scope.totalItems = 0;

        $scope.items = [];
        $scope.counties = [];
        $scope.countries = [];

        $scope.selectedCountry = {};
        $scope.selectedCounty = {};

        $scope.heading = "Search results";

        $scope.refreshing = false;

        function init() {
            getMembers();
            getCountries();
            getCounties();

        }


        $scope.clear = function() {
            init();
            $scope.name = "";
        }
   
    $scope.startPagination =0;
 
    $scope.endPagination =  $scope.startPagination + $scope.gap-1;
        
    $scope.$watch('currentPage', function (newValue, oldValue) {
        if (newValue <= 2) {
            $scope.startPagination = 0;
        } else {
            $scope.startPagination = $scope.currentPage-2;
        }
    });
    $scope.$watch('startPagination', function (newValue, oldValue) {
        $scope.endPagination = $scope.startPagination + $scope.gap;
    });

    function getCountries() {
            memberSearchService.getCountries()
                .then(function (data) {
                    $scope.countries =  data;
                    $scope.countries.unshift({ id: "", name: "Any" });
                    $scope.selectedCountry = $scope.countries[0];
                }, function (error) {
                    $window.alert(error.message);
                });
        }

        function getCounties() {
            memberSearchService.getCounties()
                .then(function (data) {
                    $scope.counties =  data;

                    $scope.counties.unshift("Any");
                    $scope.selectedCounty = $scope.counties[0];
                }, function (error) {
                    $window.alert(error.message);
                });
        }

        function getMembers() {
            $scope.refreshing = true;
            var filter=$scope.name;
            var countryId="";
            var county="";

            if (!isEmpty($scope.selectedCountry))
            {
                countryId = $scope.selectedCountry.id;
            }

            if (!isEmpty($scope.selectedCounty))
            {
                county = $scope.selectedCounty;
            }

            memberSearchService.getMembers($scope.itemsPerPage, $scope.currentPage, filter, countryId, county)
                .then(function (data) {
                    if (data.totalPages>0) {
                        $scope.items = data.items;
                        $scope.totalPages = data.totalPages;
                        $scope.totalItems = data.totalItems;
                        $scope.refreshing = false;
                    }

                }, function (error) {
                    $window.alert(error.message);
                });
        }


        // calculate page in place
        $scope.groupToPages = function () {
            $scope.pagedItems = [];

            for (var i = 0; i < $scope.filteredItems.length; i++) {
                if (i % $scope.itemsPerPage === 0) {
                    $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)] = [$scope.filteredItems[i]];
                } else {
                    $scope.pagedItems[Math.floor(i / $scope.itemsPerPage)].push($scope.filteredItems[i]);
                }
            }
        };

        $scope.range = function (size, start, end) {
            var ret = [];

            if (size < end) {
                end = size;
                start = size - $scope.gap;
            }
            for (var i = start; i < end; i++) {

               if (i>-1)
               {
                ret.push(i);
               }
            }

            return ret;
        };

        $scope.prevPage = function () {
            if ($scope.currentPage > 0) {
                $scope.currentPage--;
                $scope.items = [];
                getMembers();
            }
        };

        $scope.nextPage = function () {
            if ($scope.currentPage < $scope.totalPages - 1) {
                $scope.currentPage++;

                $scope.items = [];
                getMembers();
            }
        };

        $scope.setPage = function () {
            $scope.currentPage = this.n;
            $scope.items = [];
            getMembers();
        };

        $scope.refresh = function()
        {
            var filter=$scope.name;

            $scope.heading = 'Search results';
            

            if (filter!="") {
                $scope.heading = 'Search results for '+ filter;
            }

            if ($scope.selectedCountry.id !=="")
            {
                $scope.heading = "Search results in "+ $scope.selectedCountry.name;
            }

            if ($scope.selectedCountry.id !== "" && filter !== "")
            {
                $scope.heading = "Search results  for "+ filter+" in "+ $scope.selectedCountry.name;
            }

            if ($scope.selectedCountry.id !== "" && $scope.selectedCounty !== "")
            {
                $scope.heading = "Search results in "+ $scope.selectedCountry.name + ' & ' + $scope.selectedCounty;
            }


            if ($scope.selectedCountry.id !== "" && $scope.selectedCounty.id !== "" && filter !== "")
            {
                $scope.heading = "Search results  for "+ filter+" in "+ $scope.selectedCountry.name + ' & ' + $scope.selectedCounty;
            }

            $scope.items = [];
            $scope.currentPage=0;
            getMembers();
        };


        function isEmpty(obj) {
            for(var prop in obj) {
                if(obj.hasOwnProperty(prop))
                    return false;
            }

            return true;
        }

        // functions have been describe process the data for display
        init();

    };

    SearchController.$inject = injectParams;

    angular.module('FindAnAccountant').controller('searchController', SearchController);

}());

