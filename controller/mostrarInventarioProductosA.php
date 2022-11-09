<?php

    function cargarInventario(){

        $objetoConsultas = new consultasA();
        $arreglo = $objetoConsultas->mostrarInventarioProductosA();

        //isset es para saber si existe algun dato en result
        if (!isset($arreglo)) {
            echo '<h2>No hay registros de inventario en el sistema</h2>';
        } else {
            echo '
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID Inventario</th>
                      <th>Cod Producto</th>
                      <th>Nombre Producto</th>
                      <th>Fecha</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>Causas</th>
                      <th>Observaciones</th>
                      <th>ver/editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tbody>

            ';
            //ciclo para repetir los registros del arreglo f
            foreach ($arreglo as $f){
                echo '
                <tr>
                    <td> '.$f["ID_inventario"].' </td>
                    <td> '.$f["Cod_producto"].' </td>
                    <td> '.$f["Nombre_producto"].' </td>
                    <td> '.$f["Fecha_inventario"].' </td>
                    <td> '.$f["Cantidad_inventario"].' </td>
                    <td> '.$f["Precio_inventario"].' </td>
                    <td> '.$f["Causas"].' </td>
                    <td> '.$f["Observaciones"].' </td>
                    <td> <a href="" class="btn btn-success"> Ver/editar</a> </td>
                    <td> <a href="../../controller/eliminarInventarioA.php?id_inventario='.$f["ID_inventario"].'" class="btn btn-danger"> eliminar</a> </td>
                </tr>
                ';
            }
            echo '
            </tbody>
                  <tfoot>
                    <tr>
                      <th>ID Inventario</th>
                      <th>Cod Producto</th>
                      <th>Nombre Producto</th>
                      <th>Fecha</th>
                      <th>Cantidad</th>
                      <th>Precio</th>
                      <th>Causas</th>
                      <th>Observaciones</th>
                      <th>ver/editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                </table>
            ';

        }
    }

?>