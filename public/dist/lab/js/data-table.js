(function ($) {
    "use strict";
    $(function () {
        $("#myTable").DataTable({

            aLengthMenu: [
                [5, 10, 15, -1],
                [5, 10, 15, "All"],
            ],
            iDisplayLength: 10,
            language: {
                search: "",
                url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
            },
            processing: true,
            //serverSide: true,
            ajax: '/appoiment/table',
            columns: [
            {
                data: 'fullName',
                name: 'Paciente'
            },
            {
                data: 'nameExam',
                name: 'Examen'
            },
            {
                data: 'scheduled_date',
                name: 'Fecha'
            },
            {
                data: 'scheduled_time',
                name: 'Hora'
            },
            {
                data: 'status',
                name: 'Estado'
            },

            ]

        });
        $("#myTable").each(function () {
            var datatable = $(this);
            // SEARCH - Add the placeholder for Search and Turn this into in-line form control
            var search_input = datatable
                .closest(".dataTables_wrapper")
                .find("div[id$=_filter] input");
            search_input.attr("placeholder", "Search");
            search_input.removeClass("form-control-sm");
            // LENGTH - Inline-Form control
            var length_sel = datatable
                .closest(".dataTables_wrapper")
                .find("div[id$=_length] select");
            length_sel.removeClass("form-control-sm");
        });
    });
})(jQuery);
