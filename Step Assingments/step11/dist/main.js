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
/******/ 	__webpack_require__.p = "dist";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/css-loader/dist/cjs.js!./node_modules/resolve-url-loader/index.js!./node_modules/sass-loader/lib/loader.js?sourceMap!./src/_noir.scss":
/*!***************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js!./node_modules/resolve-url-loader!./node_modules/sass-loader/lib/loader.js?sourceMap!./src/_noir.scss ***!
  \***************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js")(false);
// Imports
var urlEscape = __webpack_require__(/*! ../node_modules/css-loader/dist/runtime/url-escape.js */ "./node_modules/css-loader/dist/runtime/url-escape.js");
var ___CSS_LOADER_URL___0___ = urlEscape(__webpack_require__(/*! ./img/office.jpg */ "./src/img/office.jpg"));
var ___CSS_LOADER_URL___1___ = urlEscape(__webpack_require__(/*! ./img/paper.png */ "./src/img/paper.png"));

// Module
exports.push([module.i, "body {\n  background-image: url(" + ___CSS_LOADER_URL___0___ + ");\n  background-repeat: no-repeat;\n  background-color: #222;\n  background-size: 100% auto; }\n\ndiv.message p {\n  text-align: center;\n  color: #ccc;\n  font-style: italic; }\n\nform.movie {\n  width: 20em;\n  margin: 0 auto; }\n  form.movie fieldset {\n    padding: 1em 0; }\n  form.movie p {\n    margin: 1em 2em;\n    color: white; }\n  form.movie label {\n    color: white;\n    width: 8em;\n    text-align: right; }\n  form.movie #year {\n    width: 5em; }\n  form.movie p.rating {\n    margin: 2em 0;\n    text-align: center; }\n\nh1 {\n  text-align: center;\n  color: #ccc;\n  font-family: Arial;\n  font-size: 3em;\n  font-style: italic;\n  margin: 0.5em auto; }\n\np.buttons {\n  text-align: center;\n  word-spacing: 0.5em;\n  margin: 0 auto;\n  z-index: 50; }\n  p.buttons input {\n    width: 6em; }\n\ntable {\n  margin: 1em auto;\n  -moz-box-shadow: 6pt 6px 10pt #888;\n  -webkit-box-shadow: 6pt 6px 10pt #888;\n  box-shadow: 6pt 6px 10pt #888;\n  border-left: 1px solid #e0e0e0;\n  border-collapse: collapse; }\n\ntable th {\n  color: white;\n  background-color: #888;\n  background: -webkit-gradient(linear, left top, left bottom, from(#888), to(#aaa));\n  background: -webkit-linear-gradient(top, #888, #aaa);\n  background: -moz-linear-gradient(top, #888, #aaa);\n  background: -ms-linear-gradient(top, #888, #aaa);\n  background: -o-linear-gradient(top, #888, #aaa);\n  text-shadow: rgba(0, 0, 0, 0.4) 0 1px 0;\n  border-right: 1px solid #888;\n  border-bottom: 1px solid #888;\n  border-top: 1px solid #888;\n  text-align: left;\n  font-family: Helvetica, Arial, Sans-Serif;\n  text-decoration: none;\n  padding: 0.1em 0.5em; }\n\ntable td {\n  border-right: 1px solid #888;\n  border-bottom: 1px solid #888;\n  background: #ffffff;\n  padding: 0.1em 0.5em;\n  color: #4f6b72; }\n  table td span.stars {\n    display: inline-block;\n    width: 140px; }\n  table td span.num {\n    display: inline-block;\n    width: 3em;\n    text-align: right; }\n\nth a:link {\n  color: #F5F3EB; }\n\nth a:visited {\n  color: #E3DCC5; }\n\nth a:hover {\n  color: #ffffff; }\n\ndiv.instructions {\n  width: 25em;\n  margin: 2em auto;\n  padding: 1em;\n  border: thin solid white; }\n  div.instructions p {\n    color: white; }\n\nfooter p {\n  text-align: center;\n  color: #999; }\n\nform.login {\n  width: 25em;\n  margin: 0 auto; }\n  form.login fieldset {\n    padding: 1em 0; }\n  form.login p {\n    margin: 1em 2em;\n    color: white; }\n  form.login label {\n    display: inline-block;\n    color: white;\n    width: 5em;\n    text-align: right; }\n  form.login .keep {\n    text-align: center; }\n  form.login .keep label {\n    width: auto;\n    font-style: italic;\n    font-size: 0.9em; }\n  form.login input {\n    display: inline-block; }\n  form.login #year {\n    width: 5em; }\n  form.login p.rating {\n    margin: 2em 0;\n    text-align: center; }\n\np.download {\n  text-align: center;\n  color: white; }\n  p.download a:link, p.download a:visited {\n    color: #ccc; }\n  p.download a:hover {\n    color: white; }\n\n/*\r\n * This bit of CSS makes the paper on the\r\n * page 70% of the width.\r\n */\ndiv.paper-wrapper {\n  width: 70%;\n  margin: 0 auto 0 auto;\n  background-image: url(" + ___CSS_LOADER_URL___1___ + ");\n  background-repeat: no-repeat;\n  background-size: 100% auto;\n  position: relative; }\n\n/*\r\n * This sticks some content into the div at\r\n * the end with a padding that forces the div to\r\n * be the aspect ratio we want it to be for the\r\n * paper background\r\n */\ndiv.paper-wrapper:after {\n  padding-top: 125%;\n  display: block;\n  content: ' '; }\n\n/*\r\n * This div is placed absolutely inside the other\r\n * div and represents a piece of paper and the\r\n * tabs. We need a nested div to make it the\r\n * right width and place it above the :after text\r\n * I added above.\r\n */\ndiv.paper {\n  position: absolute;\n  top: 17%;\n  bottom: 0;\n  right: 22%;\n  left: 22%;\n  padding: 0;\n  color: #333; }\n  div.paper > p {\n    text-align: center;\n    padding-top: 2em;\n    font-size: 2em; }\n  div.paper li {\n    list-style-type: none;\n    margin-left: -77%; }\n    div.paper li > a img {\n      width: 25%;\n      opacity: 0.3; }\n    div.paper li > div {\n      display: none;\n      position: absolute;\n      top: -5%;\n      left: 0;\n      padding: 0; }\n    div.paper li > div.show {\n      display: block; }\n    div.paper li p.poster {\n      text-align: center;\n      margin-top: 5%; }\n      div.paper li p.poster img {\n        max-width: 50%; }\n\np.stupid {\n  background: red;\n  color: white;\n  margin: 1em auto;\n  padding: 0.5em;\n  border: 2px solid white;\n  width: 40%; }\n\np.attrib {\n  text-align: center;\n  margin: 0;\n  padding: 0;\n  border: 0; }\n", ""]);



/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/api.js":
/*!*****************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/api.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function (useSourceMap) {
  var list = []; // return the list of modules as css string

  list.toString = function toString() {
    return this.map(function (item) {
      var content = cssWithMappingToString(item, useSourceMap);

      if (item[2]) {
        return '@media ' + item[2] + '{' + content + '}';
      } else {
        return content;
      }
    }).join('');
  }; // import a list of modules into the list


  list.i = function (modules, mediaQuery) {
    if (typeof modules === 'string') {
      modules = [[null, modules, '']];
    }

    var alreadyImportedModules = {};

    for (var i = 0; i < this.length; i++) {
      var id = this[i][0];

      if (id != null) {
        alreadyImportedModules[id] = true;
      }
    }

    for (i = 0; i < modules.length; i++) {
      var item = modules[i]; // skip already imported module
      // this implementation is not 100% perfect for weird media query combinations
      // when a module is imported multiple times with different media queries.
      // I hope this will never occur (Hey this way we have smaller bundles)

      if (item[0] == null || !alreadyImportedModules[item[0]]) {
        if (mediaQuery && !item[2]) {
          item[2] = mediaQuery;
        } else if (mediaQuery) {
          item[2] = '(' + item[2] + ') and (' + mediaQuery + ')';
        }

        list.push(item);
      }
    }
  };

  return list;
};

function cssWithMappingToString(item, useSourceMap) {
  var content = item[1] || '';
  var cssMapping = item[3];

  if (!cssMapping) {
    return content;
  }

  if (useSourceMap && typeof btoa === 'function') {
    var sourceMapping = toComment(cssMapping);
    var sourceURLs = cssMapping.sources.map(function (source) {
      return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */';
    });
    return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
  }

  return [content].join('\n');
} // Adapted from convert-source-map (MIT)


function toComment(sourceMap) {
  // eslint-disable-next-line no-undef
  var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
  var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;
  return '/*# ' + data + ' */';
}

/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/url-escape.js":
/*!************************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/url-escape.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function escape(url, needQuotes) {
  if (typeof url !== 'string') {
    return url;
  } // If url is already wrapped in quotes, remove them


  if (/^['"].*['"]$/.test(url)) {
    url = url.slice(1, -1);
  } // Should url be wrapped?
  // See https://drafts.csswg.org/css-values-3/#urls


  if (/["'() \t\n]/.test(url) || needQuotes) {
    return '"' + url.replace(/"/g, '\\"').replace(/\n/g, '\\n') + '"';
  }

  return url;
};

/***/ }),

/***/ "./node_modules/style-loader/lib/addStyles.js":
/*!****************************************************!*\
  !*** ./node_modules/style-loader/lib/addStyles.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/

var stylesInDom = {};

var	memoize = function (fn) {
	var memo;

	return function () {
		if (typeof memo === "undefined") memo = fn.apply(this, arguments);
		return memo;
	};
};

var isOldIE = memoize(function () {
	// Test for IE <= 9 as proposed by Browserhacks
	// @see http://browserhacks.com/#hack-e71d8692f65334173fee715c222cb805
	// Tests for existence of standard globals is to allow style-loader
	// to operate correctly into non-standard environments
	// @see https://github.com/webpack-contrib/style-loader/issues/177
	return window && document && document.all && !window.atob;
});

var getTarget = function (target, parent) {
  if (parent){
    return parent.querySelector(target);
  }
  return document.querySelector(target);
};

var getElement = (function (fn) {
	var memo = {};

	return function(target, parent) {
                // If passing function in options, then use it for resolve "head" element.
                // Useful for Shadow Root style i.e
                // {
                //   insertInto: function () { return document.querySelector("#foo").shadowRoot }
                // }
                if (typeof target === 'function') {
                        return target();
                }
                if (typeof memo[target] === "undefined") {
			var styleTarget = getTarget.call(this, target, parent);
			// Special case to return head of iframe instead of iframe itself
			if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {
				try {
					// This will throw an exception if access to iframe is blocked
					// due to cross-origin restrictions
					styleTarget = styleTarget.contentDocument.head;
				} catch(e) {
					styleTarget = null;
				}
			}
			memo[target] = styleTarget;
		}
		return memo[target]
	};
})();

var singleton = null;
var	singletonCounter = 0;
var	stylesInsertedAtTop = [];

var	fixUrls = __webpack_require__(/*! ./urls */ "./node_modules/style-loader/lib/urls.js");

module.exports = function(list, options) {
	if (typeof DEBUG !== "undefined" && DEBUG) {
		if (typeof document !== "object") throw new Error("The style-loader cannot be used in a non-browser environment");
	}

	options = options || {};

	options.attrs = typeof options.attrs === "object" ? options.attrs : {};

	// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
	// tags it will allow on a page
	if (!options.singleton && typeof options.singleton !== "boolean") options.singleton = isOldIE();

	// By default, add <style> tags to the <head> element
        if (!options.insertInto) options.insertInto = "head";

	// By default, add <style> tags to the bottom of the target
	if (!options.insertAt) options.insertAt = "bottom";

	var styles = listToStyles(list, options);

	addStylesToDom(styles, options);

	return function update (newList) {
		var mayRemove = [];

		for (var i = 0; i < styles.length; i++) {
			var item = styles[i];
			var domStyle = stylesInDom[item.id];

			domStyle.refs--;
			mayRemove.push(domStyle);
		}

		if(newList) {
			var newStyles = listToStyles(newList, options);
			addStylesToDom(newStyles, options);
		}

		for (var i = 0; i < mayRemove.length; i++) {
			var domStyle = mayRemove[i];

			if(domStyle.refs === 0) {
				for (var j = 0; j < domStyle.parts.length; j++) domStyle.parts[j]();

				delete stylesInDom[domStyle.id];
			}
		}
	};
};

function addStylesToDom (styles, options) {
	for (var i = 0; i < styles.length; i++) {
		var item = styles[i];
		var domStyle = stylesInDom[item.id];

		if(domStyle) {
			domStyle.refs++;

			for(var j = 0; j < domStyle.parts.length; j++) {
				domStyle.parts[j](item.parts[j]);
			}

			for(; j < item.parts.length; j++) {
				domStyle.parts.push(addStyle(item.parts[j], options));
			}
		} else {
			var parts = [];

			for(var j = 0; j < item.parts.length; j++) {
				parts.push(addStyle(item.parts[j], options));
			}

			stylesInDom[item.id] = {id: item.id, refs: 1, parts: parts};
		}
	}
}

function listToStyles (list, options) {
	var styles = [];
	var newStyles = {};

	for (var i = 0; i < list.length; i++) {
		var item = list[i];
		var id = options.base ? item[0] + options.base : item[0];
		var css = item[1];
		var media = item[2];
		var sourceMap = item[3];
		var part = {css: css, media: media, sourceMap: sourceMap};

		if(!newStyles[id]) styles.push(newStyles[id] = {id: id, parts: [part]});
		else newStyles[id].parts.push(part);
	}

	return styles;
}

function insertStyleElement (options, style) {
	var target = getElement(options.insertInto)

	if (!target) {
		throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");
	}

	var lastStyleElementInsertedAtTop = stylesInsertedAtTop[stylesInsertedAtTop.length - 1];

	if (options.insertAt === "top") {
		if (!lastStyleElementInsertedAtTop) {
			target.insertBefore(style, target.firstChild);
		} else if (lastStyleElementInsertedAtTop.nextSibling) {
			target.insertBefore(style, lastStyleElementInsertedAtTop.nextSibling);
		} else {
			target.appendChild(style);
		}
		stylesInsertedAtTop.push(style);
	} else if (options.insertAt === "bottom") {
		target.appendChild(style);
	} else if (typeof options.insertAt === "object" && options.insertAt.before) {
		var nextSibling = getElement(options.insertAt.before, target);
		target.insertBefore(style, nextSibling);
	} else {
		throw new Error("[Style Loader]\n\n Invalid value for parameter 'insertAt' ('options.insertAt') found.\n Must be 'top', 'bottom', or Object.\n (https://github.com/webpack-contrib/style-loader#insertat)\n");
	}
}

function removeStyleElement (style) {
	if (style.parentNode === null) return false;
	style.parentNode.removeChild(style);

	var idx = stylesInsertedAtTop.indexOf(style);
	if(idx >= 0) {
		stylesInsertedAtTop.splice(idx, 1);
	}
}

function createStyleElement (options) {
	var style = document.createElement("style");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}

	if(options.attrs.nonce === undefined) {
		var nonce = getNonce();
		if (nonce) {
			options.attrs.nonce = nonce;
		}
	}

	addAttrs(style, options.attrs);
	insertStyleElement(options, style);

	return style;
}

function createLinkElement (options) {
	var link = document.createElement("link");

	if(options.attrs.type === undefined) {
		options.attrs.type = "text/css";
	}
	options.attrs.rel = "stylesheet";

	addAttrs(link, options.attrs);
	insertStyleElement(options, link);

	return link;
}

function addAttrs (el, attrs) {
	Object.keys(attrs).forEach(function (key) {
		el.setAttribute(key, attrs[key]);
	});
}

function getNonce() {
	if (false) {}

	return __webpack_require__.nc;
}

function addStyle (obj, options) {
	var style, update, remove, result;

	// If a transform function was defined, run it on the css
	if (options.transform && obj.css) {
	    result = typeof options.transform === 'function'
		 ? options.transform(obj.css) 
		 : options.transform.default(obj.css);

	    if (result) {
	    	// If transform returns a value, use that instead of the original css.
	    	// This allows running runtime transformations on the css.
	    	obj.css = result;
	    } else {
	    	// If the transform function returns a falsy value, don't add this css.
	    	// This allows conditional loading of css
	    	return function() {
	    		// noop
	    	};
	    }
	}

	if (options.singleton) {
		var styleIndex = singletonCounter++;

		style = singleton || (singleton = createStyleElement(options));

		update = applyToSingletonTag.bind(null, style, styleIndex, false);
		remove = applyToSingletonTag.bind(null, style, styleIndex, true);

	} else if (
		obj.sourceMap &&
		typeof URL === "function" &&
		typeof URL.createObjectURL === "function" &&
		typeof URL.revokeObjectURL === "function" &&
		typeof Blob === "function" &&
		typeof btoa === "function"
	) {
		style = createLinkElement(options);
		update = updateLink.bind(null, style, options);
		remove = function () {
			removeStyleElement(style);

			if(style.href) URL.revokeObjectURL(style.href);
		};
	} else {
		style = createStyleElement(options);
		update = applyToTag.bind(null, style);
		remove = function () {
			removeStyleElement(style);
		};
	}

	update(obj);

	return function updateStyle (newObj) {
		if (newObj) {
			if (
				newObj.css === obj.css &&
				newObj.media === obj.media &&
				newObj.sourceMap === obj.sourceMap
			) {
				return;
			}

			update(obj = newObj);
		} else {
			remove();
		}
	};
}

var replaceText = (function () {
	var textStore = [];

	return function (index, replacement) {
		textStore[index] = replacement;

		return textStore.filter(Boolean).join('\n');
	};
})();

function applyToSingletonTag (style, index, remove, obj) {
	var css = remove ? "" : obj.css;

	if (style.styleSheet) {
		style.styleSheet.cssText = replaceText(index, css);
	} else {
		var cssNode = document.createTextNode(css);
		var childNodes = style.childNodes;

		if (childNodes[index]) style.removeChild(childNodes[index]);

		if (childNodes.length) {
			style.insertBefore(cssNode, childNodes[index]);
		} else {
			style.appendChild(cssNode);
		}
	}
}

function applyToTag (style, obj) {
	var css = obj.css;
	var media = obj.media;

	if(media) {
		style.setAttribute("media", media)
	}

	if(style.styleSheet) {
		style.styleSheet.cssText = css;
	} else {
		while(style.firstChild) {
			style.removeChild(style.firstChild);
		}

		style.appendChild(document.createTextNode(css));
	}
}

function updateLink (link, options, obj) {
	var css = obj.css;
	var sourceMap = obj.sourceMap;

	/*
		If convertToAbsoluteUrls isn't defined, but sourcemaps are enabled
		and there is no publicPath defined then lets turn convertToAbsoluteUrls
		on by default.  Otherwise default to the convertToAbsoluteUrls option
		directly
	*/
	var autoFixUrls = options.convertToAbsoluteUrls === undefined && sourceMap;

	if (options.convertToAbsoluteUrls || autoFixUrls) {
		css = fixUrls(css);
	}

	if (sourceMap) {
		// http://stackoverflow.com/a/26603875
		css += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + " */";
	}

	var blob = new Blob([css], { type: "text/css" });

	var oldSrc = link.href;

	link.href = URL.createObjectURL(blob);

	if(oldSrc) URL.revokeObjectURL(oldSrc);
}


/***/ }),

/***/ "./node_modules/style-loader/lib/urls.js":
/*!***********************************************!*\
  !*** ./node_modules/style-loader/lib/urls.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {


/**
 * When source maps are enabled, `style-loader` uses a link element with a data-uri to
 * embed the css on the page. This breaks all relative urls because now they are relative to a
 * bundle instead of the current page.
 *
 * One solution is to only use full urls, but that may be impossible.
 *
 * Instead, this function "fixes" the relative urls to be absolute according to the current page location.
 *
 * A rudimentary test suite is located at `test/fixUrls.js` and can be run via the `npm test` command.
 *
 */

module.exports = function (css) {
  // get current location
  var location = typeof window !== "undefined" && window.location;

  if (!location) {
    throw new Error("fixUrls requires window.location");
  }

	// blank or null?
	if (!css || typeof css !== "string") {
	  return css;
  }

  var baseUrl = location.protocol + "//" + location.host;
  var currentDir = baseUrl + location.pathname.replace(/\/[^\/]*$/, "/");

	// convert each url(...)
	/*
	This regular expression is just a way to recursively match brackets within
	a string.

	 /url\s*\(  = Match on the word "url" with any whitespace after it and then a parens
	   (  = Start a capturing group
	     (?:  = Start a non-capturing group
	         [^)(]  = Match anything that isn't a parentheses
	         |  = OR
	         \(  = Match a start parentheses
	             (?:  = Start another non-capturing groups
	                 [^)(]+  = Match anything that isn't a parentheses
	                 |  = OR
	                 \(  = Match a start parentheses
	                     [^)(]*  = Match anything that isn't a parentheses
	                 \)  = Match a end parentheses
	             )  = End Group
              *\) = Match anything and then a close parens
          )  = Close non-capturing group
          *  = Match anything
       )  = Close capturing group
	 \)  = Match a close parens

	 /gi  = Get all matches, not the first.  Be case insensitive.
	 */
	var fixedCss = css.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi, function(fullMatch, origUrl) {
		// strip quotes (if they exist)
		var unquotedOrigUrl = origUrl
			.trim()
			.replace(/^"(.*)"$/, function(o, $1){ return $1; })
			.replace(/^'(.*)'$/, function(o, $1){ return $1; });

		// already a full url? no change
		if (/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/|\s*$)/i.test(unquotedOrigUrl)) {
		  return fullMatch;
		}

		// convert the url to a full url
		var newUrl;

		if (unquotedOrigUrl.indexOf("//") === 0) {
		  	//TODO: should we add protocol?
			newUrl = unquotedOrigUrl;
		} else if (unquotedOrigUrl.indexOf("/") === 0) {
			// path should be relative to the base url
			newUrl = baseUrl + unquotedOrigUrl; // already starts with '/'
		} else {
			// path should be relative to current directory
			newUrl = currentDir + unquotedOrigUrl.replace(/^\.\//, ""); // Strip leading './'
		}

		// send back the fixed url(...)
		return "url(" + JSON.stringify(newUrl) + ")";
	});

	// send back the fixed css
	return fixedCss;
};


/***/ }),

/***/ "./src/_noir.scss":
/*!************************!*\
  !*** ./src/_noir.scss ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../node_modules/css-loader/dist/cjs.js!../node_modules/resolve-url-loader!../node_modules/sass-loader/lib/loader.js?sourceMap!./_noir.scss */ "./node_modules/css-loader/dist/cjs.js!./node_modules/resolve-url-loader/index.js!./node_modules/sass-loader/lib/loader.js?sourceMap!./src/_noir.scss");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./src/img/office.jpg":
/*!****************************!*\
  !*** ./src/img/office.jpg ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = "data:image/jpeg;base64,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"

/***/ }),

/***/ "./src/img/paper.png":
/*!***************************!*\
  !*** ./src/img/paper.png ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__.p + "/img/paper.png";

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _noir_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_noir.scss */ "./src/_noir.scss");
/* harmony import */ var _noir_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_noir_scss__WEBPACK_IMPORTED_MODULE_0__);



/***/ })

/******/ });
//# sourceMappingURL=main.js.map