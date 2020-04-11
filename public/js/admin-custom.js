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

/***/ "./resources/files/assets/js/pcoded.min.js":
/*!*************************************************!*\
  !*** ./resources/files/assets/js/pcoded.min.js ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$.fn.pcodedmenu = function (settings) {
  var oid = this.attr("id"); // Pcoded Menu default settings:

  var defaults = {
    // Common option both for vertical nad horizontal
    themelayout: 'vertical',
    // value should be horizontal/vertical
    MenuTrigger: 'click',
    // value should be hover/click
    SubMenuTrigger: 'click',
    // value should be hover/click
    activeMenuClass: 'active',
    ThemeBackgroundPattern: 'pattern6',
    // Value should be
    HeaderBackground: 'theme4',
    // Value should be theme1/theme2/theme3/theme4/theme5/theme6/theme7/theme8/theme9
    LHeaderBackground: 'theme4',
    // Value should be theme1/theme2/theme3/theme4/theme5/theme6/theme7/theme8/theme9
    NavbarBackground: 'theme4',
    // Value should be theme1/theme2/theme3/theme4/theme5/theme6/theme7/theme8/theme9
    ActiveItemBackground: 'theme0',
    // Value should be theme1/theme2/theme3/theme4/theme5/theme6/theme7/theme8/theme9
    SubItemBackground: 'theme4',
    // Value should be theme1/theme2/theme3/theme4/theme5/theme6/theme7/theme8/theme9
    ActiveItemStyle: 'style0',
    ItemBorder: true,
    ItemBorderStyle: 'solid',
    // value should be solid/dotted/dashed
    SubItemBorder: true,
    DropDownIconStyle: 'style1',
    // value should be style1,style2,style3
    FixedNavbarPosition: false,
    FixedHeaderPosition: false,
    // Horizontal Navigation option
    horizontalMenuplacement: 'top',
    // value should be top/bottom
    horizontalMenulayout: 'widebox',
    //value should be wide/box/widebox
    horizontalBrandItem: true,
    horizontalLeftNavItem: true,
    horizontalRightItem: false,
    horizontalSearchItem: false,
    horizontalBrandItemAlign: 'left',
    horizontalLeftNavItemAlign: 'right',
    horizontalRightItemAlign: 'right',
    horizontalsearchItemAlign: 'right',
    horizontalstickynavigation: false,
    horizontalNavigationView: 'view1',
    horizontalNavIsCentered: false,
    horizontalNavigationMenuIcon: true,
    layouttype: 'light',
    // Vertical Navigation option
    verticalMenuplacement: 'left',
    // value should be left/right
    verticalMenulayout: 'wide',
    // value should be wide/box/widebox
    collapseVerticalLeftHeader: true,
    VerticalSubMenuItemIconStyle: 'style6',
    // value should be style1,style2,style3
    VerticalNavigationView: 'view1',
    verticalMenueffect: {
      desktop: "shrink",
      tablet: "push",
      phone: "overlay"
    },
    defaultVerticalMenu: {
      desktop: "expanded",
      // value should be offcanvas/collapsed/expanded/compact/compact-acc/fullpage/ex-popover/sub-expanded
      tablet: "collapsed",
      // value should be offcanvas/collapsed/expanded/compact
      phone: "offcanvas" // value should be offcanvas/collapsed/expanded/compact

    },
    onToggleVerticalMenu: {
      desktop: "collapsed",
      // value should be offcanvas/collapsed/expanded/compact
      tablet: "expanded",
      // value should be offcanvas/collapsed/expanded/compact
      phone: "expanded" // value should be offcanvas/collapsed/expanded/compact

    }
  };
  var satnt, mt, tw, dt, is_chrome, is_explorer, is_firefox, is_safari, is_opera, is_mac, is_windows;
  var settings = $.extend({}, defaults, settings);
  var PcodedMenu = {
    PcodedMenuInit: function PcodedMenuInit() {
      PcodedMenu.Handlethemelayout();
      PcodedMenu.HandleverticalMenuplacement();
      PcodedMenu.HandlehorizontalMenuplacement();
      PcodedMenu.HandleMenulayout();
      PcodedMenu.HandleDeviceType();
      PcodedMenu.Handlecomponetheight();
      PcodedMenu.HandleMenuOnClick();
      PcodedMenu.HandleMenuTrigger();
      PcodedMenu.HandleSubMenuTrigger();
      PcodedMenu.HandleActiveItem();
      PcodedMenu.HandleOffcanvasMenu();
      PcodedMenu.HandleVerticalLeftHeader();
      PcodedMenu.HandleThemeBackground();
      PcodedMenu.HandleActiveItemStyle();
      PcodedMenu.HandleItemBorder();
      PcodedMenu.HandleBorderStyle();
      PcodedMenu.HandleSubItemBorder();
      PcodedMenu.HandleDropDownIconStyle();
      PcodedMenu.HandleOptionSelectorPanel();
      PcodedMenu.HandleNavbarPosition();
      PcodedMenu.HandleVerticalSubMenuItemIconStyle();
      PcodedMenu.HandleVerticalNavigationView();
      PcodedMenu.HandleHorizontalItemIsCentered();
      PcodedMenu.HandleHorizontalItemAlignment();
      PcodedMenu.HandleSubMenuOffset();
      PcodedMenu.HandleHorizontalStickyNavigation();
      PcodedMenu.HandleDocumentClickEvent();
      PcodedMenu.HandleVerticalScrollbar();
      PcodedMenu.HandleHorizontalMobileMenuToggle();
      PcodedMenu.horizontalNavigationMenuIcon();
      PcodedMenu.verticalNavigationSearchBar();
      PcodedMenu.safariBrowsercompatibility();
      PcodedMenu.Handlemenutype();
      PcodedMenu.Handlelayoutvartype();
    },
    safariBrowsercompatibility: function safariBrowsercompatibility() {
      is_chrome = navigator.userAgent.indexOf('Chrome') > -1;
      is_explorer = navigator.userAgent.indexOf('MSIE') > -1;
      is_firefox = navigator.userAgent.indexOf('Firefox') > -1;
      is_safari = navigator.userAgent.indexOf("Safari") > -1;
      is_opera = navigator.userAgent.indexOf("Presto") > -1;
      is_mac = navigator.userAgent.indexOf('Mac OS') != -1;
      is_windows = !is_mac;

      if (is_chrome && is_safari) {
        is_safari = false;
      }

      if (is_safari || is_windows) {}
    },
    verticalNavigationSearchBar: function verticalNavigationSearchBar() {
      if (settings.themelayout === "vertical") {
        $('.searchbar-toggle').on('click', function () {
          $(this).parent('.pcoded-search').toggleClass('open');
        });
      }
    },
    horizontalNavigationMenuIcon: function horizontalNavigationMenuIcon() {
      if (settings.themelayout === "horizontal") {
        switch (settings.horizontalNavigationMenuIcon) {
          case false:
            $('#' + oid + '.pcoded .pcoded-navbar .pcoded-item > li > a .pcoded-micon').hide();
            $('#' + oid + '.pcoded .pcoded-navbar .pcoded-item.pcoded-search-item > li > a .pcoded-micon').show();
            break;

          default:
        }
      }
    },
    HandleHorizontalMobileMenuToggle: function HandleHorizontalMobileMenuToggle() {
      if (settings.themelayout === "horizontal") {
        $('#mobile-collapse').on('click', function () {
          $('.pcoded-navbar').toggleClass('show-menu');
        });
      }
    },
    HandleVerticalScrollbar: function HandleVerticalScrollbar() {
      if (settings.themelayout === "vertical") {
        satnt = settings.defaultVerticalMenu.desktop;

        if (satnt === "expanded" || satnt === "compact") {
          mt = settings.MenuTrigger;

          if (mt === "click") {
            $(window).on("load", function () {
              $(".sidebar_toggle a").click(function (e) {
                e.preventDefault();
                var $this = $(this);
                rel = $this.attr("rel");
                el = $(".pcoded-navbar"); // if (el.hasClass("mCS_destroyed")) {
                //     el.mCustomScrollbar({
                //         axis:"y",
                //         setHeight:"calc(100% - 80px)",
                // 		autoHideScrollbar: false,
                // 		scrollInertia: 100,
                // 		theme:"minimal",
                //     });
                // } else {
                //     el.mCustomScrollbar("destroy");
                // }
              });
            });
          } // $(".main-menu").mCustomScrollbar({
          //     axis:"y",
          //     setHeight:"calc(100% - 80px)",
          // 	autoHideScrollbar: false,
          // 	scrollInertia: 100,
          // 	theme:"minimal",
          // });

        }
      }
    },
    HandleDocumentClickEvent: function HandleDocumentClickEvent() {
      function closeSubMenu() {
        $(document).on('click', function (evt) {
          var target = $(evt.target);
          var sdt = $('#' + oid).attr('pcoded-device-type');
          var vnt = $('#' + oid).attr('vertical-nav-type');
          var el = $('#' + oid + ' .pcoded-item li');

          if (!target.parents('.pcoded-item').length) {
            if (sdt != "phone") {
              if (vnt != "expanded") {
                el.removeClass('pcoded-trigger');
              }
            }
          }
        });
      }

      ;

      function closeLeftbarSearch() {
        $(document).on('click', function (evt) {
          var target = $(evt.target);
          var el = $('#' + oid + ' .pcoded-search');

          if (!target.parents('.pcoded-search').length) {
            el.removeClass('open');
          }
        });
      }

      ;
      closeSubMenu();
      closeLeftbarSearch();
    },
    HandleHorizontalStickyNavigation: function HandleHorizontalStickyNavigation() {
      switch (settings.horizontalstickynavigation) {
        case true:
          $(window).on('scroll', function () {
            var scrolltop = $(this).scrollTop();

            if (scrolltop >= 100) {
              $('.pcoded-navbar').addClass('stickybar');
              $('stickybar').fadeIn(3000);
            } else if (scrolltop <= 100) {
              $('.pcoded-navbar').removeClass('stickybar');
              $('.stickybar').fadeOut(3000);
            }
          });
          break;

        case false:
          $('.pcoded-navbar').removeClass('stickybar');
          break;

        default:
      }
    },
    HandleSubMenuOffset: function HandleSubMenuOffset() {
      switch (settings.themelayout) {
        case 'horizontal':
          var trigger = settings.SubMenuTrigger;

          if (trigger === "hover") {
            $("li.pcoded-hasmenu").on('mouseenter mouseleave', function (e) {
              if ($('.pcoded-submenu', this).length) {
                var elm = $('.pcoded-submenu:first', this);
                var off = elm.offset();
                var l = off.left;
                var w = elm.width();
                var docH = $(window).height();
                var docW = $(window).width(); //console.log("length = " + $('.pcoded-submenu', this).length + " off=" + off + " l=" + l+ " w=" + w + " doch=" + docH + " docW=" + docW)

                var isEntirelyVisible = l + w <= docW;

                if (!isEntirelyVisible) {
                  $(this).addClass('edge');
                } else {
                  $(this).removeClass('edge');
                }
              }
            });
          } else {
            $("li.pcoded-hasmenu").on('click', function (e) {
              e.preventDefault();

              if ($('.pcoded-submenu', this).length) {
                var elm = $('.pcoded-submenu:first', this);
                var off = elm.offset();
                var l = off.left;
                var w = elm.width();
                var docH = $(window).height();
                var docW = $(window).width();
                var isEntirelyVisible = l + w <= docW;

                if (!isEntirelyVisible) {
                  $(this).toggleClass('edge');
                }
              }
            });
          }

          break;

        default:
      }
    },
    HandleHorizontalItemIsCentered: function HandleHorizontalItemIsCentered() {
      if (settings.themelayout === "horizontal") {
        switch (settings.horizontalNavIsCentered) {
          case true:
            $('#' + oid + ' .pcoded-navbar').addClass("isCentered");
            break;

          case false:
            $('#' + oid + ' .pcoded-navbar').removeClass("isCentered");
            break;

          default:
        }
      }
    },
    HandleHorizontalItemAlignment: function HandleHorizontalItemAlignment() {
      var layout = settings.themelayout;

      if (layout === "horizontal") {
        var branditemalignment = function branditemalignment() {
          var elm = $('#' + oid + '.pcoded .pcoded-navbar .pcoded-brand');

          if (settings.horizontalBrandItem === true) {
            switch (settings.horizontalBrandItemAlign) {
              case 'left':
                elm.removeClass('pcoded-right-align');
                elm.addClass('pcoded-left-align');
                break;

              case 'right':
                elm.removeClass('pcoded-left-align');
                elm.addClass('pcoded-right-align');
                break;

              default:
            }
          } else {
            elm.hide();
          }
        };

        var leftitemalignment = function leftitemalignment() {
          var elm = $('#' + oid + '.pcoded .pcoded-navbar .pcoded-item.pcoded-left-item');

          if (settings.horizontalLeftNavItem === true) {
            switch (settings.horizontalLeftNavItemAlign) {
              case 'left':
                elm.removeClass('pcoded-right-align');
                elm.addClass('pcoded-left-align');
                break;

              case 'right':
                elm.removeClass('pcoded-left-align');
                elm.addClass('pcoded-right-align');
                break;

              default:
            }
          } else {
            elm.hide();
          }
        };

        var rightitemalignment = function rightitemalignment() {
          var elm = $('#' + oid + '.pcoded .pcoded-navbar .pcoded-item.pcoded-right-item');

          if (settings.horizontalRightItem === true) {
            switch (settings.horizontalRightItemAlign) {
              case 'left':
                elm.removeClass('pcoded-right-align');
                elm.addClass('pcoded-left-align');
                break;

              case 'right':
                elm.removeClass('pcoded-left-align');
                elm.addClass('pcoded-right-align');
                break;

              default:
            }
          } else {
            elm.hide();
          }
        };

        var searchitemalignment = function searchitemalignment() {
          var elm = $('#' + oid + '.pcoded .pcoded-navbar .pcoded-search-item');

          if (settings.horizontalSearchItem === true) {
            switch (settings.horizontalsearchItemAlign) {
              case 'left':
                elm.removeClass('pcoded-right-align');
                elm.addClass('pcoded-left-align');
                break;

              case 'right':
                elm.removeClass('pcoded-left-align');
                elm.addClass('pcoded-right-align');
                break;

              default:
            }
          } else {
            elm.hide();
          }
        };

        ;
        ;
        ;
        ;

        if (settings.horizontalNavIsCentered === false) {
          branditemalignment();
          leftitemalignment();
          rightitemalignment();
          searchitemalignment();
        }
      }
    },
    HandleVerticalNavigationView: function HandleVerticalNavigationView() {
      switch (settings.themelayout) {
        case 'vertical':
          var ev = settings.VerticalNavigationView;
          $('#' + oid + '.pcoded').attr("vnavigation-view", ev);
          break;

        case 'horizontal':
          var ev = settings.horizontalNavigationView;
          $('#' + oid + '.pcoded').attr("hnavigation-view", ev);
          break;

        default:
      }
    },
    HandleVerticalSubMenuItemIconStyle: function HandleVerticalSubMenuItemIconStyle() {
      switch (settings.themelayout) {
        case 'vertical':
          var ev = settings.VerticalSubMenuItemIconStyle;
          $('#' + oid + ' .pcoded-navbar .pcoded-hasmenu').attr("subitem-icon", ev);
          break;

        case 'horizontal':
          $('#' + oid + ' .pcoded-navbar .pcoded-hasmenu').attr("subitem-icon", ev);
          break;

        default:
      }
    },
    HandleNavbarPosition: function HandleNavbarPosition() {
      var navposition = settings.FixedNavbarPosition;
      var headerposition = settings.FixedHeaderPosition;
      var rheaderposition = settings.FixedRightHeaderPosition;

      switch (settings.themelayout) {
        case 'vertical':
          if (navposition == true) {
            $('#' + oid + ' .pcoded-navbar').attr("pcoded-navbar-position", 'fixed');
            $('#' + oid + ' .pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'fixed');
          } else {
            $('#' + oid + ' .pcoded-navbar').attr("pcoded-navbar-position", 'absolute');
            $('#' + oid + ' .pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'absolute');
          }

          if (headerposition == true) {
            $('#' + oid + ' .pcoded-header').attr("pcoded-header-position", 'fixed');
            $('#' + oid + ' .pcoded-main-container').css('margin-top', $(".pcoded-header").outerHeight());
          } else {
            $('#' + oid + ' .pcoded-header').attr("pcoded-header-position", 'relative');
            $('#' + oid + ' .pcoded-main-container').css('margin-top', '0px');
          }

          break;

        case 'horizontal':
          if (navposition == true) {
            $('#' + oid + ' .pcoded-navbar').attr("pcoded-navbar-position", 'fixed');
            $('#' + oid + ' .pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'fixed');
          } else {
            $('#' + oid + ' .pcoded-navbar').attr("pcoded-navbar-position", 'absolute');
            $('#' + oid + ' .pcoded-header .pcoded-left-header').attr("pcoded-lheader-position", 'absolute');
          }

          if (headerposition == true) {
            $('#' + oid + ' .pcoded-header').attr("pcoded-header-position", 'fixed');
            $('#' + oid + ' .pcoded-main-container').css('margin-top', $(".pcoded-header").outerHeight());
          } else {
            $('#' + oid + ' .pcoded-header').attr("pcoded-header-position", 'relative');
            $('#' + oid + ' .pcoded-main-container').css('margin-top', '0px');
          }

          break;

        default:
      }
    },
    HandleOptionSelectorPanel: function HandleOptionSelectorPanel() {
      $('.selector-toggle > a').on("click", function () {
        //debugger;
        $('#styleSelector').toggleClass('open');
      });
    },
    HandleDropDownIconStyle: function HandleDropDownIconStyle() {
      var ev = settings.DropDownIconStyle;

      switch (settings.themelayout) {
        case 'vertical':
          $('#' + oid + ' .pcoded-navbar .pcoded-hasmenu').attr("dropdown-icon", ev);
          break;

        case 'horizontal':
          $('#' + oid + ' .pcoded-navbar .pcoded-hasmenu').attr("dropdown-icon", ev);
          break;

        default:
      }
    },
    HandleSubItemBorder: function HandleSubItemBorder() {
      switch (settings.SubItemBorder) {
        case true:
          $('#' + oid + ' .pcoded-navbar .pcoded-item').attr("subitem-border", "true");
          break;

        case false:
          $('#' + oid + ' .pcoded-navbar .pcoded-item').attr("subitem-border", "false");
          break;

        default:
      }
    },
    HandleBorderStyle: function HandleBorderStyle() {
      var ev = settings.ItemBorderStyle;

      switch (settings.ItemBorder) {
        case true:
          $('#' + oid + ' .pcoded-navbar .pcoded-item').attr("item-border-style", ev);
          break;

        case false:
          $('#' + oid + ' .pcoded-navbar .pcoded-item').attr("item-border-style", "");
          break;

        default:
      }
    },
    HandleItemBorder: function HandleItemBorder() {
      switch (settings.ItemBorder) {
        case true:
          $('#' + oid + ' .pcoded-navbar .pcoded-item').attr("item-border", "true");
          break;

        case false:
          $('#' + oid + ' .pcoded-navbar .pcoded-item').attr("item-border", "false");
          break;

        default:
      }
    },
    HandleActiveItemStyle: function HandleActiveItemStyle() {
      var ev = settings.ActiveItemStyle;

      if (ev != undefined && ev != "") {
        $('#' + oid + ' .pcoded-navbar').attr("active-item-style", ev);
      } else {
        $('#' + oid + ' .pcoded-navbar').attr("active-item-style", "style0");
      }
    },
    Handlemenutype: function Handlemenutype() {
      var ev = settings.menutype;
      var ef = settings.freamtype;
      var nimg = settings.NavbarImage;
      var img = settings.ActiveNavbarImage;

      if (ev != undefined && ev != "") {
        $('#' + oid).attr("nav-type", ev);
      } else {
        $('#' + oid).attr("nav-type", "st1");
      }

      if (ef != undefined && ef != "") {
        $('#' + oid).attr("fream-type", ef);
      } else {
        $('#' + oid).attr("fream-type", "theme1");
      }

      if (nimg != undefined && nimg != "") {
        $('#' + oid).attr("sidebar-img", nimg);
      } else {
        $('#' + oid).attr("sidebar-img", "false");
      }

      if (img != undefined && img != "") {
        $('#' + oid).attr("sidebar-img-type", img);
      } else {
        $('#' + oid).attr("sidebar-img-type", "img1");
      }
    },
    Handlelayoutvartype: function Handlelayoutvartype() {
      var ev = settings.layouttype;

      if (ev != undefined && ev != "") {
        $('#' + oid).attr("layout-type", ev);
      } else {
        $('#' + oid).attr("layout-type", "light");
      }
    },
    HandleThemeBackground: function HandleThemeBackground() {
      function themebackgroundpattern() {
        var ev = settings.ThemeBackgroundPattern;

        if (ev != undefined && ev != "") {
          $('body').attr("themebg-pattern", ev);
        } else {
          $('body').attr("themebg-pattern", "pattern1");
        }
      }

      ;

      function setheadertheme() {
        var ev = settings.HeaderBackground;

        if (ev != undefined && ev != "") {
          $('#' + oid + ' .pcoded-header').attr("header-theme", ev);
        } else {
          $('#' + oid + ' .pcoded-header').attr("header-theme", "theme1");
        }
      }

      ;

      function setlheadertheme() {
        var ev = settings.LHeaderBackground;

        if (ev != undefined && ev != "") {
          $('#' + oid + ' .pcoded-header .navbar-logo').attr("logo-theme", ev);
          $('#' + oid + ' .pcoded-navigatio-lavel').attr("menu-title-theme", "theme5");
        } else {
          $('#' + oid + ' .pcoded-header .navbar-logo').attr("logo-theme", "theme4");
          $('#' + oid + ' .pcoded-navigatio-lavel').attr("menu-title-theme", "theme5");
        }
      }

      ;

      function setnavbartheme() {
        var ev = settings.NavbarBackground;

        if (ev != undefined && ev != "") {
          $('#' + oid + ' .pcoded-navbar').attr("navbar-theme", ev);
        } else {
          $('#' + oid + ' .pcoded-navbar').attr("navbar-theme", "theme1");
        }
      }

      ;

      function setactiveitemtheme() {
        var ev = settings.ActiveItemBackground;

        if (ev != undefined && ev != "") {
          $('#' + oid + ' .pcoded-navbar').attr("active-item-theme", ev);
        } else {
          $('#' + oid + ' .pcoded-navbar').attr("active-item-theme", "theme1");
        }
      }

      ;

      function setsubitemtheme() {
        var ev = settings.SubItemBackground;

        if (ev != undefined && ev != "") {
          $('#' + oid + ' .pcoded-navbar').attr("sub-item-theme", ev);
        } else {
          $('#' + oid + ' .pcoded-navbar').attr("sub-item-theme", "theme1");
        }
      }

      ;
      themebackgroundpattern();
      setheadertheme();
      setlheadertheme();
      setnavbartheme();
      setactiveitemtheme();
      setsubitemtheme();
    },
    HandleVerticalLeftHeader: function HandleVerticalLeftHeader() {
      if (settings.themelayout === "vertical") {
        switch (settings.collapseVerticalLeftHeader) {
          case true:
            $('#' + oid + ' .pcoded-header').addClass('iscollapsed');
            $('#' + oid + ' .pcoded-header').removeClass('nocollapsed');
            $('#' + oid + '.pcoded').addClass('iscollapsed');
            $('#' + oid + '.pcoded').removeClass('nocollapsed');
            /*  $('#'+oid + ' .pcoded-header.nocollapsed .pcoded-left-header').css('width', '');  */

            break;

          case false:
            $('#' + oid + ' .pcoded-header').removeClass('iscollapsed');
            $('#' + oid + ' .pcoded-header').addClass('nocollapsed');
            $('#' + oid + '.pcoded').removeClass('iscollapsed');
            $('#' + oid + '.pcoded').addClass('nocollapsed');
            /*  $('#'+oid + ' .pcoded-header.nocollapsed .pcoded-left-header').css('width', $(".pcoded-navbar").width());  */

            break;

          default:
        }
      } else {
        return false;
      }
    },
    HandleOffcanvasMenu: function HandleOffcanvasMenu() {
      if (settings.themelayout === "vertical") {
        var vnt = $('#' + oid).attr("vertical-nav-type");

        if (vnt == "offcanvas") {
          $('#' + oid).attr("vertical-layout", "wide");
        }
      }
    },
    HandleActiveItem: function HandleActiveItem() {
      /*switch(settings.activeMenuClass){
      	case  "active":
      		$('li:not("li.pcoded-hasmenu")').on( 'click', function () {
      			var str = $(this).closest('.pcoded-submenu').length;
      			if (str === 0){
      				$(this).closest('.pcoded-inner-navbar').find('li.active').removeClass('active');
      				$(this).addClass('active');
       			}else{
      				if($(this).hasClass('active')){
      					$(this).removeClass('active');
      				}else{
      					$(this).closest('.pcoded-inner-navbar').find('li.active').removeClass('active');
      					$(this).parents('.pcoded-hasmenu').addClass('active');
      					$(this).addClass('active');
      				}
      			}
      		});
      		break;
      	case  false:
      		$('.pcoded-header').removeClass(settings.navbbgclass);
      		break;
      	default:
      }*/
    },
    HandleSubMenuTrigger: function HandleSubMenuTrigger() {
      switch (settings.SubMenuTrigger) {
        case 'hover':
          $('#' + oid + ' .pcoded-navbar .pcoded-hasmenu').addClass('is-hover'); // Initialize

          var $window = $(window);
          var $dropdown = $('.pcoded-submenu > li');
          var currentSize = $window.width();
          var currentEvent = ''; // Attach current event on load

          currentSize >= 767 ? bindTwo('hover') : bindTwo('click'); // Atach window resize event

          $window.resize(function () {
            // get windows new size
            var newSize = $window.width(); // Exit if size is same

            if (currentSize == newSize) {
              return;
            } // Check if size changed, if its greater/smaller and which current event is attached so we dont attach multiple events


            if (newSize >= 767 && currentEvent != 'hover') {
              bindTwo('hover');
            } else if (newSize < 767 && currentEvent != 'click') {
              bindTwo('click');
            } // Update new size


            currentSize = newSize;
          });

          var bindTwo = function bindTwo(eventType) {
            if (eventType == 'hover') {
              // Update currentEvent
              currentEvent = eventType; // Make sure all previous events are removed and attach hover

              $dropdown.off('click').off('mouseenter mouseleave').hover(function () {
                $(this).addClass('pcoded-trigger');
              }, function () {
                $(this).removeClass('pcoded-trigger');
              });
            } else if (eventType == 'click') {
              // Update currentEvent
              currentEvent = eventType; // Make sure all previous events are removed and attach hover

              $dropdown.off('mouseenter mouseleave').off('click').on('click', function (e) {
                e.stopPropagation();
                var str = $(this).closest('.pcoded-submenu').length;

                if (str === 0) {
                  if ($(this).hasClass('pcoded-trigger')) {
                    $(this).removeClass('pcoded-trigger');
                  } else {
                    $(this).closest('.pcoded-inner-navbar').find('li.pcoded-trigger').removeClass('pcoded-trigger');
                    $(this).addClass('pcoded-trigger');
                  }
                } else {
                  if ($(this).hasClass('pcoded-trigger')) {
                    $(this).removeClass('pcoded-trigger');
                  } else {
                    $(this).closest('.pcoded-submenu').find('li.pcoded-trigger').removeClass('pcoded-trigger');
                    $(this).addClass('pcoded-trigger');
                  }
                }
              });
            }
          };

          break;

        case 'click':
          $('#' + oid + ' .pcoded-navbar .pcoded-hasmenu').removeClass('is-hover');
          $(".pcoded-submenu > li").on('click', function (e) {
            e.stopPropagation();
            var str = $(this).closest('.pcoded-submenu').length;

            if (str === 0) {
              if ($(this).hasClass('pcoded-trigger')) {
                $(this).removeClass('pcoded-trigger');
              } else {
                $(this).closest('.pcoded-inner-navbar').find('li.pcoded-trigger').removeClass('pcoded-trigger');
                $(this).addClass('pcoded-trigger');
              }
            } else {
              if ($(this).hasClass('pcoded-trigger')) {
                $(this).removeClass('pcoded-trigger');
              } else {
                $(this).closest('.pcoded-submenu').find('li.pcoded-trigger').removeClass('pcoded-trigger');
                $(this).addClass('pcoded-trigger');
              }
            }
          });
          break;
      }
    },
    HandleMenuTrigger: function HandleMenuTrigger() {
      switch (settings.MenuTrigger) {
        case 'hover':
          $('#' + oid + ' .pcoded-navbar').addClass('is-hover'); // Initialize

          var $window = $(window);
          var $dropdown = $(".pcoded-item > li");
          var currentSize = $window.width();
          var currentEvent = ''; // Attach current event on load

          currentSize >= 767 ? bindOne('hover') : bindOne('click'); // Atach window resize event

          $window.resize(function () {
            // get windows new size
            var newSize = $window.width(); // Exit if size is same

            if (currentSize == newSize) {
              return;
            } // Check if size changed, if its greater/smaller and which current event is attached so we dont attach multiple events


            if (newSize >= 767 && currentEvent != 'hover') {
              bindOne('hover');
            } else if (newSize < 767 && currentEvent != 'click') {
              bindOne('click');
            } // Update new size


            currentSize = newSize;
          });

          var bindOne = function bindOne(eventType) {
            if (eventType == 'hover') {
              // Update currentEvent
              currentEvent = eventType; // Make sure all previous events are removed and attach hover

              $dropdown.off('click').off('mouseenter mouseleave').hover(function () {
                $(this).addClass('pcoded-trigger');
              }, function () {
                $(this).removeClass('pcoded-trigger');
              });
            } else if (eventType == 'click') {
              // Update currentEvent
              currentEvent = eventType; // Make sure all previous events are removed and attach hover

              $dropdown.off('mouseenter mouseleave').off('click').on('click', function () {
                if ($(this).hasClass('pcoded-trigger')) {
                  $(this).removeClass('pcoded-trigger');
                } else {
                  $(this).closest('.pcoded-inner-navbar').find('li.pcoded-trigger').removeClass('pcoded-trigger');
                  $(this).addClass('pcoded-trigger');
                }
              });
            }
          };

          break;

        case 'click':
          $('#' + oid + ' .pcoded-navbar').removeClass('is-hover');
          $(".pcoded-item > li ").on('click', function () {
            if ($(this).hasClass('pcoded-trigger')) {
              $(this).removeClass('pcoded-trigger');
            } else {
              $(this).closest('.pcoded-inner-navbar').find('li.pcoded-trigger').removeClass('pcoded-trigger');
              $(this).addClass('pcoded-trigger');
            }
          });
          break;
      }
    },
    HandleMenuOnClick: function HandleMenuOnClick() {
      var totalwidth = $(window)[0].innerWidth;

      if (settings.themelayout === "vertical") {
        $('#mobile-collapse,.sidebar_toggle a, .pcoded-overlay-box,.menu-toggle a').on("click", function () {
          $(this).parent().find('.menu-icon').toggleClass("is-clicked");
          var dt = $('#' + oid).attr("pcoded-device-type");

          if (dt == "desktop") {
            var dmc = settings.onToggleVerticalMenu.desktop;
            var dm = settings.defaultVerticalMenu.desktop;
            var dn = $('#' + oid).attr("vertical-nav-type");

            if (dn == dm) {
              $('#' + oid).attr("vertical-nav-type", dmc);
            } else if (dn == dmc) {
              $('#' + oid).attr("vertical-nav-type", dm);
            } else {
              return false;
            }
          } else if (dt == "tablet") {
            var tmc = settings.onToggleVerticalMenu.tablet;
            var tm = settings.defaultVerticalMenu.tablet;
            var tn = $('#' + oid).attr("vertical-nav-type");

            if (tn == tm) {
              $('#' + oid).attr("vertical-nav-type", tmc);
            } else if (dn == dmc) {
              $('#' + oid).attr("vertical-nav-type", tm);
            }
          } else if (dt == "phone") {
            var pmc = settings.onToggleVerticalMenu.phone;
            var pm = settings.defaultVerticalMenu.phone;
            var pn = $('#' + oid).attr("vertical-nav-type");

            if (pn == pm) {
              $('#' + oid).attr("vertical-nav-type", pmc);
            } else if (dn == dmc) {
              $('#' + oid).attr("vertical-nav-type", pm);
            }
          }

          $('.pcoded').addClass("pcoded-toggle-animate");
          setTimeout(function () {
            $('.pcoded').removeClass("pcoded-toggle-animate");
          }, 250);
        });
      } else if (settings.themelayout === "horizontal") {
        if (totalwidth >= 768 && totalwidth <= 992) {
          $('#' + oid).attr("pcoded-device-type", "tablet");
        } else if (totalwidth < 768) {
          $('#' + oid).attr("pcoded-device-type", "phone");
        } else {
          $('#' + oid).attr("pcoded-device-type", "desktop");
        }
      }
    },
    Handlecomponetheight: function Handlecomponetheight() {
      function setHeight() {
        var WH = $(window).height();
        var HH = $(".pcoded-header").innerHeight();
        var NH = $(".pcoded-navbar").innerHeight();
        var FH = $(".pcoded-footer").innerHeight();
        var contentHH = WH - HH;
        var contentVH = WH - HH;
        var lpanelH = WH - HH; // if (settings.themelayout === "horizontal" ) {
        // 	$(".pcoded-navbar").css('height', contentHH);
        // } else if (settings.themelayout === "vertical" ) {
        // 	if ( contentVH >= lpanelH ){
        // 		$(".pcoded-navbar").css('height', contentVH);
        // 	}else {
        // 		$(".pcoded-navbar").css('height', lpanelH);
        // 	}
        // } else {
        // 	return false;
        // }
      }

      ;
      setHeight();
      $(window).resize(function () {
        setHeight();
      });
    },
    HandleDeviceType: function HandleDeviceType() {
      function devicesize() {
        var totalwidth = $(window)[0].innerWidth;

        if (settings.themelayout === "vertical") {
          if (totalwidth >= 768 && totalwidth <= 992) {
            $('#' + oid).attr("pcoded-device-type", "tablet");
            var value = settings.defaultVerticalMenu.tablet;

            if (value != undefined && value != "") {
              $('#' + oid).attr("vertical-nav-type", value);
            } else {
              $('#' + oid).attr("vertical-nav-type", "collapsed");
            }

            var ev = settings.verticalMenueffect.tablet;

            if (ev != undefined && value != "") {
              $('#' + oid).attr("vertical-effect", ev);
            } else {
              $('#' + oid).attr("vertical-effect", "shrink");
            }
          } else if (totalwidth < 768) {
            $('#' + oid).attr("pcoded-device-type", "phone");
            var value = settings.defaultVerticalMenu.phone;

            if (value != undefined && value != "") {
              $('#' + oid).attr("vertical-nav-type", value);
            } else {
              $('#' + oid).attr("vertical-nav-type", "offcanvas");
            }

            var ev = settings.verticalMenueffect.phone;

            if (ev != undefined && value != "") {
              $('#' + oid).attr("vertical-effect", ev);
            } else {
              $('#' + oid).attr("vertical-effect", "push");
            }
          } else {
            $('#' + oid).attr("pcoded-device-type", "desktop");
            var value = settings.defaultVerticalMenu.desktop;

            if (value != undefined && value != "") {
              $('#' + oid).attr("vertical-nav-type", value);
            } else {
              $('#' + oid).attr("vertical-nav-type", "expanded");
            }

            var ev = settings.verticalMenueffect.desktop;

            if (ev != undefined && value != "") {
              $('#' + oid).attr("vertical-effect", ev);
            } else {
              $('#' + oid).attr("vertical-effect", "shrink");
            }
          }
        } else if (settings.themelayout === "horizontal") {
          if (totalwidth >= 768 && totalwidth <= 992) {
            $('#' + oid).attr("pcoded-device-type", "tablet");
          } else if (totalwidth < 768) {
            $('#' + oid).attr("pcoded-device-type", "phone");
          } else {
            $('#' + oid).attr("pcoded-device-type", "desktop");
          }
        }
      }

      ;
      devicesize();
      $(window).resize(function () {
        tw = $(window)[0].innerWidth;
        dt = $('#' + oid).attr('pcoded-device-type');

        if (dt == 'desktop' && tw < 992) {
          devicesize();
        } else if (dt == 'phone' && tw > 768) {
          devicesize();
        } else if (dt == 'tablet' && tw < 768) {
          devicesize();
        } else if (dt == 'tablet' && tw > 992) {
          devicesize();
        }
      });
    },
    HandleMenulayout: function HandleMenulayout() {
      if (settings.themelayout === "vertical") {
        switch (settings.verticalMenulayout) {
          case 'wide':
            $('#' + oid).attr("vertical-layout", "wide");
            break;

          case 'box':
            $('#' + oid).attr("vertical-layout", "box");
            break;

          case 'widebox':
            $('#' + oid).attr("vertical-layout", "widebox");
            break;

          default:
        }
      } else if (settings.themelayout === "horizontal") {
        switch (settings.horizontalMenulayout) {
          case 'wide':
            $('#' + oid).attr("horizontal-layout", "wide");
            break;

          case 'box':
            $('#' + oid).attr("horizontal-layout", "box");
            break;

          case 'widebox':
            $('#' + oid).attr("horizontal-layout", "widebox");
            break;

          default:
        }
      } else {
        return false;
      }
    },
    HandlehorizontalMenuplacement: function HandlehorizontalMenuplacement() {
      if (settings.themelayout === "horizontal") {
        switch (settings.horizontalMenuplacement) {
          case 'bottom':
            $('#' + oid).attr("horizontal-placement", "bottom");
            break;

          case 'top':
            $('#' + oid).attr("horizontal-placement", "top");
            break;

          default:
        }
      } else {
        $('#' + oid).removeAttr("horizontal-placement");
      }
    },
    HandleverticalMenuplacement: function HandleverticalMenuplacement() {
      if (settings.themelayout === "vertical") {
        switch (settings.verticalMenuplacement) {
          case 'left':
            $('#' + oid).attr("vertical-placement", "left");
            break;

          case 'right':
            $('#' + oid).attr("vertical-placement", "right");
            break;

          default:
        }
      } else {
        $('#' + oid).removeAttr("vertical-placement");
      }
    },
    Handlethemelayout: function Handlethemelayout() {
      switch (settings.themelayout) {
        case 'horizontal':
          $('#' + oid).attr("theme-layout", "horizontal");
          break;

        case 'vertical':
          $('#' + oid).attr("theme-layout", "vertical");
          break;

        default:
      }
    }
  };
  PcodedMenu.PcodedMenuInit();
}; // menu [ vertical ]


$(window).scroll(function () {
  if ($(this).scrollTop() > 80) {
    $('.pcoded[theme-layout="vertical"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('position', 'fixed');
    $('.pcoded[theme-layout="vertical"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('top', 0);
  } else {
    $('.pcoded[theme-layout="vertical"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('position', 'absolute');
    $('.pcoded[theme-layout="vertical"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('top', 'auto');
  }
}); // menu [ horizontal ]

$(window).scroll(function () {
  if ($(this).scrollTop() > 80) {
    $('.pcoded[theme-layout="horizontal"][pcoded-device-type="desktop"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('position', 'fixed');
    $('.pcoded[theme-layout="horizontal"][pcoded-device-type="desktop"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('top', 0);
  } else {
    $('.pcoded[theme-layout="horizontal"][pcoded-device-type="desktop"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('position', 'absolute');
    $('.pcoded[theme-layout="horizontal"][pcoded-device-type="desktop"] .pcoded-navbar[pcoded-navbar-position="fixed"][pcoded-header-position="relative"]').css('top', 'auto');
  }
});

/***/ }),

/***/ "./resources/files/assets/js/script.js":
/*!*********************************************!*\
  !*** ./resources/files/assets/js/script.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


$(document).ready(function () {
  var $window = $(window); //add id to main menu for mobile menu start

  var getBody = $("body");
  var bodyClass = getBody[0].className;
  $(".main-menu").attr('id', bodyClass); //add id to main menu for mobile menu end
  // card js start

  $(".card-header-right .close-card").on('click', function () {
    var $this = $(this);
    $this.parents('.card').animate({
      'opacity': '0',
      '-webkit-transform': 'scale3d(.3, .3, .3)',
      'transform': 'scale3d(.3, .3, .3)'
    });
    setTimeout(function () {
      $this.parents('.card').remove();
    }, 800);
  });
  $(".card-header-right .minimize-card").on('click', function () {
    var $this = $(this);
    var port = $($this.parents('.card'));
    var card = $(port).children('.card-block').slideToggle();
    $(this).toggleClass("icon-minus").fadeIn('slow');
    $(this).toggleClass("icon-plus").fadeIn('slow');
  });
  $(".card-header-right .full-card").on('click', function () {
    var $this = $(this);
    var port = $($this.parents('.card'));
    port.toggleClass("full-card");
    $(this).toggleClass("icon-maximize");
    $(this).toggleClass("icon-minimize");
  });
  $("#more-details").on('click', function () {
    $(".more-details").slideToggle(500);
  });
  $(".mobile-options").on('click', function () {
    $(".navbar-container .nav-right").slideToggle('slow');
  }); // card js end

  $.mCustomScrollbar.defaults.axis = "yx";
  $("#styleSelector .style-cont").slimScroll({
    setTop: "10px",
    height: "calc(100vh - 440px)"
  });
  $(".main-menu").mCustomScrollbar({
    setTop: "10px",
    setHeight: "calc(100% - 80px)"
  });
  /*chatbar js start*/

  /*chat box scroll*/

  var a = $(window).height() - 80;
  $(".main-friend-list").slimScroll({
    height: a,
    allowPageScroll: false,
    wheelStep: 5,
    color: '#1b8bf9'
  }); // search

  $("#search-friends").on("keyup", function () {
    var g = $(this).val().toLowerCase();
    $(".userlist-box .media-body .chat-header").each(function () {
      var s = $(this).text().toLowerCase();
      $(this).closest('.userlist-box')[s.indexOf(g) !== -1 ? 'show' : 'hide']();
    });
  }); // open chat box

  $('.displayChatbox').on('click', function () {
    var my_val = $('.pcoded').attr('vertical-placement');

    if (my_val == 'right') {
      var options = {
        direction: 'left'
      };
    } else {
      var options = {
        direction: 'right'
      };
    }

    $('.showChat').toggle('slide', options, 500);
  }); //open friend chat

  $('.userlist-box').on('click', function () {
    var my_val = $('.pcoded').attr('vertical-placement');

    if (my_val == 'right') {
      var options = {
        direction: 'left'
      };
    } else {
      var options = {
        direction: 'right'
      };
    }

    $('.showChat_inner').toggle('slide', options, 500);
  }); //back to main chatbar

  $('.back_chatBox').on('click', function () {
    var my_val = $('.pcoded').attr('vertical-placement');

    if (my_val == 'right') {
      var options = {
        direction: 'left'
      };
    } else {
      var options = {
        direction: 'right'
      };
    }

    $('.showChat_inner').toggle('slide', options, 500);
    $('.showChat').css('display', 'block');
  }); // /*chatbar js end*/

  $(".search-btn").on('click', function () {
    $(".main-search").addClass('open');
    $('.main-search .form-control').animate({
      'width': '200px'
    });
  });
  $(".search-close").on('click', function () {
    $('.main-search .form-control').animate({
      'width': '0'
    });
    setTimeout(function () {
      $(".main-search").removeClass('open');
    }, 300);
  });
  $('#mobile-collapse i').addClass('icon-toggle-right');
  $('#mobile-collapse').on('click', function () {
    $('#mobile-collapse i').toggleClass('icon-toggle-right');
    $('#mobile-collapse i').toggleClass('icon-toggle-left');
  });
});
$(document).ready(function () {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
  $('.theme-loader').fadeOut('slow', function () {
    $(this).remove();
  });
}); // toggle full screen

function toggleFullScreen() {
  var a = $(window).height() - 10;

  if (!document.fullscreenElement && // alternative standard method
  !document.mozFullScreenElement && !document.webkitFullscreenElement) {
    // current working methods
    if (document.documentElement.requestFullscreen) {
      document.documentElement.requestFullscreen();
    } else if (document.documentElement.mozRequestFullScreen) {
      document.documentElement.mozRequestFullScreen();
    } else if (document.documentElement.webkitRequestFullscreen) {
      document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.cancelFullScreen) {
      document.cancelFullScreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
    }
  }

  $('.full-screen').toggleClass('icon-maximize');
  $('.full-screen').toggleClass('icon-minimize');
}
/* --------------------------------------------------------
        Color picker - demo only
        --------------------------------------------------------   */


$('#styleSelector').append('' + '<div class="selector-toggle">' + '<a href="javascript:void(0)"></a>' + '</div>' + '<ul>' + '<li>' + '<p class="selector-title main-title st-main-title"><b>Adminty </b>Customizer</p>' + '<span class="text-muted">Live customizer with tons of options</span>' + '</li>' + '<li>' + '<p class="selector-title">Main layouts</p>' + '</li>' + '<li>' + '<div class="theme-color">' + '<a href="#" class="navbar-theme" navbar-theme="themelight1"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="navbar-theme" navbar-theme="theme1"><span class="head"></span><span class="cont"></span></a>' + '</div>' + '</li>' + '</ul>' + '<div class="style-cont m-t-10">' + '<ul class="nav nav-tabs  tabs" role="tablist">' + '<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sel-layout" role="tab">Layouts</a></li>' + '<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sel-sidebar-setting" role="tab">Sidebar Settings</a></li>' + '</ul>' + '<div class="tab-content tabs">' + '<div class="tab-pane active" id="sel-layout" role="tabpanel">' + '<ul>' + '<li class="theme-option">' + '<div class="checkbox-fade fade-in-primary">' + '<label>' + '<input type="checkbox" value="false" id="sidebar-position" name="sidebar-position" checked>' + '<span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span>' + '<span>Fixed Sidebar Position</span>' + '</label>' + '</div>' + '</li>' + '<li class="theme-option">' + '<div class="checkbox-fade fade-in-primary">' + '<label>' + '<input type="checkbox" value="false" id="header-position" name="header-position" checked>' + '<span class="cr"><i class="cr-icon feather icon-check txt-success f-w-600"></i></span>' + '<span>Fixed Header Position</span>' + '</label>' + '</div>' + '</li>' + '</ul>' + '</div>' + '<div class="tab-pane" id="sel-sidebar-setting" role="tabpanel">' + '<ul>' + '<li class="theme-option">' + '<p class="sub-title drp-title">Menu Type</p>' + '<div class="form-radio" id="menu-effect">' + '<div class="radio radio-inverse radio-inline" data-toggle="tooltip" title="simple icon">' + '<label>' + '<input type="radio" name="radio" value="st6" onclick="handlemenutype(this.value)" checked="true">' + '<i class="helper"></i><span class="micon st6"><i class="feather icon-command"></i></span>' + '</label>' + '</div>' + '<div class="radio  radio-primary radio-inline" data-toggle="tooltip" title="color icon">' + '<label>' + '<input type="radio" name="radio" value="st5" onclick="handlemenutype(this.value)">' + '<i class="helper"></i><span class="micon st5"><i class="feather icon-command"></i></span>' + '</label>' + '</div>' + '</div>' + '</li>' + '<li class="theme-option">' + '<p class="sub-title drp-title">SideBar Effect</p>' + '<select id="vertical-menu-effect" class="form-control minimal">' + '<option name="vertical-menu-effect" value="shrink">shrink</option>' + '<option name="vertical-menu-effect" value="overlay">overlay</option>' + '<option name="vertical-menu-effect" value="push">Push</option>' + '</select>' + '</li>' + '<li class="theme-option">' + '<p class="sub-title drp-title">Hide/Show Border</p>' + '<select id="vertical-border-style" class="form-control minimal">' + '<option name="vertical-border-style" value="solid">Style 1</option>' + '<option name="vertical-border-style" value="dotted">Style 2</option>' + '<option name="vertical-border-style" value="dashed">Style 3</option>' + '<option name="vertical-border-style" value="none">No Border</option>' + '</select>' + '</li>' + '<li class="theme-option">' + '<p class="sub-title drp-title">Drop-Down Icon</p>' + '<select id="vertical-dropdown-icon" class="form-control minimal">' + '<option name="vertical-dropdown-icon" value="style1">Style 1</option>' + '<option name="vertical-dropdown-icon" value="style2">style 2</option>' + '<option name="vertical-dropdown-icon" value="style3">style 3</option>' + '</select>' + '</li>' + '<li class="theme-option">' + '<p class="sub-title drp-title">Sub Menu Drop-down Icon</p>' + '<select id="vertical-subitem-icon" class="form-control minimal">' + '<option name="vertical-subitem-icon" value="style1">Style 1</option>' + '<option name="vertical-subitem-icon" value="style2">style 2</option>' + '<option name="vertical-subitem-icon" value="style3">style 3</option>' + '<option name="vertical-subitem-icon" value="style4">style 4</option>' + '<option name="vertical-subitem-icon" value="style5">style 5</option>' + '<option name="vertical-subitem-icon" value="style6">style 6</option>' + '</select>' + '</li>' + '</ul>' + '</div>' + '<ul>' + '<li>' + '<p class="selector-title">Header Brand color</p>' + '</li>' + '<li class="theme-option">' + '<div class="theme-color">' + '<a href="#" class="logo-theme" logo-theme="theme1"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="logo-theme" logo-theme="theme2"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="logo-theme" logo-theme="theme3"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="logo-theme" logo-theme="theme4"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="logo-theme" logo-theme="theme5"><span class="head"></span><span class="cont"></span></a>' + '</div>' + '</li>' + '<li>' + '<p class="selector-title">Header color</p>' + '</li>' + '<li class="theme-option">' + '<div class="theme-color">' + '<a href="#" class="header-theme" header-theme="theme1"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="header-theme" header-theme="theme2"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="header-theme" header-theme="theme3"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="header-theme" header-theme="theme4"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="header-theme" header-theme="theme5"><span class="head"></span><span class="cont"></span></a>' + '<a href="#" class="header-theme" header-theme="theme6"><span class="head"></span><span class="cont"></span></a>' + '</div>' + '</li>' + '<li>' + '<p class="selector-title">Active link color</p>' + '</li>' + '<li class="theme-option">' + '<div class="theme-color">' + '<a href="#" class="active-item-theme small" active-item-theme="theme1">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme2">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme3">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme4">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme5">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme6">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme7">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme8">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme9">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme10">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme11">&nbsp;</a>' + '<a href="#" class="active-item-theme small" active-item-theme="theme12">&nbsp;</a>' + '</div>' + '</li>' + '<li>' + '<p class="selector-title">Menu Caption Color</p>' + '</li>' + '<li class="theme-option">' + '<div class="theme-color">' + '<a href="#" class="leftheader-theme small" lheader-theme="theme1">&nbsp;</a>' + '<a href="#" class="leftheader-theme small" lheader-theme="theme2">&nbsp;</a>' + '<a href="#" class="leftheader-theme small" lheader-theme="theme3">&nbsp;</a>' + '<a href="#" class="leftheader-theme small" lheader-theme="theme4">&nbsp;</a>' + '<a href="#" class="leftheader-theme small" lheader-theme="theme5">&nbsp;</a>' + '<a href="#" class="leftheader-theme small" lheader-theme="theme6">&nbsp;</a>' + '</div>' + '</li>' + '</ul>' + '</div>' + '</div>' + '<ul>' + '<li>' + '<a href="http://html.codedthemes.com/Adminty/doc" target="_blank" class="btn btn-primary btn-block m-r-15 m-t-5 m-b-10">Online Documentation</a>' + '</li>' + '<li class="text-center">' + '<span class="text-center f-18 m-t-15 m-b-15 d-block">Thank you for sharing !</span>' + '<a href="#!" target="_blank" class="btn btn-facebook soc-icon m-b-20"><i class="feather icon-facebook"></i></a>' + '<a href="#!" target="_blank" class="btn btn-twitter soc-icon m-l-20 m-b-20"><i class="feather icon-twitter"></i></a>' + '</li>' + '</ul>' + '');

/***/ }),

/***/ "./resources/files/assets/js/vartical-layout.min.js":
/*!**********************************************************!*\
  !*** ./resources/files/assets/js/vartical-layout.min.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function handlemenutype(e) {
  $(".pcoded").attr("nav-type", e);
}

$(document).ready(function () {
  $("#pcoded").pcodedmenu({
    themelayout: "vertical",
    verticalMenuplacement: "left",
    verticalMenulayout: "wide",
    MenuTrigger: "click",
    SubMenuTrigger: "click",
    activeMenuClass: "active",
    ThemeBackgroundPattern: "pattern4",
    HeaderBackground: "theme1",
    LHeaderBackground: "theme1",
    NavbarBackground: "theme1",
    ActiveItemBackground: "theme1",
    SubItemBackground: "theme2",
    ActiveItemStyle: "style0",
    ItemBorder: !0,
    ItemBorderStyle: "none",
    SubItemBorder: !0,
    DropDownIconStyle: "style1",
    menutype: "st6",
    freamtype: "theme1",
    layouttype: "light",
    FixedNavbarPosition: !0,
    FixedHeaderPosition: !0,
    collapseVerticalLeftHeader: !0,
    VerticalSubMenuItemIconStyle: "style1",
    VerticalNavigationView: "view1",
    verticalMenueffect: {
      desktop: "shrink",
      tablet: "overlay",
      phone: "overlay"
    },
    defaultVerticalMenu: {
      desktop: "expanded",
      tablet: "offcanvas",
      phone: "offcanvas"
    },
    onToggleVerticalMenu: {
      desktop: "offcanvas",
      tablet: "expanded",
      phone: "expanded"
    }
  }), function () {
    $(".theme-color > a.fream-type").on("click", function () {
      var e = $(this).attr("fream-type");
      $(".pcoded").attr("fream-type", e), $(".pcoded-header").attr("header-theme", "themelight" + e), $(".pcoded-navbar").attr("navbar-theme", "theme" + e), $(".navbar-logo").attr("logo-theme", "theme" + e);
    });
  }(), function () {
    $(".theme-color > a.Layout-type").on("click", function () {
      var e = $(this).attr("layout-type");
      $(".pcoded").attr("layout-type", e), "dark" == e && ($(".pcoded-header").attr("header-theme", "theme6"), $(".pcoded-navbar").attr("navbar-theme", "theme1"), $(".navbar-logo").attr("logo-theme", "theme6"), $("body").addClass("dark")), "light" == e && ($(".pcoded-header").attr("header-theme", "theme1"), $(".pcoded-navbar").attr("navbar-theme", "themelight1"), $(".navbar-logo").attr("logo-theme", "theme1"), $("body").removeClass("dark"));
    });
  }(), function () {
    $(".theme-color > a.logo-theme").on("click", function () {
      var e = $(this).attr("logo-theme");
      $(".navbar-logo").attr("logo-theme", e);
    });
  }(), function () {
    $(".theme-color > a.leftheader-theme").on("click", function () {
      var e = $(this).attr("lheader-theme");
      $(".pcoded-navigatio-lavel").attr("menu-title-theme", e);
    });
  }(), function () {
    $(".theme-color > a.header-theme").on("click", function () {
      var e = $(this).attr("header-theme");
      $(".pcoded-header").attr("header-theme", e), $(".navbar-logo").attr("logo-theme", e);
    });
  }(), function () {
    $(".theme-color > a.navbar-theme").on("click", function () {
      var e = $(this).attr("navbar-theme");
      $(".pcoded-navbar").attr("navbar-theme", e);
    });
  }(), function () {
    $(".theme-color > a.active-item-theme").on("click", function () {
      var e = $(this).attr("active-item-theme");
      $(".pcoded-navbar").attr("active-item-theme", e);
    });
  }(), function () {
    $(".theme-color > a.sub-item-theme").on("click", function () {
      var e = $(this).attr("sub-item-theme");
      $(".pcoded-navbar").attr("sub-item-theme", e);
    });
  }(), function () {
    $(".theme-color > a.themebg-pattern").on("click", function () {
      var e = $(this).attr("themebg-pattern");
      $("body").attr("themebg-pattern", e);
    });
  }(), function () {
    $("#navigation-view").val("view1").on("change", function (e) {
      e = $(this).val(), $(".pcoded").attr("vnavigation-view", e);
    });
  }(), function () {
    $("#theme-layout").change(function () {
      $(this).is(":checked") ? ($(".pcoded").attr("vertical-layout", "box"), $("#bg-pattern-visiblity").removeClass("d-none")) : ($(".pcoded").attr("vertical-layout", "wide"), $("#bg-pattern-visiblity").addClass("d-none"));
    });
  }(), function () {
    $("#vertical-menu-effect").val("shrink").on("change", function (e) {
      e = $(this).val(), $(".pcoded").attr("vertical-effect", e);
    });
  }(), function () {
    $("#vertical-navbar-placement").val("left").on("change", function (e) {
      e = $(this).val(), $(".pcoded").attr("vertical-placement", e), $(".pcoded-navbar").attr("pcoded-navbar-position", "absolute"), $(".pcoded-header .pcoded-left-header").attr("pcoded-lheader-position", "relative");
    });
  }(), function () {
    $("#vertical-activeitem-style").val("style1").on("change", function (e) {
      e = $(this).val(), $(".pcoded-navbar").attr("active-item-style", e);
    });
  }(), function () {
    $("#vertical-item-border").change(function () {
      $(this).is(":checked") ? $(".pcoded-navbar .pcoded-item").attr("item-border", "false") : $(".pcoded-navbar .pcoded-item").attr("item-border", "true");
    });
  }(), function () {
    $("#vertical-subitem-border").change(function () {
      $(this).is(":checked") ? $(".pcoded-navbar .pcoded-item").attr("subitem-border", "false") : $(".pcoded-navbar .pcoded-item").attr("subitem-border", "true");
    });
  }(), function () {
    $("#vertical-border-style").val("solid").on("change", function (e) {
      e = $(this).val(), $(".pcoded-navbar .pcoded-item").attr("item-border-style", e);
    });
  }(), function () {
    $("#vertical-dropdown-icon").val("style1").on("change", function (e) {
      e = $(this).val(), $(".pcoded-navbar .pcoded-hasmenu").attr("dropdown-icon", e);
    });
  }(), function () {
    $("#vertical-subitem-icon").val("style5").on("change", function (e) {
      e = $(this).val(), $(".pcoded-navbar .pcoded-hasmenu").attr("subitem-icon", e);
    });
  }(), function () {
    $("#sidebar-position").change(function () {
      $(this).is(":checked") ? ($(".pcoded-navbar").attr("pcoded-navbar-position", "fixed"), $(".pcoded-header .pcoded-left-header").attr("pcoded-lheader-position", "fixed")) : ($(".pcoded-navbar").attr("pcoded-navbar-position", "absolute"), $(".pcoded-header .pcoded-left-header").attr("pcoded-lheader-position", "relative"));
    });
  }(), function () {
    $("#header-position").change(function () {
      $(this).is(":checked") ? ($(".pcoded-header").attr("pcoded-header-position", "fixed"), $(".pcoded-navbar").attr("pcoded-header-position", "fixed"), $(".pcoded-main-container").css("margin-top", $(".pcoded-header").outerHeight())) : ($(".pcoded-header").attr("pcoded-header-position", "relative"), $(".pcoded-navbar").attr("pcoded-header-position", "relative"), $(".pcoded-main-container").css("margin-top", "0px"));
    });
  }(), function () {
    $("#collapse-left-header").change(function () {
      $(this).is(":checked") ? ($(".pcoded-header, .pcoded ").removeClass("iscollapsed"), $(".pcoded-header, .pcoded").addClass("nocollapsed")) : ($(".pcoded-header, .pcoded").addClass("iscollapsed"), $(".pcoded-header, .pcoded").removeClass("nocollapsed"));
    });
  }();
}), handlemenutype("st2");

/***/ }),

/***/ 1:
/*!************************************************************************************************************************************************!*\
  !*** multi ./resources/files/assets/js/pcoded.min.js ./resources/files/assets/js/vartical-layout.min.js ./resources/files/assets/js/script.js ***!
  \************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/andycaicedo/Documents/projects/pacificode/resources/files/assets/js/pcoded.min.js */"./resources/files/assets/js/pcoded.min.js");
__webpack_require__(/*! /Users/andycaicedo/Documents/projects/pacificode/resources/files/assets/js/vartical-layout.min.js */"./resources/files/assets/js/vartical-layout.min.js");
module.exports = __webpack_require__(/*! /Users/andycaicedo/Documents/projects/pacificode/resources/files/assets/js/script.js */"./resources/files/assets/js/script.js");


/***/ })

/******/ });