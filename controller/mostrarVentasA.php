<?php

    function cargarVenta(){

        $objetoConsultas = new consultasA();
        $arreglo = $objetoConsultas->mostrarVentasA();

        //isset es para saber si existe algun dato en result
        if (!isset($arreglo)) {
          echo '<h2>No hay ventas registradas en el sistema</h2>';
        } else {
            echo '
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID factura</th>
                      <th>Fecha compra</th>
                      <th>ID empleado</th>
                      <th>Nombre empleado</th>
                      <th>ID cliente</th>
                      <th>Nombres cliente</th>
                      <th>Apellidos cliente</th>
                      <th>ID forma pago</th>
                      <th>Nombre forma pago</th>
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
                    <td> '.$f["ID_factura"].' </td>
                    <td> '.$f["Fecha_compra"].' </td>
                    <td> '.$f["ID_empleado"].' </td>
                    <td> '.$f["Nombres_empleado"].' </td>
                    <td> '.$f["ID_cliente"].' </td>
                    <td> '.$f["Nombres_cliente"].' </td>
                    <td> '.$f["Apellidos_cliente"].' </td>
                    <td> '.$f["ID_forma_pago"].' </td>
                    <td> '.$f["Nombre_forma_pago"].' </td>
                    <td> <a href="" class="btn btn-success"> Ver/editar</a> </td>
                    <td> <a href="../../controller/eliminarVentasA.php?id_factura='.$f["ID_factura"].'" class="btn btn-danger"> eliminar</a> </td>
                </tr>
                ';
            }
            echo '
            </tbody>
                  <tfoot>
                    <tr>
                      <th>ID factura</th>
                      <th>Fecha compra</th>
                      <th>ID empleado</th>
                      <th>Nombre empleado</th>
                      <th>ID cliente</th>
                      <th>Nombres cliente</th>
                      <th>Apellidos cliente</th>
                      <th>ID forma pago</th>
                      <th>Nombre forma pago</th>
                      <th>ver/editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                </table>
            ';

        }
    }

?>