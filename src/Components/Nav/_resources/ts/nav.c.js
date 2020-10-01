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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/Components/Nav/_resources/ts/nav.c.ts");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/Components/AbstractComponent.ts":
/*!*********************************************!*\
  !*** ./src/Components/AbstractComponent.ts ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
exports.ComponentLoader = exports.AbstractComponent = void 0;
var AbstractComponent_1 = __webpack_require__(/*! ../../vendor/aktorou/frontend-test-framework/src/Components/AbstractComponent */ "./vendor/aktorou/frontend-test-framework/src/Components/AbstractComponent.ts");
var AbstractComponent = /** @class */ (function (_super) {
    __extends(AbstractComponent, _super);
    function AbstractComponent(componentElement, DI) {
        return _super.call(this, componentElement, DI) || this;
    }
    return AbstractComponent;
}(AbstractComponent_1.AbstractComponent));
exports.AbstractComponent = AbstractComponent;
var ComponentLoader = /** @class */ (function (_super) {
    __extends(ComponentLoader, _super);
    function ComponentLoader(component) {
        return _super.call(this, component) || this;
    }
    return ComponentLoader;
}(AbstractComponent_1.ComponentLoader));
exports.ComponentLoader = ComponentLoader;


/***/ }),

/***/ "./src/Components/Nav/_resources/ts/nav.c.ts":
/*!***************************************************!*\
  !*** ./src/Components/Nav/_resources/ts/nav.c.ts ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
Object.defineProperty(exports, "__esModule", { value: true });
var AbstractComponent_1 = __webpack_require__(/*! ../../../AbstractComponent */ "./src/Components/AbstractComponent.ts");
var Nav = /** @class */ (function (_super) {
    __extends(Nav, _super);
    function Nav() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    Nav.prototype.init = function () {
        _super.prototype.init.call(this);
        this.getComponentElement().find('[trigger]').on('click', function () {
            this.getComponentElement().toggleClass('nav--open');
        }.bind(this));
    };
    Nav.selector = 'nav';
    return Nav;
}(AbstractComponent_1.AbstractComponent));
new AbstractComponent_1.ComponentLoader(Nav);


/***/ }),

/***/ "./vendor/aktorou/frontend-test-framework/src/Components/AbstractComponent.ts":
/*!************************************************************************************!*\
  !*** ./vendor/aktorou/frontend-test-framework/src/Components/AbstractComponent.ts ***!
  \************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.ComponentLoader = exports.AbstractComponent = void 0;
var AbstractComponent = /** @class */ (function () {
    function AbstractComponent(componentElement, DI) {
        this.DI = null;
        this.componentElement = componentElement;
        this.DI = DI;
        return this;
    }
    AbstractComponent.prototype.init = function () {
    };
    AbstractComponent.prototype.getComponentClassName = function () {
        return this.constructor['name'];
    };
    AbstractComponent.prototype.getComponentParameter = function () {
        this.componentParam = this
            .componentElement
            .attr(this.constructor['selector']);
        return this.componentParam;
    };
    AbstractComponent.prototype.getComponentElement = function () {
        return $("[component-id=\"" + this.getId() + "\"]");
    };
    AbstractComponent.prototype.getId = function () {
        return this.componentElement.attr('component-id');
    };
    AbstractComponent.selector = null;
    return AbstractComponent;
}());
exports.AbstractComponent = AbstractComponent;
var ComponentLoader = /** @class */ (function () {
    function ComponentLoader(component) {
        var elements = $("[" + component.selector + "]");
        for (var key = 0; key < elements.length; key++) {
            if (elements.hasOwnProperty(key)) {
                var element = $(elements[key]);
                var id = component.selector + '_' + key;
                element.attr('component-id', id);
                (new component(element, {})).init();
            }
        }
    }
    ;
    return ComponentLoader;
}());
exports.ComponentLoader = ComponentLoader;


/***/ })

/******/ });