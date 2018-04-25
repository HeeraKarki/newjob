$(document).ready(function () {

    // Time Picker
    $('#timepicker').timepicker({
        defaultTIme: false,
        icons: {
            up: 'mdi mdi-chevron-up',
            down: 'mdi mdi-chevron-down'
        }
    });
    $('#timepicker2').timepicker({
        showMeridian: false,
        icons: {
            up: 'mdi mdi-chevron-up',
            down: 'mdi mdi-chevron-down'
        }
    });
    $('#timepicker3').timepicker({
        minuteStep: 15,
        icons: {
            up: 'mdi mdi-chevron-up',
            down: 'mdi mdi-chevron-down'
        }
    });



    // Date Picker
    $('#datepicker').datepicker();
    $('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    $('.min_cal').datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });
    $('.mon_cal').datepicker({
        format: "m-yyyy",
        viewMode: "months",
        minViewMode: "months"
    });
    $('#datepicker-inline').datepicker();
    $('#datepicker-multiple-date').datepicker({
        format: "mm/dd/yyyy",
        clearBtn: true,
        multidate: true,
        multidateSeparator: ","
    });
    $('#date-range').datepicker({
        toggleActive: true
    });



});