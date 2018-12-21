/**
 * Created by mattp on 29/10/2015.
 */
(function () {

    var injectParams = ['$http', '$rootScope'];

    var memberSearchFactory = function ($http, $rootScope) {
        var serviceBase = '../Umbraco/Api/externalmembersearch/index.html',
            factory = {};

        factory.getMembers = function (pageSize,pageNumber, filter, country,county) {

            return $http.get(serviceBase +'search?pageSize='+pageSize+'&pageNumber='+(pageNumber +1)+'&filter='+ filter +'&country='+country+'&county='+county).then(
                function (results) {
                   return results.data;

                });
        };

        factory.getCountries = function () {

            return $http.get(serviceBase +'countries').then(
                function (results) {
                    return results.data;

                });
        };

        factory.getCounties = function () {

            return $http.get(serviceBase +'counties').then(
                function (results) {
                    return results.data;
                });
        };


        return factory;
    };

    memberSearchFactory.$inject = injectParams;

    angular.module('FindAnAccountant').factory('memberSearchService', memberSearchFactory);

}());


