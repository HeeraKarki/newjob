function monkeyPatchAutocomplete() {
    $.ui.autocomplete.prototype._renderItem;
    $.ui.autocomplete.prototype._renderItem = function(e, t) {
        if (t.value.indexOf("SearchKeyword") > -1) return $("<li class='keyword-focus' style='font-weight:bold;pointer-events: none'></li>").data("item.autocomplete", t).append("<a>" + t.value + "</a>").appendTo(e);
        var n = String(t.value).replace(new RegExp(this.term, "gi"), "<span class='GraySearchKeyword'>$&</span>");
        return $("<li style='font-weight:bold;'></li>").data("item.autocomplete", t).append("<a>" + n + "</a>").appendTo(e)
    }
}

function txtSearch_KeyDown(e) {
    13 == e.keyCode && (e.preventDefault(), $("#form1").attr("action", $("#hdnJobAdsList").val()), $("#__VIEWSTATE").remove(), $("#__EVENTTARGET").remove(), $("#__EVENTARGUMENT").remove(), $("#form1").submit())
}
$(document).ready(function() {
    $("#btnSearch, #btnSearch2").click(function(e) {
        e.preventDefault(), $("#form1").attr("action", $("#hdnJobAdsList").val()), $("#__VIEWSTATE").remove(), $("#__EVENTTARGET").remove(), $("#__EVENTARGUMENT").remove(), $("#form1").submit()
    });
    var e = "";
    "True" != e && (monkeyPatchAutocomplete(), $("#txtSearch").autocomplete({
        source: function(e, t) {
            ({
                SearchText: $("#txtSearch").val()
            });
            $.ajax({
                url: "/Ajax/AutocompletionHandler.ashx?SearchText=" + $("#txtSearch").val(),
                type: "POST",
                contentType: "application/json; charset=utf-8",
                dataFilter: function(e) {
                    return e
                },
                success: function(e) {
                    t($.map(e, function(e) {
                        return {
                            value: e
                        }
                    }))
                },
                error: function(e, t, n) {}
            })
        },
        select: function(e, t) {
            t.item.value.indexOf("SearchKeyword") > -1 && e.preventDefault()
        },
        focus: function(e, t) {
            t.item.value.indexOf("SearchKeyword") > -1 && e.preventDefault()
        },
        minLength: 1,
        open: function(e, t) {
            $(this).autocomplete("widget").css("width", $("#txtSearch").width() + 12)
        }
    })), "" != $("#BodyPlaceHolder_hidEmpCreditAlertText").val()
}), document.getElementById("txtSearch").addEventListener("keydown", function(e) {
    txtSearch_KeyDown(e)
});
var showAdvanceSearch = document.getElementById("toggle-more"),
    showAdvanceSearchMobile = document.getElementById("toggle-more-mobile"),
    showIdname = document.getElementById("advance-options"),
    arrow = document.getElementById("arrow"),
    arrowT = document.getElementById("arrow2"),
    dd = document.getElementById("DD"),
    ddT = document.getElementById("DDT"),
    screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
screenWidth > 1050 ? (showAdvanceSearch.addEventListener("click", function() {
    showIdname.classList.toggle("appear")
}, !1), showAdvanceSearch.addEventListener("click", function() {
    arrow.classList.toggle("fa-caret-up")
}, !1)) : 1050 > screenWidth && screenWidth > 600 ? (showAdvanceSearchMobile.addEventListener("click", function() {
    showIdname.classList.toggle("appear")
}, !1), showAdvanceSearchMobile.addEventListener("click", function() {
    arrowT.classList.toggle("fa-caret-up")
}, !1)) : 600 > screenWidth && (showAdvanceSearchMobile.addEventListener("click", function() {
        showIdname.classList.toggle("appear")
    }, !1), showAdvanceSearchMobile.addEventListener("click", function() {
        arrowT.classList.toggle("fa-caret-up")
    }, !1), showAdvanceSearchMobile.addEventListener("click", function() {
        dd.classList.toggle("show-dd")
    }, !1), showAdvanceSearchMobile.addEventListener("click", function() {
        ddT.classList.toggle("show-dd")
    }, !1));