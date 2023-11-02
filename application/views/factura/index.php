<?php
    $rta = !empty($rta) ? $rta : NULL;
?>
<h1>Producto</h1>
<a href="javascript:void(0);" data-toggle="modal" data-target="#crear_" class="btn btn-primary edit btn-xs"> Crear</a>
<div class="x_content">
<div class="table-responsive">
        <table id="" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
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
            $html .= '<td>'.$vv['nombres'].'</td>';
            $html .= '<td>'.$vv['apellidos'].'</td>';
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