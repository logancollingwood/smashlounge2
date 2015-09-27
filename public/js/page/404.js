/// <reference path="../typings/jquery/jquery.d.ts"/>
$(document).ready(function(){

	var startDur = 3000,
		moveRightDur = 1000,
		delay = 2000,
		resetSpeed = 1000;

	var start = function () {

		var animateOpts = {
		    duration: startDur,
		    complete: moveRight
		};

		var transformStr = "scale(0.7, 0.7) rotate(10rad)";
		console.log("start");
		$("#shot").animate({transform: transformStr}, animateOpts);

	}

	var moveRight = function () {
		$("#samus").animate({transform: "rotate(-10deg)"}, 1);
		console.log("right");
		var animateOpts = {
		    duration: moveRightDur
		};
		var distance = $("#scene").width() - $("#shot").width() - 200;
		var horizString = "translateX(" +  distance + ")";

	    $("#shot").animate({transform: horizString}, animateOpts);
	    setTimeout(reset, 5000)
	}

	var reset = function () {
		console.log("resetting");


		var optz = {
			duration: resetSpeed
		}
		$("#samus").animate({transform: "rotate(0deg)"}, resetSpeed);
		$("#shot").animate({transform: "scale(0.1, 0.1) "}, resetSpeed);
		setTimeout(start, delay);
	}
		
		


	var optz =  {duration: 0};
	$("#shot").animate({transform: "scale(0.1, 0.1)"}, optz);

	

	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};

	if (!isMobile.any()) start();
});