var app = angular.module('wsscat', ['ngRoute']);
app.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/index', {
		templateUrl: 'template/index.html',
		controller: 'indexCtrl'
	}).when('/home', {
		templateUrl: 'template/home.html',
		controller: 'homeCtrl'
	}).otherwise({
		redirectTo: '/index'
	})
}])
app.run([function($rootScope) {
	/*http.get('isLogin.php',{
		params:{
		cookie:'123'
	}}).success(function(data){
		if(data.isLogin){
			
		}else{
			window.location.href = '#/login'
		}
	})*/
	//自执行函数
	(function(doc, win) {
		var docEl = doc.documentElement,
			recalc = function() {
				var clientWidth = docEl.clientWidth;
				if(!clientWidth) return;
				if(clientWidth >= 740) {
					clientWidth = 740;
				}
				if(clientWidth <= 320) {
					clientWidth = 320;
				}
				docEl.style.fontSize = 100 * (clientWidth / 320) + 'px';
			};
		if(!doc.addEventListener) return;
		win.addEventListener('resize', recalc, false);
		doc.addEventListener('DOMContentLoaded', recalc, false);
	})(document, window);
	console.log("进入路由前先执行");
}])
app.controller('indexCtrl', function($scope, swipe, $http) {
	swipe.me()
	$http.jsonp('http://localhost:8888/', {
		params: {
			name: 'abc',
			callback: "JSON_CALLBACK"
		}
	}).success(function(data) {
		console.log(data)
		$scope.hotels = data.hotel
	})
})
app.controller('homeCtrl', function($scope, swipe, $http) {
	swipe.me()
	$scope.name = "wsscat";
	$http.jsonp('http://localhost:8888/', {
		params: {
			name: 'abc',
			callback: "JSON_CALLBACK"
		}
	}).success(function(data) {
		console.log(data)
	})
})
app.directive('xcheader', function() {
	return {
		templateUrl: 'directive/xcheader.html',
	}
})
app.service('swipe', function() {
	return {
		me: function() {
			var myswiper = new Swiper('.swiper-container', {
				// direction: 'vertical',  // 一个垂直方向的
				loop: true, // 一个循环的滑动
				pagination: '.swiper-pagination', // 分页器
				prevButton: '.swiper-button-prev',
				autoplay: '1000',

			});
		}
	}
})
app.filter('wsscat', function() {
	return function(input) {
		return input + "你经过处理"
	}
})