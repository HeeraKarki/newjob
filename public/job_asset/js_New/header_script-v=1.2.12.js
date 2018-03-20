
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



document.getElementById("txtTopSearch").addEventListener("keydown", function (event) {
    if (event.keyCode == 13) {
        event.preventDefault();

        $('#txtSearch').val('');
        $('#form1').attr('action', $('#hdnJobAdsList').val());
        $('#__VIEWSTATE').remove();
        $('#__EVENTTARGET').remove();
        $('#__EVENTARGUMENT').remove();
        $('#form1').submit();
    }
});


/**********************/

