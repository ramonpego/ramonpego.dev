/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/adminMat/adminMat.js":
/*!*******************************************!*\
  !*** ./resources/js/adminMat/adminMat.js ***!
  \*******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _sidebar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./sidebar */ "./resources/js/adminMat/sidebar.js");
/* harmony import */ var _sidebar__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_sidebar__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _aside__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./aside */ "./resources/js/adminMat/aside.js");
/* harmony import */ var _aside__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_aside__WEBPACK_IMPORTED_MODULE_1__);

 // | LOADER |

$(document).ready(function () {
  $('.loader_content').remove();
}); // | BACK TO TOP |

$('#topo').on('click', function (e) {
  e.preventDefault();
  $(window).scrollTop(0);
}); // | TOOLTIP |

$(function () {
  $('[data-toggle="tooltip"]').tooltip();
}); // | POPOVER |

$(function () {
  $('[data-toggle="popover"]').popover();
});

/***/ }),

/***/ "./resources/js/adminMat/aside.js":
/*!****************************************!*\
  !*** ./resources/js/adminMat/aside.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// | ASIDE ACTION |
$('.toggle-asideUser').on('click', function (e) {
  e.preventDefault();
  $('.aside_back').toggleClass('none');
  $('.aside').toggleClass('aside_large');
}); // | ASIDE ACTION |

$('.toggle-asideNavbar').on('click', function (e) {
  e.preventDefault();
  $('#asideNavbar').toggleClass('none');
});

/***/ }),

/***/ "./resources/js/adminMat/sidebar.js":
/*!******************************************!*\
  !*** ./resources/js/adminMat/sidebar.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// | SIDEBAR ACTION |
$('.navbar #sidebar_action').on('click', function (e) {
  e.preventDefault();
  $('.navbar-brand').toggleClass('small');
  $('.sidebar').toggleClass('aside_small');
  $('.main').toggleClass('large');
}); // | ATIVA O SIDEBAR MOBILE |

$('#sidebar_action_mobile').on('click', function (e) {
  e.preventDefault();
  $('.sidebar').addClass('sidebar_app');
  $('.sidebar').css({
    "display": "block"
  });
}); // | REMOVE O SIDEBAR MOBILE |

$('#sidebar_action_mobile_close').on('click', function (e) {
  e.preventDefault();
  $('.sidebar.sidebar_app').css({
    "display": "none"
  });
  $('.sidebar').removeClass('sidebar_app');
}); // | RESPONSIVIDADE AUTOMATICA SIDEBAR |

function myFunction(x) {
  if (x.matches) {
    $('.sidebar').removeClass('sidebar_app');
    $('.sidebar').css({
      "display": "block"
    });
    $('.main').css({
      "width": "calc(100% - 280px)"
    });
  } else {
    $('.sidebar').css({
      "display": "none"
    });
    $('.main').css({
      "width": "100%"
    });
  }
}

var x = window.matchMedia("(min-width: 800px)");
myFunction(x); // Call listener function at run time

x.addListener(myFunction); // Attach listener function on state changes

/***/ }),

/***/ 1:
/*!*************************************************!*\
  !*** multi ./resources/js/adminMat/adminMat.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/ramon/Mat/projects/partners/ramonpego.dev/resources/js/adminMat/adminMat.js */"./resources/js/adminMat/adminMat.js");


/***/ })

/******/ });