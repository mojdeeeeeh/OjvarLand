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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/pages/image/index.js":
/***/ (function(module, exports) {

new Vue({
    el: '#app',

    data: {
        name: '',
        file: {},
        url: '',
        images: []

    },

    computed: {},

    mounted: function mounted() {
        this.loadData();
    },


    methods: {
        fileChanged: function fileChanged(sender) {
            this.file = sender.target.files[0];
        },
        send: function send() {
            var _this = this;

            var formData = new FormData();
            var config = {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            };

            formData.append('name', this.name);
            formData.append('file', this.file, this.file.name);

            axios.post('/image', formData, config).then(function (res) {
                return _this.url = res.data;
            }, function (err) {
                return alert(err.message);
            });
        },
        loadData: function loadData() {
            var _this2 = this;

            //let url = '{{ route('image.index') }}';
            // let data = {
            //     url: document.images.pageUrls.image_index,
            // };
            axios.get('/image').then(function (res) {
                return _this2.images = res.data;
            });
        },


        /**
         * Delete image
         *
         * @param      {<type>}  image  The image
         */
        deleteImage: function deleteImage(image) {
            //let url = '{{ route('image.destroy', '') }}/' + image.id;
            // let data = {
            //     url: document.images.pageUrls.image_delete,
            // };

            axios.delete('/image/', image.id).then(function (res) {
                return alert('deleted');
            });
        }
    }
});

/***/ }),

/***/ 2:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/js/pages/image/index.js");


/***/ })

/******/ });