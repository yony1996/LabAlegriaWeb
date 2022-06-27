$(document).ready(function () {
    $(function () {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            showButtonPanel: false,
            changeMonth: false,
            changeYear: false,
            /*showOn: "button",
        buttonImage: "images/calendar.gif",
        buttonImageOnly: true,*/
            minDate: "+1D",
            maxDate: "+30D",
            defaultDate: new Date(),
            Finline: true,
        });
    });
    $.datepicker.regional["es"] = {
        closeText: "Cerrar",
        prevText: "<Ant",
        nextText: "Sig>",
        currentText: "Hoy",
        monthNames: [
            "Enero",
            "Febrero",
            "Marzo",
            "Abril",
            "Mayo",
            "Junio",
            "Julio",
            "Agosto",
            "Septiembre",
            "Octubre",
            "Noviembre",
            "Diciembre",
        ],
        monthNamesShort: [
            "Ene",
            "Feb",
            "Mar",
            "Abr",
            "May",
            "Jun",
            "Jul",
            "Ago",
            "Sep",
            "Oct",
            "Nov",
            "Dic",
        ],
        dayNames: [
            "Domingo",
            "Lunes",
            "Martes",
            "Miércoles",
            "Jueves",
            "Viernes",
            "Sábado",
        ],
        dayNamesShort: ["Dom", "Lun", "Mar", "Mié", "Juv", "Vie", "Sáb"],
        dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"],
        weekHeader: "Sm",
        dateFormat: "yy-mm-dd",
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: "",
    };
    $.datepicker.setDefaults($.datepicker.regional["es"]);
});
