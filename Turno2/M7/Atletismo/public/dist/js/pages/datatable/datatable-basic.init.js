/*************************************************************************************/
// -->Template Name: Bootstrap Press Admin
// -->Author: Themedesigner
// -->Email: niravjoshi87@gmail.com
// -->File: datatable_basic_init
/*************************************************************************************/

/****************************************
 *         Table Responsive             *
 ****************************************/
$(function () {
  $("#config-table").DataTable({
    responsive: true,
  });
});

/****************************************
 *       Basic Table                   *
 ****************************************/
$("#zero_config").DataTable({
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-PT.json',
    }
});

/****************************************
 *       Basic Table                   *
 ****************************************/
$("#listarprovas").DataTable({
  language: {
      url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-PT.json',
  }
});

/****************************************
 *       Basic Table                   *
 ****************************************/
$("#inscricoes").DataTable({
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-PT.json',
    },
    searching: false, paging: false, info: false,
    "order": [],
    "columnDefs": [ {
      "targets"  : 'no-sort',
      "orderable": false,
    },
    {
      "targets": [4],
      "type": "date",

    }],
    order: [[4, "asc"]],
});

$("#consultar").DataTable({
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-PT.json',
    },
    searching: false, paging: false, info: false,
    "columnDefs": [ {
        "targets"  : 'no-sort',
        "orderable": false,
    },
    {
        "targets": [1],
        "type": "date",

    }],
    order: [[0, "asc"]],
});

$("#addresultados").DataTable({
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-PT.json',
    },
    searching: false, paging: false, info: false,
    "columnDefs": [ {
        "targets"  : 'no-sort',
        "orderable": false,
    }],
    "order": [[ 2, 'asc' ], [ 4, 'asc' ]]
});

$("#listarresultados").DataTable({
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-PT.json',
    },
    searching: false, paging: false, info: false,
    "columnDefs": [ {
        "targets"  : 'no-sort',
        "orderable": false,
    }],
    "order": [[ 2, 'asc' ]]
});

/****************************************
 *       Default Order Table           *
 ****************************************/
$("#default_order").DataTable({
  order: [[3, "desc"]],
});

/****************************************
 *       Multi-column Order Table      *
 ****************************************/
$("#multi_col_order").DataTable({
  columnDefs: [
    {
      targets: [0],
      orderData: [0, 1],
    },
    {
      targets: [1],
      orderData: [1, 0],
    },
    {
      targets: [4],
      orderData: [4, 0],
    },
  ],
});

/****************************************
 *       Complex header Table          *
 ****************************************/
$("#complex_header").DataTable();

/****************************************
 *       DOM positioning Table         *
 ****************************************/
$("#DOM_pos").DataTable({
  dom: '<"top"i>rt<"bottom"flp><"clear">',
});

/****************************************
 *     alternative pagination Table    *
 ****************************************/
$("#alt_pagination").DataTable({
  pagingType: "full_numbers",
});

/****************************************
 *     vertical scroll Table    *
 ****************************************/
$("#scroll_ver").DataTable({
  scrollY: "300px",
  scrollCollapse: true,
  paging: false,
});

/****************************************
 * vertical scroll,dynamic height Table *
 ****************************************/
$("#scroll_ver_dynamic_hei").DataTable({
  scrollY: "50vh",
  scrollCollapse: true,
  paging: false,
});

/****************************************
 *     horizontal scroll Table    *
 ****************************************/
$("#scroll_hor").DataTable({
  scrollX: true,
});

/****************************************
 * vertical & horizontal scroll Table  *
 ****************************************/
$("#scroll_ver_hor").DataTable({
  scrollY: 300,
  scrollX: true,
});

/****************************************
 * Language - Comma decimal place Table  *
 ****************************************/
$("#lang_comma_deci").DataTable({
  language: {
    decimal: ",",
    thousands: ".",
  },
});

/****************************************
 *         Language options Table      *
 ****************************************/
$("#lang_opt").DataTable({
  language: {
    lengthMenu: "Display _MENU_ records per page",
    zeroRecords: "Nothing found - sorry",
    info: "Showing page _PAGE_ of _PAGES_",
    infoEmpty: "No records available",
    infoFiltered: "(filtered from _MAX_ total records)",
  },
});
