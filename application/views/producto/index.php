<?php
    $rta = !empty($rta) ? $rta : NULL;
?>
<h1>Producto</h1>
<a href="javascript:void(0);" data-toggle="modal" data-target="#crear_" class="btn btn-primary edit btn-xs"> Crear</a>
<div class="x_content">
<div class="table-responsive">
        <table id="tabletab_general" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    if(!empty($rta)) {
        $html = '';
        foreach($rta as $kk=>$vv) {
            $html .= '<tr>';
            $html .= '<td>'.($kk+1).'</td>';
            $html .= '<td>'.$vv['codigo'].'</td>';
            $html .= '<td>'.$vv['descripcion'].'</td>';
            $html .= '<td>'.$vv['precio'].'</td>';
            $html .= '<td>';
            $html .='<a href="javascript:void(0);" data-toggle="modal" data-target="#crear_" class="btn btn-danger edit btn-xs"> Editar</a>';
            
            $html .= '</td>';
            $html .= '</tr>';
        }
        
        echo $html;
    } else {
?>
            <tr><td collspan="4"> <h2 class="text-center">No existen productos</h2> </td></tr>
<?php
    }
?>

            </tbody>
        </table>
    </div>
</div>
<?php
if(isset($modal))
    echo $modal;
?>

<script>
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
});
</script>