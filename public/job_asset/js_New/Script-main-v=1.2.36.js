
/* Toggle Nav with Raw JavaScript */
// Set variables for key elements
var mainSrc = document.getElementById('src-show');
var srcToggle = document.getElementById('src-btn');

if (mainSrc != null) {
    // Start by adding the class "collapse" to the mainNav
    mainSrc.classList.add('collapsed');

    // Establish a function to toggle the class "collapse"
    function mainSrcToggle() {
        mainSrc.classList.toggle('collapsed');
    }

    // Add a click event to run the mainNavToggle function
    srcToggle.addEventListener('click', mainSrcToggle);
}

/*****************/


var mobShow = document.getElementById('mobile-show');
var mobToggle = document.getElementById('mobile-btn');

if (mobShow != null) {
    // Start by adding the class "collapse" to the mainNav
    mobShow.classList.add('collapsed');

    function mainMobShowToggle() {
        mobShow.classList.toggle('collapsed');
    }

    // Add a click event to run the mainNavToggle function
    mobToggle.addEventListener('click', mainMobShowToggle);
}



/**********************/


if (document.querySelectorAll('.slider-outer')[0] != undefined) {
    loadDesktopSlider();

    setInterval(function () {
        moveRight();
    }, 8000);
    var counter = 1;
}

function loadDesktopSlider() {

    var slideCount = document.querySelectorAll('.slider .slide-item').length;
    var slideWidth = document.querySelectorAll('.slider-outer')[0].offsetWidth;
    var slideHeight = document.querySelectorAll(".slider-outer")[0].offsetHeight;

    var sliderUlWidth = slideCount * slideWidth;
    document.querySelectorAll('.slider')[0].style.cssText = "width:" + sliderUlWidth + "px";

    for (var i = 0; i < slideCount; i++) {
        document.querySelectorAll('.slide-item')[i].style.cssText = "width:" + slideWidth + "px;height:" + slideHeight + "px";
    }

    document.querySelectorAll('.slider')[0].style.cssText = "";
}

function moveRight() {
    var slideCount = document.querySelectorAll('.slider .slide-item').length;
    var slideWidth = document.querySelectorAll('.slider-outer')[0].offsetWidth;

    var sliderUlWidth = slideCount * slideWidth;

    var slideNum = counter++
    if (slideNum < slideCount) {
        var transformSize = slideWidth * slideNum;

        document.querySelectorAll('.slider')[0].style.cssText =
          "width:" + sliderUlWidth + "px; -webkit-transition:all 800ms ease; -webkit-transform:translate3d(-" + transformSize + "px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(-" + transformSize + "px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(-" + transformSize + "px, 0px, 0px);transition:all 800ms ease; transform:translate3d(-" + transformSize + "px, 0px, 0px)";

    } else {
        counter = 1;
        document.querySelectorAll('.slider')[0].style.cssText = "width:" + sliderUlWidth + "px;-webkit-transition:all 800ms ease; -webkit-transform:translate3d(0px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(0px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(0px, 0px, 0px);transition:all 800ms ease; transform:translate3d(0px, 0px, 0px)";
    }

}


$(window).resize(function () {
    loadDesktopSlider();
    loadMobileSlider();
});



/********** mobile slider ***********/


if (document.querySelectorAll('.m-slider-outer')[0] != undefined) {
    loadMobileSlider();

    setInterval(function () {
        mmoveMobileRight();
    }, 8000);
    var mcounter = 1;
}

function loadMobileSlider() {

    var mslideCount = document.querySelectorAll('.m-slider .m-slide-item').length;
    var mslideWidth = document.querySelectorAll('.m-slider-outer')[0].offsetWidth;
    var mslideHeight = document.querySelectorAll(".m-slider-outer")[0].offsetHeight;

    var msliderUlWidth = mslideCount * mslideWidth;
    document.querySelectorAll('.m-slider')[0].style.cssText = "width:" + msliderUlWidth + "px";

    for (var i = 0; i < mslideCount; i++) {
        document.querySelectorAll('.m-slide-item')[i].style.cssText = "width:" + mslideWidth + "px;height:" + mslideHeight + "px";
    }

    document.querySelectorAll('.m-slider')[0].style.cssText = "";
}


function mmoveMobileRight() {
    var mslideCount = document.querySelectorAll('.m-slider .m-slide-item').length;
    var mslideWidth = document.querySelectorAll('.m-slider-outer')[0].offsetWidth;

    var msliderUlWidth = mslideCount * mslideWidth;

    var mslideNum = mcounter++
    if (mslideNum < mslideCount) {
        var mtransformSize = mslideWidth * mslideNum;
        document.querySelectorAll('.m-slider')[0].style.cssText =
            "width:" + msliderUlWidth + "px;"
            //"width:100%;"
            + " -webkit-transition:all 800ms ease; -webkit-transform:translate3d(-" + mtransformSize + "px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(-" + mtransformSize + "px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(-" + mtransformSize + "px, 0px, 0px);transition:all 800ms ease; transform:translate3d(-" + mtransformSize + "px, 0px, 0px)";

    } else {
        mcounter = 1;
        document.querySelectorAll('.m-slider')[0].style.cssText = "width:" + msliderUlWidth + "px;-webkit-transition:all 800ms ease; -webkit-transform:translate3d(0px, 0px, 0px);-moz-transition:all 800ms ease; -moz-transform:translate3d(0px, 0px, 0px);-o-transition:all 800ms ease; -o-transform:translate3d(0px, 0px, 0px);transition:all 800ms ease; transform:translate3d(0px, 0px, 0px)";
    }

}








/***************/


/***************/
(function(w, d) {
  var raf = w.requestAnimationFrame || w.setImmediate || function(c) { return setTimeout(c, 0); };

  function initEl(el) {
    if (el.hasOwnProperty('data-simple-scrollbar')) return;
    Object.defineProperty(el, 'data-simple-scrollbar', new SimpleScrollbar(el));
  }

  // Mouse drag handler
  function dragDealer(el, context) {
    var lastPageY;

    el.addEventListener('mousedown', function(e) {
      lastPageY = e.pageY;
      el.classList.add('ss-grabbed');
      d.body.classList.add('ss-grabbed');

      d.addEventListener('mousemove', drag);
      d.addEventListener('mouseup', stop);

      return false;
    });

    function drag(e) {
      var delta = e.pageY - lastPageY;
      lastPageY = e.pageY;

      raf(function() {
        context.el.scrollTop += delta / context.scrollRatio;
      });
    }

    function stop() {
      el.classList.remove('ss-grabbed');
      d.body.classList.remove('ss-grabbed');
      d.removeEventListener('mousemove', drag);
      d.removeEventListener('mouseup', stop);
    }
  }

  // Constructor
  function ss(el) {
    this.target = el;
    
    this.bar = '<div class="ss-scroll">';

    this.wrapper = d.createElement('div');
    this.wrapper.setAttribute('class', 'ss-wrapper');

    this.el = d.createElement('div');
    this.el.setAttribute('class', 'ss-content');

    this.wrapper.appendChild(this.el);

    while (this.target.firstChild) {
      this.el.appendChild(this.target.firstChild);
    }
    this.target.appendChild(this.wrapper);

    this.target.insertAdjacentHTML('beforeend', this.bar);
    this.bar = this.target.lastChild;

    dragDealer(this.bar, this);
    this.moveBar();

    this.el.addEventListener('scroll', this.moveBar.bind(this));
    this.el.addEventListener('mouseenter', this.moveBar.bind(this));

  
    this.target.classList.add('ss-container'); 
      
    var css = window.getComputedStyle(el);
  	if (css['height'] === '0px' && css['max-height'] !== '0px') {
    	el.style.height = css['max-height'];
    }
  }

  ss.prototype = {
    moveBar: function(e) {
      var totalHeight = this.el.scrollHeight,
          ownHeight = this.el.clientHeight,
          _this = this;

      this.scrollRatio = ownHeight / totalHeight;

      raf(function() {
        // Hide scrollbar if no scrolling is possible
        if(_this.scrollRatio === 1) {
          _this.bar.classList.add('ss-hidden')
        } else {
          _this.bar.classList.remove('ss-hidden')
          _this.bar.style.cssText = 'height:' + (_this.scrollRatio) * 100 + '%; top:' + (_this.el.scrollTop / totalHeight ) * 100 + '%;right:-' + ((_this.target.clientWidth - _this.bar.clientWidth) - 25) + 'px;';
        }
      });
    }
  }

  function initAll() {
    var nodes = d.querySelectorAll('*[ss-container]');

    for (var i = 0; i < nodes.length; i++) {
      initEl(nodes[i]);
    }
  }

  d.addEventListener('DOMContentLoaded', initAll);
  ss.initEl = initEl;
  ss.initAll = initAll;

  w.SimpleScrollbar = ss;
})(window, document);





/**************************************************************  JobNet Menu *******************************************************************************/


var mobShow2 = document.getElementById('main-menu');
var mobToggle2 = document.getElementById('responsive-menu-top');

// Start by adding the class "collapse" to the mainNav
//mobShow2.classList.add('menu-collapse');

function mainMobShowToggleAfterLogin() {
    //mobShow2.classList.toggle('menu-collapse');

    if (document.getElementById('main-menu').classList.contains("menu-collapse")) {
        document.getElementById('main-menu').classList.remove("menu-collapse");
        document.getElementById('main-menu').classList.add("menu-collapsed");
    } else {
        document.getElementById('main-menu').classList.remove("menu-collapsed");
        document.getElementById('main-menu').classList.add("menu-collapse");
    }
}

if (document.getElementById('main-menu') != null) {
    // Add a click event to run the mainNavToggle function
    mobToggle2.addEventListener('click', mainMobShowToggleAfterLogin);
}




/************************************************************** End JobNet Menu *******************************************************************************/


/***************/



// Dropdown Menu
var dropdown = document.querySelectorAll('.dropdown');
var dropdownArray = Array.prototype.slice.call(dropdown, 0);
dropdownArray.forEach(function (el) {
    var button = el.querySelector('a[data-toggle="dropdown"]'),
			menu = el.querySelector('.dropdown-menu'),
			arrow = button.querySelector('i.icon-arrow');

    button.onclick = function (event) {
        if (!menu.hasClass('show')) {
            menu.classList.add('show');
            menu.classList.remove('hide');
            arrow.classList.add('open');
            arrow.classList.remove('close');
            event.preventDefault();
        }
        else {
            menu.classList.remove('show');
            menu.classList.add('hide');
            arrow.classList.remove('open');
            arrow.classList.add('close');
            event.preventDefault();
        }
    };
})

Element.prototype.hasClass = function (className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};








/*************/