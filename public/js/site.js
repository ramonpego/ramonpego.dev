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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/site/site.js":
/*!***********************************!*\
  !*** ./resources/js/site/site.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// | SCRIPT |
// | ELEMENTS |
var body = document.querySelector('.body__');
var main = document.querySelector('.main__');
var sidebar = document.querySelector('.aside__');
var sidebarAction = document.querySelector('.sidebar__action');
var sidebarActionMobile = document.querySelector('.sidebar__action__mobile');
var sidebarClose = document.querySelector('.sidebar__close');
var darkMode = document.querySelector('.dark__mode'); // | EVENTS |

window.addEventListener('load', loading__);
sidebarAction.addEventListener('click', sidebar__toglle);
sidebarActionMobile.addEventListener('click', sidebar__mobile);
sidebarClose.addEventListener('click', sidebar__close);
darkMode.addEventListener('click', dark__mode); // | FUNCITONS |

function loading__(event) {
  setTimeout(function () {
    var loader = document.querySelector('.loader__content');
    loader.parentElement.removeChild(loader);
  }, 1000);
}

function sidebar__toglle() {
  if (sidebar.classList.contains('aside__hidden')) {
    sidebar.classList.remove('aside__hidden');
    main.classList.remove('main__full');
  } else {
    sidebar.classList.add('aside__hidden');
    main.classList.add('main__full');
  }
}

function sidebar__mobile() {
  if (sidebar.classList.contains('aside__mobile')) {
    sidebar.classList.remove('aside__mobile');
  } else {
    sidebar.classList.add('aside__mobile');
  }
}

function sidebar__close() {
  sidebar.classList.remove('aside__mobile');
}

function dark__mode() {
  if (body.classList.contains('dark__mode')) {
    body.classList.remove('dark__mode');
  } else {
    body.classList.add('dark__mode');
  }
} // | BAK TO TOP |
// document.querySelector(".back__top").addEventListener("click", scrollTop);
// function scrollTop(event) {
//     event.preventDefault();
//     window.scroll({
//         top: 0,
//         behavior: "smooth",
//     });
// }

/***/ }),

/***/ "./resources/sass/adminMat/adminMat.scss":
/*!***********************************************!*\
  !*** ./resources/sass/adminMat/adminMat.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/sass/site/site.scss":
/*!***************************************!*\
  !*** ./resources/sass/site/site.scss ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*****************************************************************************************************************!*\
  !*** multi ./resources/js/site/site.js ./resources/sass/site/site.scss ./resources/sass/adminMat/adminMat.scss ***!
  \*****************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/matheus/dev/projects/partners/ramonpego.dev/resources/js/site/site.js */"./resources/js/site/site.js");
__webpack_require__(/*! /home/matheus/dev/projects/partners/ramonpego.dev/resources/sass/site/site.scss */"./resources/sass/site/site.scss");
module.exports = __webpack_require__(/*! /home/matheus/dev/projects/partners/ramonpego.dev/resources/sass/adminMat/adminMat.scss */"./resources/sass/adminMat/adminMat.scss");


/***/ })

/******/ });