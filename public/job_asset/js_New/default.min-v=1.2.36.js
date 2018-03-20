function close() {
    this.modal.style.display = "none", this.activepopup.style.display = "none"
}

function pageLoad() {
    "1" == $("#hdnShowPopUp").val() && (setCookie("visits", 1, 5), setTimeout(function() {
        modal.style.display = "block"
    }, 15e3), setTimeout(function() {
        activepopup.style.display = "block"
    }, 15e3))
}

function pageLoad1() {
    "1" == $("#hdnShowPopUp").val() && (setCookie("visits", 1, 5), modal.style.display = "block", activepopup.style.display = "block")
}

function mouseOut() {
    var e = getCookie("cokPop");
    "" != e ? (setCookie("cokPop", "Pop", 5), setTimeout(function() {
        modal.style.display = "block"
    }, 0)) : this.modal.style.display = "none"
}

function setCookie(e, t, o) {
    var a = new Date;
    a.setTime(a.getTime() + 60 * o * 60 * 1e3);
    var n = "expires=" + a.toGMTString();
    document.cookie = e + "=" + t + ";" + n + ";path=/"
}

function getCookie(e) {
    for (var t = e + "=", o = decodeURIComponent(document.cookie), a = o.split(";"), n = 0; n < a.length; n++) {
        for (var i = a[n];
             " " == i.charAt(0);) i = i.substring(1);
        if (0 == i.indexOf(t)) return i.substring(t.length, i.length)
    }
    return ""
}

function checkCookie() {
    var e = getCookie("visits");
    "" != e ? close() : pageLoad()
}

function checkCredit(url1, url2) {
    var userSysKey = $("#hdnUserSyskey").val();
    if ("" != userSysKey && "0" != userSysKey) {
        var credit = document.getElementById("hidCredit").value;
        eval(credit) > 0 ? window.location = url1 : (alert("Sorry, you have zero (0) credits available. Please request credits through your DASHBOARD - Request JobNet services."), window.location = url2)
    } else window.location = $("#hdnCheckCreditEmpLoginRedirect").val() + url1
}

function ClickManage() {
    $(window).width() > 991 ? ($(".ClickTrack-EmpProfile").attr("target", "_blank"), $(".ClickTrack-JobDetail").attr("target", "_blank"), $(".ClickTrack-TopJob").attr("target", "_blank"), $(".ClickTrack-Top1Employer").attr("target", "_blank"), $(".ClickTrack-SimilarJob").attr("target", "_blank"), $(".ClickTrack-Top2Employer").attr("target", "_blank"), $(".home-banner").attr("target", "_blank"), $(".ClickTrack-TopList").attr("target", "_blank")) : ($(".ClickTrack-EmpProfile").attr("target", "_self"), $(".ClickTrack-JobDetail").attr("target", "_self"), $(".ClickTrack-TopJob").attr("target", "_self"), $(".ClickTrack-Top1Employer").attr("target", "_self"), $(".ClickTrack-SimilarJob").attr("target", "_self"), $(".ClickTrack-Top2Employer").attr("target", "_self"), $(".home-banner").attr("target", "_self"), $(".ClickTrack-TopList").attr("target", "_self"))
}

function AllowNumbersOnly(e) {
    var t = e.which ? e.which : e.keyCode;
    t > 31 && (48 > t || t > 57) && e.preventDefault()
}
$(document).ready(function() {
    ClickManage()
});
var modal = document.getElementById("myModal");
 $(".flag-uk").click(function() {
    document.location.pathname.indexOf("/mm") > -1 ? document.location.href = document.location.pathname.replace("/mm", "") : document.location.pathname.indexOf("/en") <= -1 && (document.location.href = document.location.pathname)
}), $(".flag-mm").click(function() {
    document.location.pathname.indexOf("/en") > -1 ? document.location.href = document.location.pathname.replace("/en", "/mm") : document.location.pathname.indexOf("/mm") <= -1 && (document.location.href = "/mm" + document.location.pathname)
}), $(window).resize(function() {
    ClickManage()
}), document.getElementById("txtTopSearch").addEventListener("keydown", function(e) {
    13 == e.keyCode && (e.preventDefault(), $("#txtSearch").val(""), $("#form1").attr("action", $("#hdnJobAdsList").val()), $("#__VIEWSTATE").remove(), $("#__EVENTTARGET").remove(), $("#__EVENTARGUMENT").remove(), $("#form1").submit())
});