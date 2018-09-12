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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/team/index.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__store_js__ = __webpack_require__("./resources/js/pages/team/store.js");


new Vue({
	el: '#app',

	store: __WEBPACK_IMPORTED_MODULE_0__store_js__["a" /* default */],

	data: {},

	computed: {
		teams: function teams(state) {
			return state.$store.getters.teamRecords;
		}
		//teamData: state => Object.assign({}, state.$store.getters.teamData),
	},

	mounted: function mounted() {
		this.loadTeams();
	},


	methods: {
		/**
   * Load Teams
   */
		loadTeams: function loadTeams() {
			var data = {
				url: document.teams.pageUrls.team_index
			};

			this.$store.dispatch('loadTeams', data);
		}
	}
});

/***/ }),

/***/ "./resources/js/pages/team/store.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__team_team__ = __webpack_require__("./resources/js/pages/team/team/team.js");


/* harmony default export */ __webpack_exports__["a"] = (new Vuex.Store({

    modules: {
        team: __WEBPACK_IMPORTED_MODULE_0__team_team__["a" /* default */]
    },

    state: {
        teams: []
    },

    getters: {
        teamRecords: function teamRecords(state) {
            return state.teams;
        }
    },

    mutations: {
        /**
         * Sets the team.
         */
        setTeam: function setTeam(state, data) {
            return state.teams = data;
        }
    },

    actions: {
        /**
         * Loads teams.
         */
        loadTeams: function loadTeams(context, data) {
            return new Promise(function (response, reject) {
                context.dispatch('team/loadTeams', data).then(function (res) {
                    context.commit('setTeam', res);

                    response(res);
                }).catch(function (err) {
                    return reject(err);
                });
            });
        }
    }
}));

/***/ }),

/***/ "./resources/js/pages/team/team/load.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony default export */ __webpack_exports__["a"] = ({
    namespaced: true,

    actions: {
        /**
         * Loads teams.
         */
        loadTeams: function loadTeams(context, data) {
            return new Promise(function (response, reject) {
                var url = data.url;

                axios.get(url).then(function (res) {
                    //     let data = {
                    //         ...res.data.meta,
                    //         ...res.data.links,
                    //         data: res.data.data
                    //     };

                    response(res.data);
                }).catch(function (err) {
                    return reject(err);
                });
            });
        }
    }
});

/***/ }),

/***/ "./resources/js/pages/team/team/team.js":
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__load__ = __webpack_require__("./resources/js/pages/team/team/load.js");


/* harmony default export */ __webpack_exports__["a"] = ({
    namespaced: true,

    modules: {
        load: __WEBPACK_IMPORTED_MODULE_0__load__["a" /* default */]
    },

    actions: {
        /**
         * Loads teams.
         */
        loadTeams: function loadTeams(context, data) {
            return new Promise(function (resolve, reject) {
                context.dispatch('load/loadTeams', data).then(function (res) {
                    return resolve(res);
                }).catch(function (err) {
                    return reject(err);
                });
            });
        }
    }
});

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/js/pages/team/index.js");


/***/ })

/******/ });