app.directive('header', function () {
      return {
                restrict: 'E',
        scope: false,
        templateUrl: 'app/views/header_view.php',
        controller: 'CartCtrl as cart'
      }
})
