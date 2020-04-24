(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["dashboard"], {

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseAlert.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseAlert.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue2_transitions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue2-transitions */ "./node_modules/vue2-transitions/dist/vue2-transitions.m.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
        name: 'base-alert',
        components: {
          FadeTransition: vue2_transitions__WEBPACK_IMPORTED_MODULE_0__["FadeTransition"]
        },
        props: {
          type: {
            type: String,
            "default": 'default',
            description: 'Alert type'
          },
          dismissible: {
            type: Boolean,
            "default": false,
            description: 'Whether alert is dismissible (closeable)'
          },
          withIcon: {
            type: Boolean,
            "default": false,
            description: 'Whether alert contains icon'
          }
        },
        data: function data: function() {
          return {
            visible: true
          };
        },
        methods: {
          dismissAlert: function dismissAlert() {
            this.visible = false;
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseButton.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseButton.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: "base-button",
        props: {
          tag: {
            type: String,
            "default": "button",
            description: "Button html tag"
          },
          round: Boolean,
          icon: Boolean,
          block: Boolean,
          loading: Boolean,
          disabled: Boolean,
          type: {
            type: String,
            "default": "default",
            description: "Button type (primary|secondary|danger etc)"
          },
          nativeType: {
            type: String,
            "default": "button",
            description: "Button native type (e.g button, input etc)"
          },
          size: {
            type: String,
            "default": "",
            description: "Button size (sm|lg)"
          },
          simple: {
            type: Boolean,
            description: "Whether button is simple (outlined)"
          },
          link: {
            type: Boolean,
            description: "Whether button is a link (no borders or background)"
          }
        },
        methods: {
          handleClick: function handleClick(evt) {
            this.$emit("click", evt);
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseCheckbox.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseCheckbox.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: "base-checkbox",
        model: {
          prop: "checked"
        },
        props: {
          checked: {
            type: [Array, Boolean],
            description: "Whether checkbox is checked"
          },
          disabled: {
            type: Boolean,
            description: "Whether checkbox is disabled"
          },
          inline: {
            type: Boolean,
            description: "Whether checkbox should be inline with other checkboxes"
          }
        },
        data: function data: function() {
          return {
            cbId: '',
            touched: false
          };
        },
        computed: {
          model: {
            get: function get() {
              return this.checked;
            },
            set: function set(check) {
              if (!this.touched) {
                this.touched = true;
              }

              this.$emit('input', check);
            }
          },
          inlineClass: function inlineClass() {
            if (this.inline) {
              return "form-check-inline";
            }
          }
        },
        created: function created() {
          this.cbId = Math.random().toString(16).slice(2);
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseDropdown.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseDropdown.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: "base-dropdown",
        props: {
          tag: {
            type: String,
            "default": "div",
            description: "Dropdown html tag (e.g div, ul etc)"
          },
          titleTag: {
            type: String,
            "default": "button",
            description: "Dropdown title (toggle) html tag"
          },
          title: {
            type: String,
            description: "Dropdown title"
          },
          icon: {
            type: String,
            description: "Dropdown icon"
          },
          titleClasses: {
            type: [String, Object, Array],
            description: "Title css classes"
          },
          menuClasses: {
            type: [String, Object],
            description: "Menu css classes"
          },
          menuOnRight: {
            type: Boolean,
            description: "Whether menu should appear on the right"
          },
          ariaLabel: String
        },
        data: function data: function() {
          return {
            isOpen: false
          };
        },
        methods: {
          toggleDropDown: function toggleDropDown() {
            this.isOpen = !this.isOpen;
            this.$emit("change", this.isOpen);
          },
          closeDropDown: function closeDropDown() {
            this.isOpen = false;
            this.$emit('change', false);
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseNav.vue?vue&type=script&lang=js&":
/*!******************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseNav.vue?vue&type=script&lang=js& ***!
  \******************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue2_transitions__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue2-transitions */ "./node_modules/vue2-transitions/dist/vue2-transitions.m.js");
/* harmony import */ var _NavbarToggleButton__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavbarToggleButton */ "./resources/js/components/NavbarToggleButton.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
        name: "base-nav",
        components: {
          FadeTransition: vue2_transitions__WEBPACK_IMPORTED_MODULE_0__["FadeTransition"],
          NavbarToggleButton: _NavbarToggleButton__WEBPACK_IMPORTED_MODULE_1__["default"]
        },
        props: {
          type: {
            type: String,
            "default": "primary",
            description: "Navbar type (e.g default, primary etc)"
          },
          title: {
            type: String,
            "default": "",
            description: "Title of navbar"
          },
          contentId: {
            type: [String, Number],
            "default": Math.random().toString(),
            description: "Explicit id for the menu. By default it's a generated random number"
          },
          effect: {
            type: String,
            "default": "dark",
            description: "Effect of the navbar (light|dark)"
          },
          round: {
            type: Boolean,
            "default": false,
            description: "Whether nav has rounded corners"
          },
          transparent: {
            type: Boolean,
            "default": false,
            description: "Whether navbar is transparent"
          },
          expand: {
            type: Boolean,
            "default": false,
            description: "Whether navbar should contain `navbar-expand-lg` class"
          }
        },
        data: function data: function() {
          return {
            toggled: false
          };
        },
        methods: {
          onTitleClick: function onTitleClick(evt) {
            this.$emit("title-click", evt);
          },
          closeMenu: function closeMenu() {
            this.toggled = false;
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseRadio.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseRadio.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: "base-radio",
        props: {
          name: {
            type: [String, Number],
            description: "Radio label"
          },
          disabled: {
            type: Boolean,
            description: "Whether radio is disabled"
          },
          value: {
            type: [String, Boolean],
            description: "Radio value"
          },
          inline: {
            type: Boolean,
            description: "Whether radio is inline"
          }
        },
        data: function data: function() {
          return {
            cbId: ""
          };
        },
        computed: {
          model: {
            get: function get() {
              return this.value;
            },
            set: function set(value) {
              this.$emit("input", value);
            }
          },
          inlineClass: function inlineClass() {
            if (this.inline) {
              return "form-check-inline";
            }

            return "";
          }
        },
        created: function created() {
          this.cbId = Math.random().toString(16).slice(2);
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseTable.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseTable.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: 'base-table',
        props: {
          columns: {
            type: Array,
            "default": function _default() {
              return [];
            },
            description: "Table columns"
          },
          data: {
            type: Array,
            "default": function _default() {
              return [];
            },
            description: "Table data"
          },
          type: {
            type: String,
            // striped | hover
            "default": "",
            description: "Whether table is striped or hover type"
          },
          theadClasses: {
            type: String,
            "default": '',
            description: "<thead> css classes"
          },
          tbodyClasses: {
            type: String,
            "default": '',
            description: "<tbody> css classes"
          }
        },
        computed: {
          tableClass: function tableClass() {
            return this.type && "table-".concat(this.type);
          }
        },
        methods: {
          hasValue: function hasValue(item, column) {
            return item[column.toLowerCase()] !== "undefined";
          },
          itemValue: function itemValue(item, column) {
            return item[column.toLowerCase()];
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/Card.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Cards/Card.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: "card",
        props: {
          title: {
            type: String,
            description: "Card title"
          },
          subTitle: {
            type: String,
            description: "Card subtitle"
          },
          type: {
            type: String,
            description: "Card type (e.g primary/danger etc)"
          },
          headerClasses: {
            type: [String, Object, Array],
            description: "Card header css classes"
          },
          bodyClasses: {
            type: [String, Object, Array],
            description: "Card body css classes"
          },
          footerClasses: {
            type: [String, Object, Array],
            description: "Card footer css classes"
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/StatsCard.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Cards/StatsCard.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Card_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Card.vue */ "./resources/js/components/Cards/Card.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
        name: "stats-card",
        components: {
          Card: _Card_vue__WEBPACK_IMPORTED_MODULE_0__["default"]
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CloseButton.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/CloseButton.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: "close-button",
        props: {
          target: {
            type: [String, Number],
            description: "Close button target element"
          },
          expanded: {
            type: Boolean,
            description: "Whether button is expanded (aria-expanded attribute)"
          }
        },
        methods: {
          handleClick: function handleClick(evt) {
            this.$emit("click", evt);
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Inputs/BaseInput.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Inputs/BaseInput.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
      function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

      function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

      function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        inheritAttrs: false,
        name: "base-input",
        props: {
          label: {
            type: String,
            description: "Input label"
          },
          value: {
            type: [String, Number],
            description: "Input value"
          },
          addonRightIcon: {
            type: String,
            description: "Input icon on the right"
          },
          addonLeftIcon: {
            type: String,
            description: "Input icon on the left"
          }
        },
        model: {
          prop: 'value',
          event: 'input'
        },
        data: function data: function() {
          return {
            focused: false
          };
        },
        computed: {
          hasIcon: function hasIcon() {
            var _this$$slots = this.$slots,
              addonRight = _this$$slots.addonRight,
              addonLeft = _this$$slots.addonLeft;
            return addonRight !== undefined || addonLeft !== undefined || this.addonRightIcon !== undefined || this.addonLeftIcon !== undefined;
          },
          listeners: function listeners() {
            return _objectSpread({}, this.$listeners, {
              input: this.onInput,
              blur: this.onBlur,
              focus: this.onFocus
            });
          }
        },
        methods: {
          onInput: function onInput(evt) {
            this.$emit('input', evt.target.value);
          },
          onFocus: function onFocus() {
            this.focused = true;
          },
          onBlur: function onBlur() {
            this.focused = false;
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/NavbarToggleButton.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/NavbarToggleButton.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        props: {
          target: {
            type: [String, Number],
            description: "Button target element"
          },
          toggled: {
            type: Boolean,
            "default": false,
            description: "Whether button is toggled"
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=script&lang=js&":
/*!********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=script&lang=js& ***!
  \********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _SidebarLink__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SidebarLink */ "./resources/js/components/SidebarPlugin/SidebarLink.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
        props: {
          title: {
            type: String,
            "default": "Creative Tim"
          },
          backgroundColor: {
            type: String,
            "default": "vue"
          },
          activeColor: {
            type: String,
            "default": "success",
            validator: function validator(value) {
              var acceptedValues = ["primary", "info", "success", "warning", "danger"];
              return acceptedValues.indexOf(value) !== -1;
            }
          },
          sidebarLinks: {
            type: Array,
            "default": function _default() {
              return [];
            }
          },
          autoClose: {
            type: Boolean,
            "default": true
          }
        },
        provide: function provide() {
          return {
            autoClose: this.autoClose,
            addLink: this.addLink,
            removeLink: this.removeLink
          };
        },
        components: {
          SidebarLink: _SidebarLink__WEBPACK_IMPORTED_MODULE_0__["default"]
        },
        computed: {
          /**
           * Styles to animate the arrow near the current active sidebar link
           * @returns {{transform: string}}
           */
          arrowMovePx: function arrowMovePx() {
            return this.linkHeight * this.activeLinkIndex;
          },
          shortTitle: function shortTitle() {
            return this.title.split(' ').map(function (word) {
              return word.charAt(0);
            }).join('').toUpperCase();
          }
        },
        data: function data: function() {
          return {
            linkHeight: 65,
            activeLinkIndex: 0,
            windowWidth: 0,
            isWindows: false,
            hasAutoHeight: false,
            links: []
          };
        },
        methods: {
          findActiveLink: function findActiveLink() {
            var _this = this;

            this.links.forEach(function (link, index) {
              if (link.isActive()) {
                _this.activeLinkIndex = index;
              }
            });
          },
          addLink: function addLink(link) {
            var index = this.$slots.links.indexOf(link.$vnode);
            this.links.splice(index, 0, link);
          },
          removeLink: function removeLink(link) {
            var index = this.links.indexOf(link);

            if (index > -1) {
              this.links.splice(index, 1);
            }
          }
        },
        mounted: function mounted: function() {
          this.$watch("$route", this.findActiveLink, {
            immediate: true
          });
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
        name: "sidebar-link",
        inheritAttrs: false,
        inject: {
          autoClose: {
            "default": true
          },
          addLink: {
            "default": function _default() { }
          },
          removeLink: {
            "default": function _default() { }
          }
        },
        props: {
          name: String,
          icon: String,
          tag: {
            type: String,
            "default": "router-link"
          }
        },
        methods: {
          hideSidebar: function hideSidebar() {
            if (this.autoClose) {
              this.$sidebar.displaySidebar(false);
            }
          },
          isActive: function isActive() {
            return this.$el.classList.contains("active");
          }
        },
        mounted: function mounted: function() {
          if (this.addLink) {
            this.addLink(this);
          }
        },
        beforeDestroy: function beforeDestroy() {
          if (this.$el && this.$el.parentNode) {
            this.$el.parentNode.removeChild(this.$el);
          }

          if (this.removeLink) {
            this.removeLink(this);
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Dashboard.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components_Charts_LineChart__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../components/Charts/LineChart */ "./resources/js/components/Charts/LineChart.js");
/* harmony import */ var _components_Charts_BarChart__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../components/Charts/BarChart */ "./resources/js/components/Charts/BarChart.js");
/* harmony import */ var _components_Charts_config__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/Charts/config */ "./resources/js/components/Charts/config.js");
/* harmony import */ var _Dashboard_TaskList__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./Dashboard/TaskList */ "./resources/js/pages/Dashboard/TaskList.vue");
/* harmony import */ var _Dashboard_UserTable__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./Dashboard/UserTable */ "./resources/js/pages/Dashboard/UserTable.vue");
/* harmony import */ var _config__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../config */ "./resources/js/config.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//






/* harmony default export */ __webpack_exports__["default"] = ({
        components: {
          LineChart: _components_Charts_LineChart__WEBPACK_IMPORTED_MODULE_0__["default"],
          BarChart: _components_Charts_BarChart__WEBPACK_IMPORTED_MODULE_1__["default"],
          TaskList: _Dashboard_TaskList__WEBPACK_IMPORTED_MODULE_3__["default"],
          UserTable: _Dashboard_UserTable__WEBPACK_IMPORTED_MODULE_4__["default"]
        },
        data: function data: function() {
          return {
            bigLineChart: {
              allData: [[100, 70, 90, 70, 85, 60, 75, 60, 90, 80, 110, 100], [80, 120, 105, 110, 95, 105, 90, 100, 80, 95, 70, 120], [60, 80, 65, 130, 80, 105, 90, 130, 70, 115, 60, 130]],
              activeIndex: 0,
              chartData: null,
              extraOptions: _components_Charts_config__WEBPACK_IMPORTED_MODULE_2__["purpleChartOptions"],
              gradientColors: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primaryGradient,
              gradientStops: [1, 0.4, 0],
              categories: []
            },
            purpleLineChart: {
              extraOptions: _components_Charts_config__WEBPACK_IMPORTED_MODULE_2__["purpleChartOptions"],
              chartData: {
                labels: ["JUL", "AUG", "SEP", "OCT", "NOV", "DEC"],
                datasets: [{
                  label: "Data",
                  fill: true,
                  borderColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primary,
                  borderWidth: 2,
                  borderDash: [],
                  borderDashOffset: 0.0,
                  pointBackgroundColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primary,
                  pointBorderColor: "rgba(255,255,255,0)",
                  pointHoverBackgroundColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primary,
                  pointBorderWidth: 20,
                  pointHoverRadius: 4,
                  pointHoverBorderWidth: 15,
                  pointRadius: 4,
                  data: [80, 100, 70, 80, 120, 80]
                }]
              },
              gradientColors: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primaryGradient,
              gradientStops: [1, 0.2, 0]
            },
            greenLineChart: {
              extraOptions: _components_Charts_config__WEBPACK_IMPORTED_MODULE_2__["greenChartOptions"],
              chartData: {
                labels: ["JUL", "AUG", "SEP", "OCT", "NOV"],
                datasets: [{
                  label: "My First dataset",
                  fill: true,
                  borderColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.danger,
                  borderWidth: 2,
                  borderDash: [],
                  borderDashOffset: 0.0,
                  pointBackgroundColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.danger,
                  pointBorderColor: "rgba(255,255,255,0)",
                  pointHoverBackgroundColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.danger,
                  pointBorderWidth: 20,
                  pointHoverRadius: 4,
                  pointHoverBorderWidth: 15,
                  pointRadius: 4,
                  data: [90, 27, 60, 12, 80]
                }]
              },
              gradientColors: ["rgba(66,134,121,0.15)", "rgba(66,134,121,0.0)", "rgba(66,134,121,0)"],
              gradientStops: [1, 0.4, 0]
            },
            blueBarChart: {
              extraOptions: _components_Charts_config__WEBPACK_IMPORTED_MODULE_2__["barChartOptions"],
              chartData: {
                labels: ["USA", "GER", "AUS", "UK", "RO", "BR"],
                datasets: [{
                  label: "Countries",
                  fill: true,
                  borderColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.info,
                  borderWidth: 2,
                  borderDash: [],
                  borderDashOffset: 0.0,
                  data: [53, 20, 10, 80, 100, 45]
                }]
              },
              gradientColors: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primaryGradient,
              gradientStops: [1, 0.4, 0]
            }
          };
        },
        computed: {
          enableRTL: function enableRTL() {
            return this.$route.query.enableRTL;
          },
          isRTL: function isRTL() {
            return this.$rtl.isRTL;
          },
          bigLineChartCategories: function bigLineChartCategories() {
            return this.$t("dashboard.chartCategories");
          }
        },
        methods: {
          initBigChart: function initBigChart(index) {
            var chartData = {
              datasets: [{
                fill: true,
                borderColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primary,
                borderWidth: 2,
                borderDash: [],
                borderDashOffset: 0.0,
                pointBackgroundColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primary,
                pointBorderColor: "rgba(255,255,255,0)",
                pointHoverBackgroundColor: _config__WEBPACK_IMPORTED_MODULE_5__["default"].colors.primary,
                pointBorderWidth: 20,
                pointHoverRadius: 4,
                pointHoverBorderWidth: 15,
                pointRadius: 4,
                data: this.bigLineChart.allData[index]
              }],
              labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"]
            };
            this.$refs.bigChart.updateGradients(chartData);
            this.bigLineChart.chartData = chartData;
            this.bigLineChart.activeIndex = index;
          }
        },
        mounted: function mounted: function() {
          this.i18n = this.$i18n;

          if (this.enableRTL) {
            this.i18n.locale = "ar";
            this.$rtl.enableRTL();
          }

          this.initBigChart(0);
        },
        beforeDestroy: function beforeDestroy() {
          if (this.$rtl.isRTL) {
            this.i18n.locale = "en";
            this.$rtl.disableRTL();
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/TaskList.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Dashboard/TaskList.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components */ "./resources/js/components/index.js");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
        components: {
          BaseTable: _components__WEBPACK_IMPORTED_MODULE_0__["BaseTable"]
        },
        computed: {
          tableData: function tabledata: function() {
            return this.$t("dashboard.taskList");
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/UserTable.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Dashboard/UserTable.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _components__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../components */ "./resources/js/components/index.js");
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
        components: {
          BaseTable: _components__WEBPACK_IMPORTED_MODULE_0__["BaseTable"]
        },
        computed: {
          table: function table() {
            return this.$t("dashboard.usersTable");
          }
        }
      });

      /***/
    }),

/***/ "./node_modules/moment/locale sync recursive ^\\.\\/.*$":
/*!**************************************************!*\
  !*** ./node_modules/moment/locale sync ^\.\/.*$ ***!
  \**************************************************/
/*! no static exports found */
/***/ (function (module, exports, __webpack_require__) {

      var map = {
        "./af": "./node_modules/moment/locale/af.js",
        "./af.js": "./node_modules/moment/locale/af.js",
        "./ar": "./node_modules/moment/locale/ar.js",
        "./ar-dz": "./node_modules/moment/locale/ar-dz.js",
        "./ar-dz.js": "./node_modules/moment/locale/ar-dz.js",
        "./ar-kw": "./node_modules/moment/locale/ar-kw.js",
        "./ar-kw.js": "./node_modules/moment/locale/ar-kw.js",
        "./ar-ly": "./node_modules/moment/locale/ar-ly.js",
        "./ar-ly.js": "./node_modules/moment/locale/ar-ly.js",
        "./ar-ma": "./node_modules/moment/locale/ar-ma.js",
        "./ar-ma.js": "./node_modules/moment/locale/ar-ma.js",
        "./ar-sa": "./node_modules/moment/locale/ar-sa.js",
        "./ar-sa.js": "./node_modules/moment/locale/ar-sa.js",
        "./ar-tn": "./node_modules/moment/locale/ar-tn.js",
        "./ar-tn.js": "./node_modules/moment/locale/ar-tn.js",
        "./ar.js": "./node_modules/moment/locale/ar.js",
        "./az": "./node_modules/moment/locale/az.js",
        "./az.js": "./node_modules/moment/locale/az.js",
        "./be": "./node_modules/moment/locale/be.js",
        "./be.js": "./node_modules/moment/locale/be.js",
        "./bg": "./node_modules/moment/locale/bg.js",
        "./bg.js": "./node_modules/moment/locale/bg.js",
        "./bm": "./node_modules/moment/locale/bm.js",
        "./bm.js": "./node_modules/moment/locale/bm.js",
        "./bn": "./node_modules/moment/locale/bn.js",
        "./bn.js": "./node_modules/moment/locale/bn.js",
        "./bo": "./node_modules/moment/locale/bo.js",
        "./bo.js": "./node_modules/moment/locale/bo.js",
        "./br": "./node_modules/moment/locale/br.js",
        "./br.js": "./node_modules/moment/locale/br.js",
        "./bs": "./node_modules/moment/locale/bs.js",
        "./bs.js": "./node_modules/moment/locale/bs.js",
        "./ca": "./node_modules/moment/locale/ca.js",
        "./ca.js": "./node_modules/moment/locale/ca.js",
        "./cs": "./node_modules/moment/locale/cs.js",
        "./cs.js": "./node_modules/moment/locale/cs.js",
        "./cv": "./node_modules/moment/locale/cv.js",
        "./cv.js": "./node_modules/moment/locale/cv.js",
        "./cy": "./node_modules/moment/locale/cy.js",
        "./cy.js": "./node_modules/moment/locale/cy.js",
        "./da": "./node_modules/moment/locale/da.js",
        "./da.js": "./node_modules/moment/locale/da.js",
        "./de": "./node_modules/moment/locale/de.js",
        "./de-at": "./node_modules/moment/locale/de-at.js",
        "./de-at.js": "./node_modules/moment/locale/de-at.js",
        "./de-ch": "./node_modules/moment/locale/de-ch.js",
        "./de-ch.js": "./node_modules/moment/locale/de-ch.js",
        "./de.js": "./node_modules/moment/locale/de.js",
        "./dv": "./node_modules/moment/locale/dv.js",
        "./dv.js": "./node_modules/moment/locale/dv.js",
        "./el": "./node_modules/moment/locale/el.js",
        "./el.js": "./node_modules/moment/locale/el.js",
        "./en-SG": "./node_modules/moment/locale/en-SG.js",
        "./en-SG.js": "./node_modules/moment/locale/en-SG.js",
        "./en-au": "./node_modules/moment/locale/en-au.js",
        "./en-au.js": "./node_modules/moment/locale/en-au.js",
        "./en-ca": "./node_modules/moment/locale/en-ca.js",
        "./en-ca.js": "./node_modules/moment/locale/en-ca.js",
        "./en-gb": "./node_modules/moment/locale/en-gb.js",
        "./en-gb.js": "./node_modules/moment/locale/en-gb.js",
        "./en-ie": "./node_modules/moment/locale/en-ie.js",
        "./en-ie.js": "./node_modules/moment/locale/en-ie.js",
        "./en-il": "./node_modules/moment/locale/en-il.js",
        "./en-il.js": "./node_modules/moment/locale/en-il.js",
        "./en-nz": "./node_modules/moment/locale/en-nz.js",
        "./en-nz.js": "./node_modules/moment/locale/en-nz.js",
        "./eo": "./node_modules/moment/locale/eo.js",
        "./eo.js": "./node_modules/moment/locale/eo.js",
        "./es": "./node_modules/moment/locale/es.js",
        "./es-do": "./node_modules/moment/locale/es-do.js",
        "./es-do.js": "./node_modules/moment/locale/es-do.js",
        "./es-us": "./node_modules/moment/locale/es-us.js",
        "./es-us.js": "./node_modules/moment/locale/es-us.js",
        "./es.js": "./node_modules/moment/locale/es.js",
        "./et": "./node_modules/moment/locale/et.js",
        "./et.js": "./node_modules/moment/locale/et.js",
        "./eu": "./node_modules/moment/locale/eu.js",
        "./eu.js": "./node_modules/moment/locale/eu.js",
        "./fa": "./node_modules/moment/locale/fa.js",
        "./fa.js": "./node_modules/moment/locale/fa.js",
        "./fi": "./node_modules/moment/locale/fi.js",
        "./fi.js": "./node_modules/moment/locale/fi.js",
        "./fo": "./node_modules/moment/locale/fo.js",
        "./fo.js": "./node_modules/moment/locale/fo.js",
        "./fr": "./node_modules/moment/locale/fr.js",
        "./fr-ca": "./node_modules/moment/locale/fr-ca.js",
        "./fr-ca.js": "./node_modules/moment/locale/fr-ca.js",
        "./fr-ch": "./node_modules/moment/locale/fr-ch.js",
        "./fr-ch.js": "./node_modules/moment/locale/fr-ch.js",
        "./fr.js": "./node_modules/moment/locale/fr.js",
        "./fy": "./node_modules/moment/locale/fy.js",
        "./fy.js": "./node_modules/moment/locale/fy.js",
        "./ga": "./node_modules/moment/locale/ga.js",
        "./ga.js": "./node_modules/moment/locale/ga.js",
        "./gd": "./node_modules/moment/locale/gd.js",
        "./gd.js": "./node_modules/moment/locale/gd.js",
        "./gl": "./node_modules/moment/locale/gl.js",
        "./gl.js": "./node_modules/moment/locale/gl.js",
        "./gom-latn": "./node_modules/moment/locale/gom-latn.js",
        "./gom-latn.js": "./node_modules/moment/locale/gom-latn.js",
        "./gu": "./node_modules/moment/locale/gu.js",
        "./gu.js": "./node_modules/moment/locale/gu.js",
        "./he": "./node_modules/moment/locale/he.js",
        "./he.js": "./node_modules/moment/locale/he.js",
        "./hi": "./node_modules/moment/locale/hi.js",
        "./hi.js": "./node_modules/moment/locale/hi.js",
        "./hr": "./node_modules/moment/locale/hr.js",
        "./hr.js": "./node_modules/moment/locale/hr.js",
        "./hu": "./node_modules/moment/locale/hu.js",
        "./hu.js": "./node_modules/moment/locale/hu.js",
        "./hy-am": "./node_modules/moment/locale/hy-am.js",
        "./hy-am.js": "./node_modules/moment/locale/hy-am.js",
        "./id": "./node_modules/moment/locale/id.js",
        "./id.js": "./node_modules/moment/locale/id.js",
        "./is": "./node_modules/moment/locale/is.js",
        "./is.js": "./node_modules/moment/locale/is.js",
        "./it": "./node_modules/moment/locale/it.js",
        "./it-ch": "./node_modules/moment/locale/it-ch.js",
        "./it-ch.js": "./node_modules/moment/locale/it-ch.js",
        "./it.js": "./node_modules/moment/locale/it.js",
        "./ja": "./node_modules/moment/locale/ja.js",
        "./ja.js": "./node_modules/moment/locale/ja.js",
        "./jv": "./node_modules/moment/locale/jv.js",
        "./jv.js": "./node_modules/moment/locale/jv.js",
        "./ka": "./node_modules/moment/locale/ka.js",
        "./ka.js": "./node_modules/moment/locale/ka.js",
        "./kk": "./node_modules/moment/locale/kk.js",
        "./kk.js": "./node_modules/moment/locale/kk.js",
        "./km": "./node_modules/moment/locale/km.js",
        "./km.js": "./node_modules/moment/locale/km.js",
        "./kn": "./node_modules/moment/locale/kn.js",
        "./kn.js": "./node_modules/moment/locale/kn.js",
        "./ko": "./node_modules/moment/locale/ko.js",
        "./ko.js": "./node_modules/moment/locale/ko.js",
        "./ku": "./node_modules/moment/locale/ku.js",
        "./ku.js": "./node_modules/moment/locale/ku.js",
        "./ky": "./node_modules/moment/locale/ky.js",
        "./ky.js": "./node_modules/moment/locale/ky.js",
        "./lb": "./node_modules/moment/locale/lb.js",
        "./lb.js": "./node_modules/moment/locale/lb.js",
        "./lo": "./node_modules/moment/locale/lo.js",
        "./lo.js": "./node_modules/moment/locale/lo.js",
        "./lt": "./node_modules/moment/locale/lt.js",
        "./lt.js": "./node_modules/moment/locale/lt.js",
        "./lv": "./node_modules/moment/locale/lv.js",
        "./lv.js": "./node_modules/moment/locale/lv.js",
        "./me": "./node_modules/moment/locale/me.js",
        "./me.js": "./node_modules/moment/locale/me.js",
        "./mi": "./node_modules/moment/locale/mi.js",
        "./mi.js": "./node_modules/moment/locale/mi.js",
        "./mk": "./node_modules/moment/locale/mk.js",
        "./mk.js": "./node_modules/moment/locale/mk.js",
        "./ml": "./node_modules/moment/locale/ml.js",
        "./ml.js": "./node_modules/moment/locale/ml.js",
        "./mn": "./node_modules/moment/locale/mn.js",
        "./mn.js": "./node_modules/moment/locale/mn.js",
        "./mr": "./node_modules/moment/locale/mr.js",
        "./mr.js": "./node_modules/moment/locale/mr.js",
        "./ms": "./node_modules/moment/locale/ms.js",
        "./ms-my": "./node_modules/moment/locale/ms-my.js",
        "./ms-my.js": "./node_modules/moment/locale/ms-my.js",
        "./ms.js": "./node_modules/moment/locale/ms.js",
        "./mt": "./node_modules/moment/locale/mt.js",
        "./mt.js": "./node_modules/moment/locale/mt.js",
        "./my": "./node_modules/moment/locale/my.js",
        "./my.js": "./node_modules/moment/locale/my.js",
        "./nb": "./node_modules/moment/locale/nb.js",
        "./nb.js": "./node_modules/moment/locale/nb.js",
        "./ne": "./node_modules/moment/locale/ne.js",
        "./ne.js": "./node_modules/moment/locale/ne.js",
        "./nl": "./node_modules/moment/locale/nl.js",
        "./nl-be": "./node_modules/moment/locale/nl-be.js",
        "./nl-be.js": "./node_modules/moment/locale/nl-be.js",
        "./nl.js": "./node_modules/moment/locale/nl.js",
        "./nn": "./node_modules/moment/locale/nn.js",
        "./nn.js": "./node_modules/moment/locale/nn.js",
        "./pa-in": "./node_modules/moment/locale/pa-in.js",
        "./pa-in.js": "./node_modules/moment/locale/pa-in.js",
        "./pl": "./node_modules/moment/locale/pl.js",
        "./pl.js": "./node_modules/moment/locale/pl.js",
        "./pt": "./node_modules/moment/locale/pt.js",
        "./pt-br": "./node_modules/moment/locale/pt-br.js",
        "./pt-br.js": "./node_modules/moment/locale/pt-br.js",
        "./pt.js": "./node_modules/moment/locale/pt.js",
        "./ro": "./node_modules/moment/locale/ro.js",
        "./ro.js": "./node_modules/moment/locale/ro.js",
        "./ru": "./node_modules/moment/locale/ru.js",
        "./ru.js": "./node_modules/moment/locale/ru.js",
        "./sd": "./node_modules/moment/locale/sd.js",
        "./sd.js": "./node_modules/moment/locale/sd.js",
        "./se": "./node_modules/moment/locale/se.js",
        "./se.js": "./node_modules/moment/locale/se.js",
        "./si": "./node_modules/moment/locale/si.js",
        "./si.js": "./node_modules/moment/locale/si.js",
        "./sk": "./node_modules/moment/locale/sk.js",
        "./sk.js": "./node_modules/moment/locale/sk.js",
        "./sl": "./node_modules/moment/locale/sl.js",
        "./sl.js": "./node_modules/moment/locale/sl.js",
        "./sq": "./node_modules/moment/locale/sq.js",
        "./sq.js": "./node_modules/moment/locale/sq.js",
        "./sr": "./node_modules/moment/locale/sr.js",
        "./sr-cyrl": "./node_modules/moment/locale/sr-cyrl.js",
        "./sr-cyrl.js": "./node_modules/moment/locale/sr-cyrl.js",
        "./sr.js": "./node_modules/moment/locale/sr.js",
        "./ss": "./node_modules/moment/locale/ss.js",
        "./ss.js": "./node_modules/moment/locale/ss.js",
        "./sv": "./node_modules/moment/locale/sv.js",
        "./sv.js": "./node_modules/moment/locale/sv.js",
        "./sw": "./node_modules/moment/locale/sw.js",
        "./sw.js": "./node_modules/moment/locale/sw.js",
        "./ta": "./node_modules/moment/locale/ta.js",
        "./ta.js": "./node_modules/moment/locale/ta.js",
        "./te": "./node_modules/moment/locale/te.js",
        "./te.js": "./node_modules/moment/locale/te.js",
        "./tet": "./node_modules/moment/locale/tet.js",
        "./tet.js": "./node_modules/moment/locale/tet.js",
        "./tg": "./node_modules/moment/locale/tg.js",
        "./tg.js": "./node_modules/moment/locale/tg.js",
        "./th": "./node_modules/moment/locale/th.js",
        "./th.js": "./node_modules/moment/locale/th.js",
        "./tl-ph": "./node_modules/moment/locale/tl-ph.js",
        "./tl-ph.js": "./node_modules/moment/locale/tl-ph.js",
        "./tlh": "./node_modules/moment/locale/tlh.js",
        "./tlh.js": "./node_modules/moment/locale/tlh.js",
        "./tr": "./node_modules/moment/locale/tr.js",
        "./tr.js": "./node_modules/moment/locale/tr.js",
        "./tzl": "./node_modules/moment/locale/tzl.js",
        "./tzl.js": "./node_modules/moment/locale/tzl.js",
        "./tzm": "./node_modules/moment/locale/tzm.js",
        "./tzm-latn": "./node_modules/moment/locale/tzm-latn.js",
        "./tzm-latn.js": "./node_modules/moment/locale/tzm-latn.js",
        "./tzm.js": "./node_modules/moment/locale/tzm.js",
        "./ug-cn": "./node_modules/moment/locale/ug-cn.js",
        "./ug-cn.js": "./node_modules/moment/locale/ug-cn.js",
        "./uk": "./node_modules/moment/locale/uk.js",
        "./uk.js": "./node_modules/moment/locale/uk.js",
        "./ur": "./node_modules/moment/locale/ur.js",
        "./ur.js": "./node_modules/moment/locale/ur.js",
        "./uz": "./node_modules/moment/locale/uz.js",
        "./uz-latn": "./node_modules/moment/locale/uz-latn.js",
        "./uz-latn.js": "./node_modules/moment/locale/uz-latn.js",
        "./uz.js": "./node_modules/moment/locale/uz.js",
        "./vi": "./node_modules/moment/locale/vi.js",
        "./vi.js": "./node_modules/moment/locale/vi.js",
        "./x-pseudo": "./node_modules/moment/locale/x-pseudo.js",
        "./x-pseudo.js": "./node_modules/moment/locale/x-pseudo.js",
        "./yo": "./node_modules/moment/locale/yo.js",
        "./yo.js": "./node_modules/moment/locale/yo.js",
        "./zh-cn": "./node_modules/moment/locale/zh-cn.js",
        "./zh-cn.js": "./node_modules/moment/locale/zh-cn.js",
        "./zh-hk": "./node_modules/moment/locale/zh-hk.js",
        "./zh-hk.js": "./node_modules/moment/locale/zh-hk.js",
        "./zh-tw": "./node_modules/moment/locale/zh-tw.js",
        "./zh-tw.js": "./node_modules/moment/locale/zh-tw.js"
      };


      function webpackContext(req) {
        var id = webpackContextResolve(req);
        return __webpack_require__(id);
      }
      function webpackContextResolve(req) {
        if (!__webpack_require__.o(map, req)) {
          var e = new Error("Cannot find module '" + req + "'");
          e.code = 'MODULE_NOT_FOUND';
          throw e;
        }
        return map[req];
      }
      webpackContext.keys = function webpackContextKeys() {
        return Object.keys(map);
      };
      webpackContext.resolve = webpackContextResolve;
      module.exports = webpackContext;
      webpackContext.id = "./node_modules/moment/locale sync recursive ^\\.\\/.*$";

      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseAlert.vue?vue&type=template&id=6b9f4ca0&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseAlert.vue?vue&type=template&id=6b9f4ca0& ***!
  \************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c("fade-transition", [
          _vm.visible
            ? _c(
              "div",
              {
                staticClass: "alert",
                class: ["alert-" + _vm.type, { "alert-with-icon": _vm.withIcon }],
                attrs: { role: "alert" }
              },
              [
                !_vm.dismissible
                  ? _vm._t("default")
                  : _c(
                    "div",
                    { staticClass: "container" },
                    [
                      _vm._t("default"),
                      _vm._v(" "),
                      _vm._t("dismiss-icon", [
                        _c(
                          "button",
                          {
                            staticClass: "close",
                            attrs: { type: "button", "aria-label": "Close" },
                            on: { click: _vm.dismissAlert }
                          },
                          [
                            _c("span", { attrs: { "aria-hidden": "true" } }, [
                              _c("i", {
                                staticClass: "tim-icons icon-simple-remove"
                              })
                            ])
                          ]
                        )
                      ])
                    ],
                    2
                  )
              ],
              2
            )
            : _vm._e()
        ])
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseButton.vue?vue&type=template&id=21673c8e&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseButton.vue?vue&type=template&id=21673c8e& ***!
  \*************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _obj, _obj$1
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          _vm.tag,
          {
            tag: "component",
            staticClass: "btn",
            class: [
              { "btn-round": _vm.round },
              { "btn-block": _vm.block },
              { "btn-icon btn-fab": _vm.icon },
              ((_obj = {}), (_obj["btn-" + _vm.type] = _vm.type), _obj),
              ((_obj$1 = {}), (_obj$1["btn-" + _vm.size] = _vm.size), _obj$1),
              { "btn-simple": _vm.simple },
              { "btn-link": _vm.link },
              { disabled: _vm.disabled && _vm.tag !== "button" }
            ],
            attrs: {
              type: _vm.tag === "button" ? _vm.nativeType : "",
              disabled: _vm.disabled || _vm.loading
            },
            on: { click: _vm.handleClick }
          },
          [
            _vm._t("loading", [
              _vm.loading
                ? _c("i", { staticClass: "fas fa-spinner fa-spin" })
                : _vm._e()
            ]),
            _vm._v(" "),
            _vm._t("default")
          ],
          2
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseCheckbox.vue?vue&type=template&id=085d9f9f&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseCheckbox.vue?vue&type=template&id=085d9f9f& ***!
  \***************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "div",
          {
            staticClass: "form-check",
            class: [{ disabled: _vm.disabled }, _vm.inlineClass]
          },
          [
            _c(
              "label",
              { staticClass: "form-check-label", attrs: { for: _vm.cbId } },
              [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.model,
                      expression: "model"
                    }
                  ],
                  staticClass: "form-check-input",
                  attrs: { id: _vm.cbId, type: "checkbox", disabled: _vm.disabled },
                  domProps: {
                    checked: Array.isArray(_vm.model)
                      ? _vm._i(_vm.model, null) > -1
                      : _vm.model
                  },
                  on: {
                    change: function ($event) {
                      var $$a = _vm.model,
                        $$el = $event.target,
                        $$c = $$el.checked ? true : false
                      if (Array.isArray($$a)) {
                        var $$v = null,
                          $$i = _vm._i($$a, $$v)
                        if ($$el.checked) {
                          $$i < 0 && (_vm.model = $$a.concat([$$v]))
                        } else {
                          $$i > -1 &&
                            (_vm.model = $$a.slice(0, $$i).concat($$a.slice($$i + 1)))
                        }
                      } else {
                        _vm.model = $$c
                      }
                    }
                  }
                }),
                _vm._v(" "),
                _c("span", { staticClass: "form-check-sign" }),
                _vm._v(" "),
                _vm._t("default", [_vm.inline ? _c("span", [_vm._v(" ")]) : _vm._e()])
              ],
              2
            )
          ]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseDropdown.vue?vue&type=template&id=4e0e1e26&":
/*!***************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseDropdown.vue?vue&type=template&id=4e0e1e26& ***!
  \***************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          _vm.tag,
          {
            directives: [
              {
                name: "click-outside",
                rawName: "v-click-outside",
                value: _vm.closeDropDown,
                expression: "closeDropDown"
              }
            ],
            tag: "component",
            staticClass: "dropdown",
            class: { show: _vm.isOpen },
            on: { click: _vm.toggleDropDown }
          },
          [
            _vm._t(
              "title-container",
              [
                _c(
                  _vm.titleTag,
                  {
                    tag: "component",
                    staticClass: "dropdown-toggle btn-rotate",
                    class: _vm.titleClasses,
                    attrs: {
                      "aria-expanded": _vm.isOpen,
                      "aria-label": _vm.title || _vm.ariaLabel,
                      "data-toggle": "dropdown"
                    }
                  },
                  [
                    _vm._t(
                      "title",
                      [
                        _c("i", { class: _vm.icon }),
                        _vm._v("\n        " + _vm._s(_vm.title) + "\n      ")
                      ],
                      { isOpen: _vm.isOpen }
                    )
                  ],
                  2
                )
              ],
              { isOpen: _vm.isOpen }
            ),
            _vm._v(" "),
            _c(
              "ul",
              {
                staticClass: "dropdown-menu",
                class: [
                  { show: _vm.isOpen },
                  { "dropdown-menu-right": _vm.menuOnRight },
                  _vm.menuClasses
                ]
              },
              [_vm._t("default")],
              2
            )
          ],
          2
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseNav.vue?vue&type=template&id=70760612&":
/*!**********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseNav.vue?vue&type=template&id=70760612& ***!
  \**********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _obj, _obj$1
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "nav",
          {
            staticClass: "navbar",
            class: [
              { "navbar-expand-lg": _vm.expand },
              ((_obj = {}), (_obj["navbar-" + _vm.effect] = _vm.effect), _obj),
              { "navbar-transparent": _vm.transparent },
              ((_obj$1 = {}), (_obj$1["bg-" + _vm.type] = _vm.type), _obj$1),
              { rounded: _vm.round }
            ]
          },
          [
            _c(
              "div",
              { staticClass: "container" },
              [
                _vm._t("container-pre"),
                _vm._v(" "),
                _vm._t("brand", [
                  _c(
                    "a",
                    {
                      staticClass: "navbar-brand",
                      attrs: { href: "#" },
                      on: {
                        click: function ($event) {
                          $event.preventDefault()
                          return _vm.onTitleClick($event)
                        }
                      }
                    },
                    [
                      _vm._v(
                        "\n                " + _vm._s(_vm.title) + "\n            "
                      )
                    ]
                  )
                ]),
                _vm._v(" "),
                _c("navbar-toggle-button", {
                  attrs: { toggled: _vm.toggled, target: _vm.contentId },
                  nativeOn: {
                    click: function ($event) {
                      $event.stopPropagation()
                      _vm.toggled = !_vm.toggled
                    }
                  }
                }),
                _vm._v(" "),
                _vm._t("container-after"),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    directives: [
                      {
                        name: "click-outside",
                        rawName: "v-click-outside",
                        value: _vm.closeMenu,
                        expression: "closeMenu"
                      }
                    ],
                    staticClass: "collapse navbar-collapse",
                    class: { show: _vm.toggled },
                    attrs: { id: _vm.contentId }
                  },
                  [
                    _c(
                      "div",
                      { staticClass: "navbar-collapse-header" },
                      [_vm._t("content-header", null, { closeMenu: _vm.closeMenu })],
                      2
                    ),
                    _vm._v(" "),
                    _vm._t("default", null, { closeMenu: _vm.closeMenu })
                  ],
                  2
                )
              ],
              2
            )
          ]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseRadio.vue?vue&type=template&id=30f30662&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseRadio.vue?vue&type=template&id=30f30662& ***!
  \************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "div",
          {
            staticClass: "form-check form-check-radio",
            class: [_vm.inlineClass, { disabled: _vm.disabled }]
          },
          [
            _c(
              "label",
              { staticClass: "form-check-label", attrs: { for: _vm.cbId } },
              [
                _c("input", {
                  directives: [
                    {
                      name: "model",
                      rawName: "v-model",
                      value: _vm.model,
                      expression: "model"
                    }
                  ],
                  staticClass: "form-check-input",
                  attrs: { id: _vm.cbId, type: "radio", disabled: _vm.disabled },
                  domProps: { value: _vm.name, checked: _vm._q(_vm.model, _vm.name) },
                  on: {
                    change: function ($event) {
                      _vm.model = _vm.name
                    }
                  }
                }),
                _vm._v(" "),
                _vm._t("default"),
                _vm._v(" "),
                _c("span", { staticClass: "form-check-sign" })
              ],
              2
            )
          ]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseTable.vue?vue&type=template&id=aa56f9bc&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/BaseTable.vue?vue&type=template&id=aa56f9bc& ***!
  \************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "table",
          { staticClass: "table tablesorter", class: _vm.tableClass },
          [
            _c("thead", { class: _vm.theadClasses }, [
              _c(
                "tr",
                [
                  _vm._t(
                    "columns",
                    _vm._l(_vm.columns, function (column) {
                      return _c("th", { key: column }, [_vm._v(_vm._s(column))])
                    })
                  )
                ],
                2
              )
            ]),
            _vm._v(" "),
            _c(
              "tbody",
              { class: _vm.tbodyClasses },
              _vm._l(_vm.data, function (item, index) {
                return _c(
                  "tr",
                  { key: index },
                  [
                    _vm._t(
                      "default",
                      _vm._l(_vm.columns, function (column, index) {
                        return _vm.hasValue(item, column)
                          ? _c("td", { key: index }, [
                            _vm._v(
                              "\n        " +
                              _vm._s(_vm.itemValue(item, column)) +
                              "\n      "
                            )
                          ])
                          : _vm._e()
                      }),
                      { row: item }
                    )
                  ],
                  2
                )
              }),
              0
            )
          ]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/Card.vue?vue&type=template&id=592ec5f2&":
/*!*************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Cards/Card.vue?vue&type=template&id=592ec5f2& ***!
  \*************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "div",
          { staticClass: "card", class: [_vm.type && "card-" + _vm.type] },
          [
            _vm.$slots.image
              ? _c("div", { staticClass: "card-image" }, [_vm._t("image")], 2)
              : _vm._e(),
            _vm._v(" "),
            _vm.$slots.header || _vm.title
              ? _c(
                "div",
                { staticClass: "card-header", class: _vm.headerClasses },
                [
                  _vm._t("header", [
                    _c("h4", { staticClass: "card-title" }, [
                      _vm._v(_vm._s(_vm.title))
                    ]),
                    _vm._v(" "),
                    _vm.subTitle
                      ? _c("p", { staticClass: "card-category" }, [
                        _vm._v(_vm._s(_vm.subTitle))
                      ])
                      : _vm._e()
                  ])
                ],
                2
              )
              : _vm._e(),
            _vm._v(" "),
            _vm.$slots.default
              ? _c("div", { staticClass: "card-body" }, [_vm._t("default")], 2)
              : _vm._e(),
            _vm._v(" "),
            _vm.$slots["image-bottom"]
              ? _c("div", { staticClass: "card-image" }, [_vm._t("image-bottom")], 2)
              : _vm._e(),
            _vm._v(" "),
            _vm._t("raw-content"),
            _vm._v(" "),
            _vm.$slots.footer
              ? _c(
                "div",
                { staticClass: "card-footer", class: _vm.footerClasses },
                [_vm._t("footer")],
                2
              )
              : _vm._e()
          ],
          2
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/StatsCard.vue?vue&type=template&id=1c8a8b68&":
/*!******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Cards/StatsCard.vue?vue&type=template&id=1c8a8b68& ***!
  \******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c("card", [
          _c("div", [
            _c("div", { staticClass: "row" }, [
              _vm.$slots.header
                ? _c("div", { staticClass: "col-5" }, [_vm._t("header")], 2)
                : _vm._e(),
              _vm._v(" "),
              _vm.$slots.content
                ? _c("div", { staticClass: "col-7" }, [_vm._t("content")], 2)
                : _vm._e()
            ]),
            _vm._v(" "),
            _vm.$slots.footer
              ? _c("div", [_c("hr"), _vm._v(" "), _vm._t("footer")], 2)
              : _vm._e()
          ])
        ])
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CloseButton.vue?vue&type=template&id=1e0edd2f&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/CloseButton.vue?vue&type=template&id=1e0edd2f& ***!
  \**************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "button",
          {
            staticClass: "navbar-toggler",
            attrs: {
              type: "button",
              "data-toggle": "collapse",
              "data-target": "#" + _vm.target,
              "aria-controls": _vm.target,
              "aria-expanded": _vm.expanded,
              "aria-label": "Toggle navigation"
            },
            on: { click: _vm.handleClick }
          },
          [_c("span"), _vm._v(" "), _c("span")]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Inputs/BaseInput.vue?vue&type=template&id=137ff39e&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/Inputs/BaseInput.vue?vue&type=template&id=137ff39e& ***!
  \*******************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "div",
          {
            staticClass: "form-group",
            class: {
              "input-group": _vm.hasIcon,
              "input-group-focus": _vm.focused
            }
          },
          [
            _vm._t("label", [
              _vm.label
                ? _c("label", { staticClass: "control-label" }, [
                  _vm._v("\n      " + _vm._s(_vm.label) + "\n    ")
                ])
                : _vm._e()
            ]),
            _vm._v(" "),
            _vm._t("addonLeft", [
              _vm.addonLeftIcon
                ? _c("span", { staticClass: "input-group-prepend" }, [
                  _c("div", { staticClass: "input-group-text" }, [
                    _c("i", { class: _vm.addonLeftIcon })
                  ])
                ])
                : _vm._e()
            ]),
            _vm._v(" "),
            _vm._t("default", [
              _c(
                "input",
                _vm._g(
                  _vm._b(
                    {
                      staticClass: "form-control",
                      attrs: { "aria-describedby": "addon-right addon-left" },
                      domProps: { value: _vm.value }
                    },
                    "input",
                    _vm.$attrs,
                    false
                  ),
                  _vm.listeners
                )
              )
            ]),
            _vm._v(" "),
            _vm._t("addonRight", [
              _vm.addonRightIcon
                ? _c("span", { staticClass: "input-group-append" }, [
                  _c("div", { staticClass: "input-group-text" }, [
                    _c("i", { class: _vm.addonRightIcon })
                  ])
                ])
                : _vm._e()
            ]),
            _vm._v(" "),
            _vm._t("helperText")
          ],
          2
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/NavbarToggleButton.vue?vue&type=template&id=6395e681&":
/*!*********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/NavbarToggleButton.vue?vue&type=template&id=6395e681& ***!
  \*********************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "button",
          {
            staticClass: "navbar-toggler",
            attrs: {
              type: "button",
              "data-toggle": "collapse",
              "data-target": _vm.target,
              "aria-controls": _vm.target,
              "aria-expanded": _vm.toggled,
              "aria-label": "Toggle navigation"
            }
          },
          [_c("span", { staticClass: "navbar-toggler-icon" })]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=template&id=f7c2893e&":
/*!************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=template&id=f7c2893e& ***!
  \************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          "div",
          { staticClass: "sidebar", attrs: { data: _vm.backgroundColor } },
          [
            _c(
              "div",
              { staticClass: "sidebar-wrapper", attrs: { id: "style-3" } },
              [
                _c("div", { staticClass: "logo" }, [
                  _c(
                    "a",
                    {
                      staticClass: "simple-text logo-mini",
                      attrs: {
                        href: "http://www.creative-tim.com",
                        "aria-label": "sidebar mini logo"
                      }
                    },
                    [
                      _c(
                        "div",
                        {
                          staticClass: "logo-img",
                          class: { "logo-img-rtl": _vm.$rtl.isRTL }
                        },
                        [
                          _c("img", {
                            attrs: {
                              src:
                                "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAAGQCAMAAAC3Ycb+AAACLlBMVEVMaXFBuINBuIM8enI/nnxBuINBuINBuIM8enJBuIM8enJBuINBuINBuIM8enJBuIM8enJBuINBuIM7eXFBuINBuIM8eXFBuINBuIM8eHFBuIM8eXFBuIM8eHBBuIM8eHBBuIM8d3BBuINBuIM8d3BBuINBuINBuIM8dnBBuINBuIM8dnBBuINBuIM7dXBBuINBuIM8dG9BuINBuIM8dG9BuIM8dG9BuINBuIM8c29BuINBuIM7cm5BuINBuIM7cW5BuIM7cW9BuINBuINBuIM7cW5BuINBuINBuIM7b21BuINBuIM6b21BuIM7bm1BuINBuIM7bW1BuINBuIM6bGxBuINBuIM6a2xBuIM6a2xBuINBuIM6amxBuIM6aWtBuINBuIM6aGpBuINBuIM6ZmpBuINBuIM5ZGlBuIM5Y2lBuINBuIM5YWhBuINBuIM5YGdBuIM4XmdBuINBuIM4XGZBuINBuIM4WmVBuIM3WGRBuIM3V2RBuINBuIM3VGNBuIM2UmI2UGFBuIM1TWA1SV41Sl41S141TF81TWA2T2A2UWE2U2I3VWM3WGQ4W2U4Xmc5YGc5YWg5ZGk6Zmo6Z2o6aGo6a2w7bW07bm07cG48c287dnA7eHA8enI8fHI9fnM8gXM9g3Q9hnU9iXY+i3c+jHc+j3g+kXk+lHo/l3o/mXs+m3s/nnw/oH0/o31Apn5BqH5Aqn9BrH9BroBBr4BCsYBBs4FBtoJCt4JBuIP7mHZoAAAAhHRSTlMAAQICAwQHCAgLDQ4QEhIVFhcaGh4hIiUoKissLzEzNDc4Oj4/QERFRkhLTVBTVldaXV5iYmZnaW1vcHV3eHx8gIGDhIeJio+Sk5aZm52foaWmqKyusLS1t7m6u7y/wMLHx8zP0NPW1trc3uLi5Obn6urt7+/y8/T29vf4+vv7/P39/v7L5yYnAAANT0lEQVR42uzdiZ/OVRTH8WM0CxqVZVqMFCqyZKkQolL2FktaVNZkkr3CyHoGUxRCSFFk3yrb+e96qldFzfIsn9/vd67u+y841515zXi+c89XoiiKoiiKoiiKoiiKoiiKoiiKoiiKoiiKoiiKoiiKov+t94y1WyEN/SQx/RoUsvuGod6T2i2GOo+ddbUkZrVCGs4bakutyGRjHVLKi5KQF5VyyFiTc9PdtcpQPzcqZEN7SUT7DQpp/NlQq+76fb5njPWDUt6URLyplGPGeuaP+crfN9T1XQrZ2l0S0H2rQnZdN9T75X9O2NdYp5WyWBKwWCmnjdX3rxFfN9bXSnlScE8qZa+xXv97xnvXG+riNoV82lZgbT9VyLaLhlp/7z9TvmSsb5UyRWBTlPKtsV66acoOyw115QuFbOosqM6bFPL5FUMt73DznEONdVwpcwU1VynHjTX0ljnL5hnq+pcK2d5bQL23K+RL+FfeeWW3TtrTWGeVskxAy5Ry1lg9/z3qq8Y6oJRRghmllAPGevU/s3ZaY6jLOxRSXyWQqnqF7LhsqDWd/jvts8b6XikzBDJDKd8b69kmpq2sM9S1nQpprBFEDfY59M6rhqqrbGreAcY6qZRFgliklJPGGtD0wO8Ya49CGgYKYCCWZe4x1jvNTFy70VAXsH8BJM11m9turG1u5EnGcpXm+s1tJzU7czWc5v6C/RTd0LHU++jI5ba/GGpVdfNTDzcWl+bOLvVCZivlB2MNb3pg52nujh6l3UcP7P+pdG67sLyluR8zFpfmLintQpYohc5tH2158JnG2qeUp0u5j6eVss9YM1uZvCuc5l7CPu9eW178fZSvVcj2S4Za37W12ccZ64hSXi7+Ql5WyhFjjWt19g5LDXXlc4Vs7lx0brtZIXRuu7Rd69MPMZaDNNdvbjskj+nbzDHUja8Usq1PcffRB/urpK/gxwdz2uQz/0PGOqeUFcVdyAqlnDPWQ/kd4BVjfaOUMcXcxxilfGOsV/I8QadPDMU9UKivyjK3bYRz20865XuG0cY6qpQZWea2R401Ou8zVPhNc+8v9D7ux749d14zVF1F/qfob6xTSll0++S2/Qs5xtvG2quQhoFZ5bb044O3CjrHA37T3LYFPT7gctsLhtr4QGFfWROMdVgpEws5xkSlHDbWBClM9UpD/Yp9pLWpYwG5Lff44FdDrayWAg0zFpfmvpv/Id5VCp3bDis8QlhoKPCBwsP5nuFhLIyhHx8svEMK9oixzihlSfq57RljPSJFmG6s/UoZkd8BRihlv7GmSzG6rjNU2mmu39x2XVcpygvG+k4pr+Uz/mtKoXPb56U47T4y1FXsbe7mmjweH2C57Rfw44OP2kmRBhnrhFIWtD78AqWcMNagpgcOO83t1+rSuMBz26Y96Hbd3IrUctsGOLfd8qCUYKqxDirluZYHf04pB401VUpxz8eG4tLcDe3DXBr38T1SkpHGOqaUWS2NPUspdG47UkpT8YGhrmEPFBq7NT91N+wbcRec235QISV63Fhcmrs4jaVxp4z1uJTsDWNxae7g5kYejP0yR+e2b0jp7vvMUMmvm/O7NO6z+wQw3ljcurmJoeW244VwJ7xuDkxz725q3rvd5ra5pXGIp4z1o1LmJvv44EdjPSWMsvmGAtPc3iEtjZtfJpBexkp03RyX29JL43oJZpqxuHVzI8LJbacJpwu8bo5Lc+urknp8QOe2a7oIaKyxEktzudz2O2ONFVLlh4a6yj1QqAljadyHlYJ6wlg/KWVBMrntT8Z6QlhtgigP81z2RQuiPIx7fAAvjcuVfeECKA/zuzRusvD8l4f5zW1zZV8JcF8e5r3si+Z33dzW7mGUfdGcl4dxuS29NK6vJMR1eVgIZV80z+VhfnPbXNlXYhyXh4VR9kXDy8O4NJfLbeGlcVRu+48wysMw9NK4oZIkv+VhFDq3nYfltn8JpTwMQue2PSVhfsvDEMmXfdH8locR0ij7ovktDwOkUfZF81seVjo6t62Dc1uRsMrDSkYvjRsgqXBbHqaBlH3R/JaH+cptNyaQ24ZWHuYqt50kafFbHhZK2RfNb3mYo6VxwyU9ftPc2z+3Da08zE1u+6ikym95WCBlXzS/5WE+Hh/kyr5S5rc8zMXSuHGSNr/lYR5y26WJ5rahlYc5yG2HSPr8rpsLe2lc08IuDwul7IvmtzwskLIvmt/ysFDKvmh+y8MyXRo3WrLitzwslLIvmt/ysAxz2/6SIbflYdk9PnhLsuS3PCyUsi+a3/KwjJbGTZBs+S0Py2Zp3MoUc9vQysMyyW2HSdb8lodl8fggV/aVOb/lYaGUfdH8loelvjRuunjgtzws7dx2Xeq5bWjlYSnnts+LD37Lw0Ip+6L5LQ8LpOyLFmaae3vktqGVh4VS9kXzWx4WSNkXzW95WFpL43JlX674LQ9LKbcdKb74LQ8LpeyL5rc8LJSyr9/Yu0NrqaIgiKIIYiEQwiAkFBqDIwHUZIfA4v7ue6tfzUmjVvfWxeJhJ3ZbgX3pcvGw+adxBvvS5eJh47utwb50uXjY9G47+zTuiXjYEuxLl4uHze62DvvS5eJho0/jIPaly8XDBndbiX3pcvGwud3WYl+6XDxsCfaly8XDpp7GaexLl4uHLcG+dLl42L9+vGwe+9Ll4mETT+MmsC9dLh428DRuAvvS5eJhfredwb50uXgYPz6Ywb50ue/mdj+NeyAepp/GjWFfulA8TO+2c9iXLhMP07vtJPali8TDNmFfukQ8TD+NS91t1+Bh+mncLPaly8PD9G47jX3p4vAwvduOY1+6MDxsH/aly8LDNmJfuig8bCP2pUvCw/jTuPDdNh4P00/jDmFfuhg8bCv2pUvBw/Ruew770oXgYXq3PYd96TLwsM3Yly4CD9O77UnsS5ew5rbutrF4mN5tD2Nfuut42HbsS3cbD9PHB+exL91lPEw/jTuPfenu4mF6t72Bfemu4mF6t72Bfeluvpt78tO4lXgYfhp3C/vSXcPDnoJ96W7hYfr44B72pbuEh+mncfewL90dPIzvtnFP43LwsN83dtur2JfuAh6mjw/uYl+683jY07Av3XE8TD+Nu4196U7jYfpp3H3sS3cYD9O77X3sS3cWD9PHBwnYl+4oHvZI7Et3EA/TT+MysC/dOTxM77Yp2JfuGB6mn8alYF+6U3jYc7Ev3SE87LnYl+7MmvvebbPwMH18kIV96Q7gYc/GvnTzeJjebdOwL53Gw35N77Zp2JduGg97PvalG8bDCrAv3SgepnfbROxLN4mH6adxmdiXTuNhP+d220zsS6ffzf35PrXb7noaF4iHtWBfuik8TO+2udiXbggP00/jgrEv3Qgepp/GJWNfugk8TO+22diXbgAP07ttNval83hYG/al43hYG/bF03gYLh/70mk8zLYB+9JpPIy2AfvSaTxMtgP70mk8DLYD+9Lpd3Ou3U/jcvAw1hrsS6fxMNQe7Eun8TDTJuxLp/Ew0ibsS6fXXFHLbnsGDwPtwr50Gg/7eNuwL53Gwz7cOuxLp/GwOuxLp/GwPuxLp/GwOuxLp/GwPuxLp/GwPuxLp/GwOuxLp/GwPuxLp/GwOuxLp/GwPuxLp/GwOuxLl7Dmtu62/+/L63rLsS+dxsPqsC+dxsP6sC+dxsPqsC+dxsP6sC+dxsPqsC+dfjf3fhr3KQwP68O+dBoPq8O+dBoP68O+dBoPq8O+dBoP68O+dBoP68O+dN9ex3sW9qXTeFgf9qXTeFgd9qXTeFgf9qXTeFgd9qX7jPGwPuxLp/GwPuxLp/GwOuxLp/GwPuxL9/V1qKdiXzqNh/VhXzqNh9VhX7oza+57t72Hh/VhXzqNh9VhXzqNh/VhXzqNh9VhXzqNh/VhXzqNh/VhXzqNh9VhXzqNh/VhXzqNh9VhX7q5d3PdT+Ny8LA67Eun8bA+7Eun8bA+7Eun8bA67Eun8bA+7Eun8bA67Eun8bA+7Eun8bA+7EuH8bA+7Etn8bBG7EtH8bC/7d3hRgNwAEVxS20y+9A0kkzM+pBSIkVKJsrIUiIRIyVLSSmTMnryHmL3w+F/fq9xuafE2FdaMh5WZuwrLRgPKzP2lZa7m/M0LiMWDys29pUWioeVG/tKy8TDSo59pUXiYSXHvtISa667bVIgHlZ27Ctt+nhY6bGvtKnjYcXHvtIujH2xNMfGvliOjH2x1EbGvlg2jX3B3Bn7YlmZGPti6Rv7Yml8GPti2Tf2xTL36G7LsmbsC+ba2BdL68fYF8uJsS+W+quxL5YdY18slaGncSyrxr5gBsa+WJpfxr5YDo19sVRHxr5YNox9wdwa+2JZnhj7Yjkz9sXSeDf2xbJn7Itl9sHYF0vX2BfMlbEvlta3sS+WnrEvlvkXY18s28a+WCpDd1uW9p+xL5ZzY18sC5/GvlgOjH2xVJ+MfbGsG/uCuTH2xbL0a+yL5dTYF0v9zdM4ll1jXywz98a+WDrGvmAujX2xLI6NfbEcG/tiqT0b+2LZMvYlSZIkSZIkSZIkSZIkSZIkKekfnCgLkz94A5oAAAAASUVORK5CYII=",
                              alt: ""
                            }
                          })
                        ]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "a",
                    {
                      staticClass: "simple-text logo-normal",
                      attrs: { href: "http://www.creative-tim.com" }
                    },
                    [_vm._v("\n        " + _vm._s(_vm.title) + "\n      ")]
                  )
                ]),
                _vm._v(" "),
                _vm._t("default"),
                _vm._v(" "),
                _c(
                  "ul",
                  { staticClass: "nav" },
                  [
                    _vm._t(
                      "links",
                      _vm._l(_vm.sidebarLinks, function (link, index) {
                        return _c("sidebar-link", {
                          key: index,
                          attrs: { to: link.path, name: link.name, icon: link.icon }
                        })
                      })
                    )
                  ],
                  2
                )
              ],
              2
            )
          ]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=template&id=b93be3ca&":
/*!****************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=template&id=b93be3ca& ***!
  \****************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c(
          _vm.tag,
          _vm._b(
            {
              tag: "component",
              staticClass: "nav-item",
              attrs: { tag: "li" },
              nativeOn: {
                click: function ($event) {
                  return _vm.hideSidebar($event)
                }
              }
            },
            "component",
            _vm.$attrs,
            false
          ),
          [
            _c(
              "a",
              { staticClass: "nav-link" },
              [
                _vm._t("default", [
                  _vm.icon ? _c("i", { class: _vm.icon }) : _vm._e(),
                  _vm._v(" "),
                  _c("p", [_vm._v(_vm._s(_vm.name))])
                ])
              ],
              2
            )
          ]
        )
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard.vue?vue&type=template&id=82704d4a&":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Dashboard.vue?vue&type=template&id=82704d4a& ***!
  \*******************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c("div", [
          _c("div", { staticClass: "row" }, [
            _c(
              "div",
              { staticClass: "col-12" },
              [
                _c(
                  "card",
                  { attrs: { type: "chart" } },
                  [
                    _c("template", { slot: "header" }, [
                      _c("div", { staticClass: "row" }, [
                        _c(
                          "div",
                          {
                            staticClass: "col-sm-6",
                            class: _vm.isRTL ? "text-right" : "text-left"
                          },
                          [
                            _c("h5", { staticClass: "card-category" }, [
                              _vm._v(
                                "\n                " +
                                _vm._s(_vm.$t("dashboard.totalShipments")) +
                                "\n              "
                              )
                            ]),
                            _vm._v(" "),
                            _c("h2", { staticClass: "card-title" }, [
                              _vm._v(_vm._s(_vm.$t("dashboard.performance")))
                            ])
                          ]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-sm-6" }, [
                          _c(
                            "div",
                            {
                              staticClass: "btn-group btn-group-toggle",
                              class: _vm.isRTL ? "float-left" : "float-right",
                              attrs: { "data-toggle": "buttons" }
                            },
                            _vm._l(_vm.bigLineChartCategories, function (
                              option,
                              index
                            ) {
                              return _c(
                                "label",
                                {
                                  key: option,
                                  staticClass: "btn btn-sm btn-primary btn-simple",
                                  class: {
                                    active: _vm.bigLineChart.activeIndex === index
                                  },
                                  attrs: { id: index }
                                },
                                [
                                  _c("input", {
                                    attrs: {
                                      type: "radio",
                                      name: "options",
                                      autocomplete: "off"
                                    },
                                    domProps: {
                                      checked: _vm.bigLineChart.activeIndex === index
                                    },
                                    on: {
                                      click: function ($event) {
                                        return _vm.initBigChart(index)
                                      }
                                    }
                                  }),
                                  _vm._v(
                                    "\n                  " +
                                    _vm._s(option) +
                                    "\n                "
                                  )
                                ]
                              )
                            }),
                            0
                          )
                        ])
                      ])
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "chart-area" },
                      [
                        _c("line-chart", {
                          ref: "bigChart",
                          staticStyle: { height: "100%" },
                          attrs: {
                            "chart-id": "big-line-chart",
                            "chart-data": _vm.bigLineChart.chartData,
                            "gradient-colors": _vm.bigLineChart.gradientColors,
                            "gradient-stops": _vm.bigLineChart.gradientStops,
                            "extra-options": _vm.bigLineChart.extraOptions
                          }
                        })
                      ],
                      1
                    )
                  ],
                  2
                )
              ],
              1
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "row" }, [
            _c(
              "div",
              { staticClass: "col-lg-4", class: { "text-right": _vm.isRTL } },
              [
                _c(
                  "card",
                  { attrs: { type: "chart" } },
                  [
                    _c("template", { slot: "header" }, [
                      _c("h5", { staticClass: "card-category" }, [
                        _vm._v(_vm._s(_vm.$t("dashboard.totalShipments")))
                      ]),
                      _vm._v(" "),
                      _c("h3", { staticClass: "card-title" }, [
                        _c("i", {
                          staticClass: "tim-icons icon-bell-55 text-primary "
                        }),
                        _vm._v(" 763,215\n          ")
                      ])
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "chart-area" },
                      [
                        _c("line-chart", {
                          staticStyle: { height: "100%" },
                          attrs: {
                            "chart-id": "purple-line-chart",
                            "chart-data": _vm.purpleLineChart.chartData,
                            "gradient-colors": _vm.purpleLineChart.gradientColors,
                            "gradient-stops": _vm.purpleLineChart.gradientStops,
                            "extra-options": _vm.purpleLineChart.extraOptions
                          }
                        })
                      ],
                      1
                    )
                  ],
                  2
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "col-lg-4", class: { "text-right": _vm.isRTL } },
              [
                _c(
                  "card",
                  { attrs: { type: "chart" } },
                  [
                    _c("template", { slot: "header" }, [
                      _c("h5", { staticClass: "card-category" }, [
                        _vm._v(_vm._s(_vm.$t("dashboard.dailySales")))
                      ]),
                      _vm._v(" "),
                      _c("h3", { staticClass: "card-title" }, [
                        _c("i", {
                          staticClass: "tim-icons icon-delivery-fast text-info "
                        }),
                        _vm._v(" 3,500€\n          ")
                      ])
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "chart-area" },
                      [
                        _c("bar-chart", {
                          staticStyle: { height: "100%" },
                          attrs: {
                            "chart-id": "blue-bar-chart",
                            "chart-data": _vm.blueBarChart.chartData,
                            "gradient-stops": _vm.blueBarChart.gradientStops,
                            "extra-options": _vm.blueBarChart.extraOptions
                          }
                        })
                      ],
                      1
                    )
                  ],
                  2
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "col-lg-4", class: { "text-right": _vm.isRTL } },
              [
                _c(
                  "card",
                  { attrs: { type: "chart" } },
                  [
                    _c("template", { slot: "header" }, [
                      _c("h5", { staticClass: "card-category" }, [
                        _vm._v(_vm._s(_vm.$t("dashboard.completedTasks")))
                      ]),
                      _vm._v(" "),
                      _c("h3", { staticClass: "card-title" }, [
                        _c("i", { staticClass: "tim-icons icon-send text-success " }),
                        _vm._v(" 12,100K\n          ")
                      ])
                    ]),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "chart-area" },
                      [
                        _c("line-chart", {
                          staticStyle: { height: "100%" },
                          attrs: {
                            "chart-id": "green-line-chart",
                            "chart-data": _vm.greenLineChart.chartData,
                            "gradient-stops": _vm.greenLineChart.gradientStops,
                            "extra-options": _vm.greenLineChart.extraOptions
                          }
                        })
                      ],
                      1
                    )
                  ],
                  2
                )
              ],
              1
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "row" }, [
            _c(
              "div",
              { staticClass: "col-lg-6 col-md-12" },
              [
                _c(
                  "card",
                  {
                    attrs: {
                      type: "tasks",
                      "header-classes": { "text-right": _vm.isRTL }
                    }
                  },
                  [
                    _c(
                      "template",
                      { slot: "header" },
                      [
                        _c("h6", { staticClass: "title d-inline" }, [
                          _vm._v(
                            "\n            " +
                            _vm._s(_vm.$t("dashboard.tasks", { count: 5 })) +
                            "\n          "
                          )
                        ]),
                        _vm._v(" "),
                        _c("p", { staticClass: "card-category d-inline" }, [
                          _vm._v(_vm._s(_vm.$t("dashboard.today")))
                        ]),
                        _vm._v(" "),
                        _c(
                          "base-dropdown",
                          {
                            class: { "float-left": _vm.isRTL },
                            attrs: {
                              "menu-on-right": "",
                              tag: "div",
                              "title-classes": "btn btn-link btn-icon",
                              "aria-label": "Settings menu"
                            }
                          },
                          [
                            _c("i", {
                              staticClass: "tim-icons icon-settings-gear-63",
                              attrs: { slot: "title" },
                              slot: "title"
                            }),
                            _vm._v(" "),
                            _c(
                              "a",
                              {
                                staticClass: "dropdown-item",
                                attrs: { href: "#pablo" }
                              },
                              [_vm._v(_vm._s(_vm.$t("dashboard.dropdown.action")))]
                            ),
                            _vm._v(" "),
                            _c(
                              "a",
                              {
                                staticClass: "dropdown-item",
                                attrs: { href: "#pablo" }
                              },
                              [
                                _vm._v(
                                  _vm._s(_vm.$t("dashboard.dropdown.anotherAction"))
                                )
                              ]
                            ),
                            _vm._v(" "),
                            _c(
                              "a",
                              {
                                staticClass: "dropdown-item",
                                attrs: { href: "#pablo" }
                              },
                              [
                                _vm._v(
                                  _vm._s(_vm.$t("dashboard.dropdown.somethingElse"))
                                )
                              ]
                            )
                          ]
                        )
                      ],
                      1
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "table-full-width table-responsive" },
                      [_c("task-list")],
                      1
                    )
                  ],
                  2
                )
              ],
              1
            ),
            _vm._v(" "),
            _c(
              "div",
              { staticClass: "col-lg-6 col-md-12" },
              [
                _c(
                  "card",
                  {
                    staticClass: "card",
                    attrs: { "header-classes": { "text-right": _vm.isRTL } }
                  },
                  [
                    _c(
                      "h4",
                      {
                        staticClass: "card-title",
                        attrs: { slot: "header" },
                        slot: "header"
                      },
                      [
                        _vm._v(
                          "\n          " +
                          _vm._s(_vm.$t("dashboard.simpleTable")) +
                          "\n        "
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c(
                      "div",
                      { staticClass: "table-responsive" },
                      [_c("user-table")],
                      1
                    )
                  ]
                )
              ],
              1
            )
          ])
        ])
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/TaskList.vue?vue&type=template&id=107d1972&":
/*!****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Dashboard/TaskList.vue?vue&type=template&id=107d1972& ***!
  \****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c("base-table", {
          attrs: { data: _vm.tableData, "thead-classes": "text-primary" },
          scopedSlots: _vm._u([
            {
              key: "default",
              fn: function (ref) {
                var row = ref.row
                return [
                  _c(
                    "td",
                    [
                      _c("base-checkbox", {
                        model: {
                          value: row.done,
                          callback: function ($$v) {
                            _vm.$set(row, "done", $$v)
                          },
                          expression: "row.done"
                        }
                      })
                    ],
                    1
                  ),
                  _vm._v(" "),
                  _c("td", [
                    _c("p", { staticClass: "title" }, [_vm._v(_vm._s(row.title))]),
                    _vm._v(" "),
                    _c("p", { staticClass: "text-muted" }, [
                      _vm._v(_vm._s(row.description))
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "td",
                    { staticClass: "td-actions text-right" },
                    [
                      _c(
                        "base-button",
                        { attrs: { type: "link", "aria-label": "edit button" } },
                        [_c("i", { staticClass: "tim-icons icon-pencil" })]
                      )
                    ],
                    1
                  )
                ]
              }
            }
          ])
        })
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/UserTable.vue?vue&type=template&id=5004ba22&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/pages/Dashboard/UserTable.vue?vue&type=template&id=5004ba22& ***!
  \*****************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function () { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return staticRenderFns; });
      var render = function () {
        var _vm = this
        var _h = _vm.$createElement
        var _c = _vm._self._c || _h
        return _c("base-table", {
          attrs: {
            data: _vm.table.data,
            columns: _vm.table.columns,
            "thead-classes": "text-primary"
          }
        })
      }
      var staticRenderFns = []
      render._withStripped = true



      /***/
    }),

/***/ "./resources/js/components/BaseAlert.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/BaseAlert.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseAlert_vue_vue_type_template_id_6b9f4ca0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseAlert.vue?vue&type=template&id=6b9f4ca0& */ "./resources/js/components/BaseAlert.vue?vue&type=template&id=6b9f4ca0&");
/* harmony import */ var _BaseAlert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseAlert.vue?vue&type=script&lang=js& */ "./resources/js/components/BaseAlert.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseAlert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseAlert_vue_vue_type_template_id_6b9f4ca0___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseAlert_vue_vue_type_template_id_6b9f4ca0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/BaseAlert.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/BaseAlert.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/BaseAlert.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseAlert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseAlert.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseAlert.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseAlert_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/BaseAlert.vue?vue&type=template&id=6b9f4ca0&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/BaseAlert.vue?vue&type=template&id=6b9f4ca0& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseAlert_vue_vue_type_template_id_6b9f4ca0___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseAlert.vue?vue&type=template&id=6b9f4ca0& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseAlert.vue?vue&type=template&id=6b9f4ca0&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseAlert_vue_vue_type_template_id_6b9f4ca0___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseAlert_vue_vue_type_template_id_6b9f4ca0___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/BaseButton.vue":
/*!************************************************!*\
  !*** ./resources/js/components/BaseButton.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseButton_vue_vue_type_template_id_21673c8e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseButton.vue?vue&type=template&id=21673c8e& */ "./resources/js/components/BaseButton.vue?vue&type=template&id=21673c8e&");
/* harmony import */ var _BaseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseButton.vue?vue&type=script&lang=js& */ "./resources/js/components/BaseButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseButton_vue_vue_type_template_id_21673c8e___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseButton_vue_vue_type_template_id_21673c8e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/BaseButton.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/BaseButton.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/BaseButton.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseButton.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/BaseButton.vue?vue&type=template&id=21673c8e&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/BaseButton.vue?vue&type=template&id=21673c8e& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseButton_vue_vue_type_template_id_21673c8e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseButton.vue?vue&type=template&id=21673c8e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseButton.vue?vue&type=template&id=21673c8e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseButton_vue_vue_type_template_id_21673c8e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseButton_vue_vue_type_template_id_21673c8e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/BaseCheckbox.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/BaseCheckbox.vue ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseCheckbox_vue_vue_type_template_id_085d9f9f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseCheckbox.vue?vue&type=template&id=085d9f9f& */ "./resources/js/components/BaseCheckbox.vue?vue&type=template&id=085d9f9f&");
/* harmony import */ var _BaseCheckbox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseCheckbox.vue?vue&type=script&lang=js& */ "./resources/js/components/BaseCheckbox.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseCheckbox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseCheckbox_vue_vue_type_template_id_085d9f9f___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseCheckbox_vue_vue_type_template_id_085d9f9f___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/BaseCheckbox.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/BaseCheckbox.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/BaseCheckbox.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseCheckbox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseCheckbox.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseCheckbox.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseCheckbox_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/BaseCheckbox.vue?vue&type=template&id=085d9f9f&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/BaseCheckbox.vue?vue&type=template&id=085d9f9f& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseCheckbox_vue_vue_type_template_id_085d9f9f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseCheckbox.vue?vue&type=template&id=085d9f9f& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseCheckbox.vue?vue&type=template&id=085d9f9f&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseCheckbox_vue_vue_type_template_id_085d9f9f___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseCheckbox_vue_vue_type_template_id_085d9f9f___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/BaseDropdown.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/BaseDropdown.vue ***!
  \**************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseDropdown_vue_vue_type_template_id_4e0e1e26___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseDropdown.vue?vue&type=template&id=4e0e1e26& */ "./resources/js/components/BaseDropdown.vue?vue&type=template&id=4e0e1e26&");
/* harmony import */ var _BaseDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseDropdown.vue?vue&type=script&lang=js& */ "./resources/js/components/BaseDropdown.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseDropdown_vue_vue_type_template_id_4e0e1e26___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseDropdown_vue_vue_type_template_id_4e0e1e26___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/BaseDropdown.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/BaseDropdown.vue?vue&type=script&lang=js&":
/*!***************************************************************************!*\
  !*** ./resources/js/components/BaseDropdown.vue?vue&type=script&lang=js& ***!
  \***************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseDropdown.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseDropdown.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/BaseDropdown.vue?vue&type=template&id=4e0e1e26&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/BaseDropdown.vue?vue&type=template&id=4e0e1e26& ***!
  \*********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseDropdown_vue_vue_type_template_id_4e0e1e26___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseDropdown.vue?vue&type=template&id=4e0e1e26& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseDropdown.vue?vue&type=template&id=4e0e1e26&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseDropdown_vue_vue_type_template_id_4e0e1e26___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseDropdown_vue_vue_type_template_id_4e0e1e26___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/BaseNav.vue":
/*!*********************************************!*\
  !*** ./resources/js/components/BaseNav.vue ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseNav_vue_vue_type_template_id_70760612___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseNav.vue?vue&type=template&id=70760612& */ "./resources/js/components/BaseNav.vue?vue&type=template&id=70760612&");
/* harmony import */ var _BaseNav_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseNav.vue?vue&type=script&lang=js& */ "./resources/js/components/BaseNav.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseNav_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseNav_vue_vue_type_template_id_70760612___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseNav_vue_vue_type_template_id_70760612___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/BaseNav.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/BaseNav.vue?vue&type=script&lang=js&":
/*!**********************************************************************!*\
  !*** ./resources/js/components/BaseNav.vue?vue&type=script&lang=js& ***!
  \**********************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseNav_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseNav.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseNav.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseNav_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/BaseNav.vue?vue&type=template&id=70760612&":
/*!****************************************************************************!*\
  !*** ./resources/js/components/BaseNav.vue?vue&type=template&id=70760612& ***!
  \****************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseNav_vue_vue_type_template_id_70760612___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseNav.vue?vue&type=template&id=70760612& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseNav.vue?vue&type=template&id=70760612&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseNav_vue_vue_type_template_id_70760612___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseNav_vue_vue_type_template_id_70760612___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/BaseRadio.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/BaseRadio.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseRadio_vue_vue_type_template_id_30f30662___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseRadio.vue?vue&type=template&id=30f30662& */ "./resources/js/components/BaseRadio.vue?vue&type=template&id=30f30662&");
/* harmony import */ var _BaseRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseRadio.vue?vue&type=script&lang=js& */ "./resources/js/components/BaseRadio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseRadio_vue_vue_type_template_id_30f30662___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseRadio_vue_vue_type_template_id_30f30662___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/BaseRadio.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/BaseRadio.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/BaseRadio.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseRadio.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseRadio.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseRadio_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/BaseRadio.vue?vue&type=template&id=30f30662&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/BaseRadio.vue?vue&type=template&id=30f30662& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseRadio_vue_vue_type_template_id_30f30662___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseRadio.vue?vue&type=template&id=30f30662& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseRadio.vue?vue&type=template&id=30f30662&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseRadio_vue_vue_type_template_id_30f30662___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseRadio_vue_vue_type_template_id_30f30662___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/BaseTable.vue":
/*!***********************************************!*\
  !*** ./resources/js/components/BaseTable.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseTable_vue_vue_type_template_id_aa56f9bc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseTable.vue?vue&type=template&id=aa56f9bc& */ "./resources/js/components/BaseTable.vue?vue&type=template&id=aa56f9bc&");
/* harmony import */ var _BaseTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseTable.vue?vue&type=script&lang=js& */ "./resources/js/components/BaseTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseTable_vue_vue_type_template_id_aa56f9bc___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseTable_vue_vue_type_template_id_aa56f9bc___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/BaseTable.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/BaseTable.vue?vue&type=script&lang=js&":
/*!************************************************************************!*\
  !*** ./resources/js/components/BaseTable.vue?vue&type=script&lang=js& ***!
  \************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseTable.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/BaseTable.vue?vue&type=template&id=aa56f9bc&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/BaseTable.vue?vue&type=template&id=aa56f9bc& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseTable_vue_vue_type_template_id_aa56f9bc___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./BaseTable.vue?vue&type=template&id=aa56f9bc& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/BaseTable.vue?vue&type=template&id=aa56f9bc&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseTable_vue_vue_type_template_id_aa56f9bc___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseTable_vue_vue_type_template_id_aa56f9bc___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/Cards/Card.vue":
/*!************************************************!*\
  !*** ./resources/js/components/Cards/Card.vue ***!
  \************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Card_vue_vue_type_template_id_592ec5f2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Card.vue?vue&type=template&id=592ec5f2& */ "./resources/js/components/Cards/Card.vue?vue&type=template&id=592ec5f2&");
/* harmony import */ var _Card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Card.vue?vue&type=script&lang=js& */ "./resources/js/components/Cards/Card.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _Card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _Card_vue_vue_type_template_id_592ec5f2___WEBPACK_IMPORTED_MODULE_0__["render"],
        _Card_vue_vue_type_template_id_592ec5f2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/Cards/Card.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/Cards/Card.vue?vue&type=script&lang=js&":
/*!*************************************************************************!*\
  !*** ./resources/js/components/Cards/Card.vue?vue&type=script&lang=js& ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./Card.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/Card.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Card_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/Cards/Card.vue?vue&type=template&id=592ec5f2&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/Cards/Card.vue?vue&type=template&id=592ec5f2& ***!
  \*******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Card_vue_vue_type_template_id_592ec5f2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./Card.vue?vue&type=template&id=592ec5f2& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/Card.vue?vue&type=template&id=592ec5f2&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Card_vue_vue_type_template_id_592ec5f2___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Card_vue_vue_type_template_id_592ec5f2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/Cards/StatsCard.vue":
/*!*****************************************************!*\
  !*** ./resources/js/components/Cards/StatsCard.vue ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _StatsCard_vue_vue_type_template_id_1c8a8b68___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./StatsCard.vue?vue&type=template&id=1c8a8b68& */ "./resources/js/components/Cards/StatsCard.vue?vue&type=template&id=1c8a8b68&");
/* harmony import */ var _StatsCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./StatsCard.vue?vue&type=script&lang=js& */ "./resources/js/components/Cards/StatsCard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _StatsCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _StatsCard_vue_vue_type_template_id_1c8a8b68___WEBPACK_IMPORTED_MODULE_0__["render"],
        _StatsCard_vue_vue_type_template_id_1c8a8b68___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/Cards/StatsCard.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/Cards/StatsCard.vue?vue&type=script&lang=js&":
/*!******************************************************************************!*\
  !*** ./resources/js/components/Cards/StatsCard.vue?vue&type=script&lang=js& ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StatsCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./StatsCard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/StatsCard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_StatsCard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/Cards/StatsCard.vue?vue&type=template&id=1c8a8b68&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/Cards/StatsCard.vue?vue&type=template&id=1c8a8b68& ***!
  \************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StatsCard_vue_vue_type_template_id_1c8a8b68___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./StatsCard.vue?vue&type=template&id=1c8a8b68& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Cards/StatsCard.vue?vue&type=template&id=1c8a8b68&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StatsCard_vue_vue_type_template_id_1c8a8b68___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_StatsCard_vue_vue_type_template_id_1c8a8b68___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/Charts/BarChart.js":
/*!****************************************************!*\
  !*** ./resources/js/components/Charts/BarChart.js ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_chartjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-chartjs */ "./node_modules/vue-chartjs/es/index.js");

/* harmony default export */ __webpack_exports__["default"] = ({
        name: 'bar-chart',
        "extends": vue_chartjs__WEBPACK_IMPORTED_MODULE_0__["Bar"],
        mixins: [vue_chartjs__WEBPACK_IMPORTED_MODULE_0__["mixins"].reactiveProp],
        props: {
          extraOptions: Object,
          gradientColors: {
            type: Array,
            "default": function _default() {
              return ['rgba(72,72,176,0.2)', 'rgba(72,72,176,0.0)', 'rgba(119,52,169,0)'];
            },
            validator: function validator(val) {
              return val.length > 2;
            }
          },
          gradientStops: {
            type: Array,
            "default": function _default() {
              return [1, 0.4, 0];
            },
            validator: function validator(val) {
              return val.length > 2;
            }
          }
        },
        data: function data: function() {
          return {
            ctx: null
          };
        },
        methods: {
          updateGradients: function updateGradients(chartData) {
            if (!chartData) return;
            var ctx = this.ctx || document.getElementById(this.chartId).getContext('2d');
            var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
            gradientStroke.addColorStop(this.gradientStops[0], this.gradientColors[0]);
            gradientStroke.addColorStop(this.gradientStops[1], this.gradientColors[1]);
            gradientStroke.addColorStop(this.gradientStops[2], this.gradientColors[2]);
            chartData.datasets.forEach(function (set) {
              set.backgroundColor = gradientStroke;
            });
          }
        },
        mounted: function mounted: function() {
          var _this = this;

          this.$watch('chartData', function (newVal, oldVal) {
            _this.updateGradients(newVal);

            if (!oldVal) {
              _this.renderChart(_this.chartData, _this.extraOptions);
            }
          }, {
            immediate: true
          });
        }
      });

      /***/
    }),

/***/ "./resources/js/components/Charts/LineChart.js":
/*!*****************************************************!*\
  !*** ./resources/js/components/Charts/LineChart.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue_chartjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue-chartjs */ "./node_modules/vue-chartjs/es/index.js");

/* harmony default export */ __webpack_exports__["default"] = ({
        name: 'line-chart',
        "extends": vue_chartjs__WEBPACK_IMPORTED_MODULE_0__["Line"],
        mixins: [vue_chartjs__WEBPACK_IMPORTED_MODULE_0__["mixins"].reactiveProp],
        props: {
          extraOptions: Object,
          gradientColors: {
            type: Array,
            "default": function _default() {
              return ['rgba(72,72,176,0.2)', 'rgba(72,72,176,0.0)', 'rgba(119,52,169,0)'];
            },
            validator: function validator(val) {
              return val.length > 2;
            }
          },
          gradientStops: {
            type: Array,
            "default": function _default() {
              return [1, 0.4, 0];
            },
            validator: function validator(val) {
              return val.length > 2;
            }
          }
        },
        data: function data: function() {
          return {
            ctx: null
          };
        },
        methods: {
          updateGradients: function updateGradients(chartData) {
            if (!chartData) return;
            var ctx = this.ctx || document.getElementById(this.chartId).getContext('2d');
            var gradientStroke = ctx.createLinearGradient(0, 230, 0, 50);
            gradientStroke.addColorStop(this.gradientStops[0], this.gradientColors[0]);
            gradientStroke.addColorStop(this.gradientStops[1], this.gradientColors[1]);
            gradientStroke.addColorStop(this.gradientStops[2], this.gradientColors[2]);
            chartData.datasets.forEach(function (set) {
              set.backgroundColor = gradientStroke;
            });
          }
        },
        mounted: function mounted: function() {
          var _this = this;

          this.$watch('chartData', function (newVal, oldVal) {
            _this.updateGradients(_this.chartData);

            if (!oldVal) {
              _this.renderChart(_this.chartData, _this.extraOptions);
            }
          }, {
            immediate: true
          });
        }
      });

      /***/
    }),

/***/ "./resources/js/components/Charts/config.js":
/*!**************************************************!*\
  !*** ./resources/js/components/Charts/config.js ***!
  \**************************************************/
/*! exports provided: basicOptions, blueChartOptions, purpleChartOptions, orangeChartOptions, greenChartOptions, barChartOptions */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "basicOptions", function () { return basicOptions; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "blueChartOptions", function () { return blueChartOptions; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "purpleChartOptions", function () { return purpleChartOptions; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "orangeChartOptions", function () { return orangeChartOptions; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "greenChartOptions", function () { return greenChartOptions; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "barChartOptions", function () { return barChartOptions; });
      function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

      function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

      function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

      var basicOptions = {
        maintainAspectRatio: false,
        legend: {
          display: false
        },
        responsive: true
      };
      var blueChartOptions = _objectSpread({}, basicOptions, {
        tooltips: {
          backgroundColor: '#f5f5f5',
          titleFontColor: '#333',
          bodyFontColor: '#666',
          bodySpacing: 4,
          xPadding: 12,
          mode: "nearest",
          intersect: 0,
          position: "nearest"
        },
        scales: {
          yAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(29,140,248,0.0)',
              zeroLineColor: "transparent"
            },
            ticks: {
              suggestedMin: 60,
              suggestedMax: 125,
              padding: 20,
              fontColor: "#2380f7"
            }
          }],
          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(29,140,248,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              padding: 20,
              fontColor: "#2380f7"
            }
          }]
        }
      });
      var purpleChartOptions = _objectSpread({}, basicOptions, {
        tooltips: {
          backgroundColor: '#f5f5f5',
          titleFontColor: '#333',
          bodyFontColor: '#666',
          bodySpacing: 4,
          xPadding: 12,
          mode: "nearest",
          intersect: 0,
          position: "nearest"
        },
        scales: {
          yAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(29,140,248,0.0)',
              zeroLineColor: "transparent"
            },
            ticks: {
              suggestedMin: 60,
              suggestedMax: 125,
              padding: 20,
              fontColor: "#9a9a9a"
            }
          }],
          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(225,78,202,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              padding: 20,
              fontColor: "#9a9a9a"
            }
          }]
        }
      });
      var orangeChartOptions = _objectSpread({}, basicOptions, {
        tooltips: {
          backgroundColor: '#f5f5f5',
          titleFontColor: '#333',
          bodyFontColor: '#666',
          bodySpacing: 4,
          xPadding: 12,
          mode: "nearest",
          intersect: 0,
          position: "nearest"
        },
        scales: {
          yAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(29,140,248,0.0)',
              zeroLineColor: "transparent"
            },
            ticks: {
              suggestedMin: 50,
              suggestedMax: 110,
              padding: 20,
              fontColor: "#ff8a76"
            }
          }],
          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(220,53,69,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              padding: 20,
              fontColor: "#ff8a76"
            }
          }]
        }
      });
      var greenChartOptions = _objectSpread({}, basicOptions, {
        tooltips: {
          backgroundColor: '#f5f5f5',
          titleFontColor: '#333',
          bodyFontColor: '#666',
          bodySpacing: 4,
          xPadding: 12,
          mode: "nearest",
          intersect: 0,
          position: "nearest"
        },
        scales: {
          yAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(29,140,248,0.0)',
              zeroLineColor: "transparent"
            },
            ticks: {
              suggestedMin: 50,
              suggestedMax: 125,
              padding: 20,
              fontColor: "#9e9e9e"
            }
          }],
          xAxes: [{
            barPercentage: 1.6,
            gridLines: {
              drawBorder: false,
              color: 'rgba(0,242,195,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              padding: 20,
              fontColor: "#9e9e9e"
            }
          }]
        }
      });
      var barChartOptions = _objectSpread({}, basicOptions, {
        tooltips: {
          backgroundColor: '#f5f5f5',
          titleFontColor: '#333',
          bodyFontColor: '#666',
          bodySpacing: 4,
          xPadding: 12,
          mode: "nearest",
          intersect: 0,
          position: "nearest"
        },
        scales: {
          yAxes: [{
            gridLines: {
              drawBorder: false,
              color: 'rgba(29,140,248,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              suggestedMin: 60,
              suggestedMax: 120,
              padding: 20,
              fontColor: "#9e9e9e"
            }
          }],
          xAxes: [{
            gridLines: {
              drawBorder: false,
              color: 'rgba(29,140,248,0.1)',
              zeroLineColor: "transparent"
            },
            ticks: {
              padding: 20,
              fontColor: "#9e9e9e"
            }
          }]
        }
      });

      /***/
    }),

/***/ "./resources/js/components/CloseButton.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/CloseButton.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _CloseButton_vue_vue_type_template_id_1e0edd2f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./CloseButton.vue?vue&type=template&id=1e0edd2f& */ "./resources/js/components/CloseButton.vue?vue&type=template&id=1e0edd2f&");
/* harmony import */ var _CloseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./CloseButton.vue?vue&type=script&lang=js& */ "./resources/js/components/CloseButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _CloseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _CloseButton_vue_vue_type_template_id_1e0edd2f___WEBPACK_IMPORTED_MODULE_0__["render"],
        _CloseButton_vue_vue_type_template_id_1e0edd2f___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/CloseButton.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/CloseButton.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/js/components/CloseButton.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CloseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./CloseButton.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CloseButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_CloseButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/CloseButton.vue?vue&type=template&id=1e0edd2f&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/CloseButton.vue?vue&type=template&id=1e0edd2f& ***!
  \********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CloseButton_vue_vue_type_template_id_1e0edd2f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./CloseButton.vue?vue&type=template&id=1e0edd2f& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/CloseButton.vue?vue&type=template&id=1e0edd2f&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CloseButton_vue_vue_type_template_id_1e0edd2f___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_CloseButton_vue_vue_type_template_id_1e0edd2f___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/Inputs/BaseInput.vue":
/*!******************************************************!*\
  !*** ./resources/js/components/Inputs/BaseInput.vue ***!
  \******************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _BaseInput_vue_vue_type_template_id_137ff39e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./BaseInput.vue?vue&type=template&id=137ff39e& */ "./resources/js/components/Inputs/BaseInput.vue?vue&type=template&id=137ff39e&");
/* harmony import */ var _BaseInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseInput.vue?vue&type=script&lang=js& */ "./resources/js/components/Inputs/BaseInput.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _BaseInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _BaseInput_vue_vue_type_template_id_137ff39e___WEBPACK_IMPORTED_MODULE_0__["render"],
        _BaseInput_vue_vue_type_template_id_137ff39e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/Inputs/BaseInput.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/Inputs/BaseInput.vue?vue&type=script&lang=js&":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/Inputs/BaseInput.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./BaseInput.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Inputs/BaseInput.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseInput_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/Inputs/BaseInput.vue?vue&type=template&id=137ff39e&":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/Inputs/BaseInput.vue?vue&type=template&id=137ff39e& ***!
  \*************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseInput_vue_vue_type_template_id_137ff39e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./BaseInput.vue?vue&type=template&id=137ff39e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/Inputs/BaseInput.vue?vue&type=template&id=137ff39e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseInput_vue_vue_type_template_id_137ff39e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_BaseInput_vue_vue_type_template_id_137ff39e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/NavbarToggleButton.vue":
/*!********************************************************!*\
  !*** ./resources/js/components/NavbarToggleButton.vue ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _NavbarToggleButton_vue_vue_type_template_id_6395e681___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./NavbarToggleButton.vue?vue&type=template&id=6395e681& */ "./resources/js/components/NavbarToggleButton.vue?vue&type=template&id=6395e681&");
/* harmony import */ var _NavbarToggleButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./NavbarToggleButton.vue?vue&type=script&lang=js& */ "./resources/js/components/NavbarToggleButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _NavbarToggleButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _NavbarToggleButton_vue_vue_type_template_id_6395e681___WEBPACK_IMPORTED_MODULE_0__["render"],
        _NavbarToggleButton_vue_vue_type_template_id_6395e681___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/NavbarToggleButton.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/NavbarToggleButton.vue?vue&type=script&lang=js&":
/*!*********************************************************************************!*\
  !*** ./resources/js/components/NavbarToggleButton.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarToggleButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./NavbarToggleButton.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/NavbarToggleButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarToggleButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/NavbarToggleButton.vue?vue&type=template&id=6395e681&":
/*!***************************************************************************************!*\
  !*** ./resources/js/components/NavbarToggleButton.vue?vue&type=template&id=6395e681& ***!
  \***************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarToggleButton_vue_vue_type_template_id_6395e681___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./NavbarToggleButton.vue?vue&type=template&id=6395e681& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/NavbarToggleButton.vue?vue&type=template&id=6395e681&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarToggleButton_vue_vue_type_template_id_6395e681___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_NavbarToggleButton_vue_vue_type_template_id_6395e681___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/SidebarPlugin/SideBar.vue":
/*!***********************************************************!*\
  !*** ./resources/js/components/SidebarPlugin/SideBar.vue ***!
  \***********************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _SideBar_vue_vue_type_template_id_f7c2893e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SideBar.vue?vue&type=template&id=f7c2893e& */ "./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=template&id=f7c2893e&");
/* harmony import */ var _SideBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SideBar.vue?vue&type=script&lang=js& */ "./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _SideBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _SideBar_vue_vue_type_template_id_f7c2893e___WEBPACK_IMPORTED_MODULE_0__["render"],
        _SideBar_vue_vue_type_template_id_f7c2893e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/SidebarPlugin/SideBar.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=script&lang=js&":
/*!************************************************************************************!*\
  !*** ./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=script&lang=js& ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SideBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./SideBar.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SideBar_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=template&id=f7c2893e&":
/*!******************************************************************************************!*\
  !*** ./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=template&id=f7c2893e& ***!
  \******************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SideBar_vue_vue_type_template_id_f7c2893e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./SideBar.vue?vue&type=template&id=f7c2893e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SideBar.vue?vue&type=template&id=f7c2893e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SideBar_vue_vue_type_template_id_f7c2893e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SideBar_vue_vue_type_template_id_f7c2893e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/SidebarPlugin/SidebarLink.vue":
/*!***************************************************************!*\
  !*** ./resources/js/components/SidebarPlugin/SidebarLink.vue ***!
  \***************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _SidebarLink_vue_vue_type_template_id_b93be3ca___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SidebarLink.vue?vue&type=template&id=b93be3ca& */ "./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=template&id=b93be3ca&");
/* harmony import */ var _SidebarLink_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SidebarLink.vue?vue&type=script&lang=js& */ "./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _SidebarLink_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _SidebarLink_vue_vue_type_template_id_b93be3ca___WEBPACK_IMPORTED_MODULE_0__["render"],
        _SidebarLink_vue_vue_type_template_id_b93be3ca___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/components/SidebarPlugin/SidebarLink.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=script&lang=js&":
/*!****************************************************************************************!*\
  !*** ./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SidebarLink_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./SidebarLink.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_SidebarLink_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=template&id=b93be3ca&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=template&id=b93be3ca& ***!
  \**********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SidebarLink_vue_vue_type_template_id_b93be3ca___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./SidebarLink.vue?vue&type=template&id=b93be3ca& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/SidebarPlugin/SidebarLink.vue?vue&type=template&id=b93be3ca&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SidebarLink_vue_vue_type_template_id_b93be3ca___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_SidebarLink_vue_vue_type_template_id_b93be3ca___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/components/SidebarPlugin/index.js":
/*!********************************************************!*\
  !*** ./resources/js/components/SidebarPlugin/index.js ***!
  \********************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _SideBar_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./SideBar.vue */ "./resources/js/components/SidebarPlugin/SideBar.vue");
/* harmony import */ var _SidebarLink__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./SidebarLink */ "./resources/js/components/SidebarPlugin/SidebarLink.vue");


      var SidebarStore = {
        showSidebar: false,
        sidebarLinks: [],
        displaySidebar: function displaySidebar(value) {
          this.showSidebar = value;
        }
      };
      var SidebarPlugin = {
        install: function install(Vue) {
          var app = new Vue({
            data: {
              sidebarStore: SidebarStore
            }
          });
          Vue.prototype.$sidebar = app.sidebarStore;
          Vue.component("side-bar", _SideBar_vue__WEBPACK_IMPORTED_MODULE_0__["default"]);
          Vue.component("sidebar-link", _SidebarLink__WEBPACK_IMPORTED_MODULE_1__["default"]);
        }
      };
/* harmony default export */ __webpack_exports__["default"] = (SidebarPlugin);

      /***/
    }),

/***/ "./resources/js/components/index.js":
/*!******************************************!*\
  !*** ./resources/js/components/index.js ***!
  \******************************************/
/*! exports provided: BaseInput, Card, Modal, CloseButton, StatsCard, BaseTable, BaseCheckbox, BaseRadio, BaseDropdown, BaseButton, BaseAlert, SidebarPlugin, BaseNav */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Inputs_BaseInput_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Inputs/BaseInput.vue */ "./resources/js/components/Inputs/BaseInput.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseInput", function () { return _Inputs_BaseInput_vue__WEBPACK_IMPORTED_MODULE_0__["default"]; });

/* harmony import */ var _BaseCheckbox_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./BaseCheckbox.vue */ "./resources/js/components/BaseCheckbox.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseCheckbox", function () { return _BaseCheckbox_vue__WEBPACK_IMPORTED_MODULE_1__["default"]; });

/* harmony import */ var _BaseRadio_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./BaseRadio.vue */ "./resources/js/components/BaseRadio.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseRadio", function () { return _BaseRadio_vue__WEBPACK_IMPORTED_MODULE_2__["default"]; });

/* harmony import */ var _BaseDropdown_vue__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./BaseDropdown.vue */ "./resources/js/components/BaseDropdown.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseDropdown", function () { return _BaseDropdown_vue__WEBPACK_IMPORTED_MODULE_3__["default"]; });

/* harmony import */ var _BaseTable_vue__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./BaseTable.vue */ "./resources/js/components/BaseTable.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseTable", function () { return _BaseTable_vue__WEBPACK_IMPORTED_MODULE_4__["default"]; });

/* harmony import */ var _BaseButton__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./BaseButton */ "./resources/js/components/BaseButton.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseButton", function () { return _BaseButton__WEBPACK_IMPORTED_MODULE_5__["default"]; });

/* harmony import */ var _BaseAlert__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./BaseAlert */ "./resources/js/components/BaseAlert.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseAlert", function () { return _BaseAlert__WEBPACK_IMPORTED_MODULE_6__["default"]; });

/* harmony import */ var _BaseNav__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./BaseNav */ "./resources/js/components/BaseNav.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "BaseNav", function () { return _BaseNav__WEBPACK_IMPORTED_MODULE_7__["default"]; });

/* harmony import */ var _Modal__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./Modal */ "./resources/js/components/Modal.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Modal", function () { return _Modal__WEBPACK_IMPORTED_MODULE_8__["default"]; });

/* harmony import */ var _CloseButton__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./CloseButton */ "./resources/js/components/CloseButton.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "CloseButton", function () { return _CloseButton__WEBPACK_IMPORTED_MODULE_9__["default"]; });

/* harmony import */ var _Cards_Card_vue__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./Cards/Card.vue */ "./resources/js/components/Cards/Card.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "Card", function () { return _Cards_Card_vue__WEBPACK_IMPORTED_MODULE_10__["default"]; });

/* harmony import */ var _Cards_StatsCard_vue__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./Cards/StatsCard.vue */ "./resources/js/components/Cards/StatsCard.vue");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "StatsCard", function () { return _Cards_StatsCard_vue__WEBPACK_IMPORTED_MODULE_11__["default"]; });

/* harmony import */ var _SidebarPlugin_index__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./SidebarPlugin/index */ "./resources/js/components/SidebarPlugin/index.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "SidebarPlugin", function () { return _SidebarPlugin_index__WEBPACK_IMPORTED_MODULE_12__["default"]; });
















      /***/
    }),

/***/ "./resources/js/config.js":
/*!********************************!*\
  !*** ./resources/js/config.js ***!
  \********************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ({
        colors: {
          "default": "#344675",
          primary: "#42b883",
          info: "#1d8cf8",
          danger: "#fd5d93",
          teal: "#00d6b4",
          primaryGradient: ['rgba(76, 211, 150, 0.1)', 'rgba(53, 183, 125, 0)', 'rgba(119,52,169,0)']
        }
      });

      /***/
    }),

/***/ "./resources/js/pages/Dashboard.vue":
/*!******************************************!*\
  !*** ./resources/js/pages/Dashboard.vue ***!
  \******************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Dashboard_vue_vue_type_template_id_82704d4a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Dashboard.vue?vue&type=template&id=82704d4a& */ "./resources/js/pages/Dashboard.vue?vue&type=template&id=82704d4a&");
/* harmony import */ var _Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Dashboard.vue?vue&type=script&lang=js& */ "./resources/js/pages/Dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _Dashboard_vue_vue_type_template_id_82704d4a___WEBPACK_IMPORTED_MODULE_0__["render"],
        _Dashboard_vue_vue_type_template_id_82704d4a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/pages/Dashboard.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/pages/Dashboard.vue?vue&type=script&lang=js&":
/*!*******************************************************************!*\
  !*** ./resources/js/pages/Dashboard.vue?vue&type=script&lang=js& ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Dashboard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/pages/Dashboard.vue?vue&type=template&id=82704d4a&":
/*!*************************************************************************!*\
  !*** ./resources/js/pages/Dashboard.vue?vue&type=template&id=82704d4a& ***!
  \*************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_template_id_82704d4a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Dashboard.vue?vue&type=template&id=82704d4a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard.vue?vue&type=template&id=82704d4a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_template_id_82704d4a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_template_id_82704d4a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/pages/Dashboard/TaskList.vue":
/*!***************************************************!*\
  !*** ./resources/js/pages/Dashboard/TaskList.vue ***!
  \***************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _TaskList_vue_vue_type_template_id_107d1972___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./TaskList.vue?vue&type=template&id=107d1972& */ "./resources/js/pages/Dashboard/TaskList.vue?vue&type=template&id=107d1972&");
/* harmony import */ var _TaskList_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./TaskList.vue?vue&type=script&lang=js& */ "./resources/js/pages/Dashboard/TaskList.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _TaskList_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _TaskList_vue_vue_type_template_id_107d1972___WEBPACK_IMPORTED_MODULE_0__["render"],
        _TaskList_vue_vue_type_template_id_107d1972___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/pages/Dashboard/TaskList.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/pages/Dashboard/TaskList.vue?vue&type=script&lang=js&":
/*!****************************************************************************!*\
  !*** ./resources/js/pages/Dashboard/TaskList.vue?vue&type=script&lang=js& ***!
  \****************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_TaskList_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./TaskList.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/TaskList.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_TaskList_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/pages/Dashboard/TaskList.vue?vue&type=template&id=107d1972&":
/*!**********************************************************************************!*\
  !*** ./resources/js/pages/Dashboard/TaskList.vue?vue&type=template&id=107d1972& ***!
  \**********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TaskList_vue_vue_type_template_id_107d1972___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./TaskList.vue?vue&type=template&id=107d1972& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/TaskList.vue?vue&type=template&id=107d1972&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TaskList_vue_vue_type_template_id_107d1972___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_TaskList_vue_vue_type_template_id_107d1972___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    }),

/***/ "./resources/js/pages/Dashboard/UserTable.vue":
/*!****************************************************!*\
  !*** ./resources/js/pages/Dashboard/UserTable.vue ***!
  \****************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _UserTable_vue_vue_type_template_id_5004ba22___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./UserTable.vue?vue&type=template&id=5004ba22& */ "./resources/js/pages/Dashboard/UserTable.vue?vue&type=template&id=5004ba22&");
/* harmony import */ var _UserTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./UserTable.vue?vue&type=script&lang=js& */ "./resources/js/pages/Dashboard/UserTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





      /* normalize component */

      var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
        _UserTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
        _UserTable_vue_vue_type_template_id_5004ba22___WEBPACK_IMPORTED_MODULE_0__["render"],
        _UserTable_vue_vue_type_template_id_5004ba22___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
        false,
        null,
        null,
        null

      )

      /* hot reload */
      if (false) { var api; }
      component.options.__file = "resources/js/pages/Dashboard/UserTable.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

      /***/
    }),

/***/ "./resources/js/pages/Dashboard/UserTable.vue?vue&type=script&lang=js&":
/*!*****************************************************************************!*\
  !*** ./resources/js/pages/Dashboard/UserTable.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************/
/*! exports provided: default */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UserTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./UserTable.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/UserTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_UserTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]);

      /***/
    }),

/***/ "./resources/js/pages/Dashboard/UserTable.vue?vue&type=template&id=5004ba22&":
/*!***********************************************************************************!*\
  !*** ./resources/js/pages/Dashboard/UserTable.vue?vue&type=template&id=5004ba22& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function (module, __webpack_exports__, __webpack_require__) {

      "use strict";
      __webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserTable_vue_vue_type_template_id_5004ba22___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./UserTable.vue?vue&type=template&id=5004ba22& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/pages/Dashboard/UserTable.vue?vue&type=template&id=5004ba22&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserTable_vue_vue_type_template_id_5004ba22___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function () { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_UserTable_vue_vue_type_template_id_5004ba22___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



      /***/
    })

}]);