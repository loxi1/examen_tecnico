$( document ).ready(function() {
var handleDataTableButtons = function() {
  $("#tabletab_general").DataTable({
      fixedHeader: true,
      dom: "Bfrtip",
      buttons: [
          {
              extend: "copy",
              className: "btn-sm"
          },
          {
              extend: "excel",
              className: "btn-sm",
              filename: nombre
          },
          {
          extend: "pdfHtml5",
              className: "btn-sm",
              filename: nombre,
              pageSize: 'A4'
          },
          {
              extend: "print",
              className: "btn-sm",
              text: 'Imprimir',
              autoPrint: true,
              orientation: 'landscape',
              pageSize: 'A4'
          }
      ],
      paging: false,
      "ordering": false,
      "searching": false,
      "autoWidth": false
      });
  };

  nombre = "Lista_Articulos_Costos";
})