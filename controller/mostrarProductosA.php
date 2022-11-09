<?php

    function cargarProductos(){

        $objetoConsultas = new consultasA();
        $arreglo = $objetoConsultas->mostrarProductosA();

        //isset es para saber si existe algun dato en result
        if (!isset($arreglo)) {
            echo '<h2>No hay registros de productos en el sistema</h2>';
        } else {
            echo '
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Id producto</th>
                      <th>Nombre producto</th>
                      <th>Descripcion</th>
                      <th>Caracteristicas</th>
                      <th>Marca</th>
                      <th>Existencias</th>
                      <th>Precio</th>
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
                  <td> '.$f["Cod_producto"].' </td>
                  <td> '.$f["Nombre_producto"].' </td>
                  <td> '.$f["Descripcion_producto"].' </td>
                  <td> '.$f["Caracteristicas_producto"].' </td>
                  <td> '.$f["ID_marca"].' </td>
                  <td> '.$f["Existencias_producto"].' </td>
                  <td> '.$f["Precio_producto"].' </td>
                  <td> <a href="verProductosA.php?Cod_producto='.$f["Cod_producto"].'" class="btn btn-success"> Ver/editar</a> </td>
                  <td> <a href="../../controller/eliminarProductoA.php?Cod_producto='.$f["Cod_producto"].'" class="btn btn-danger"> eliminar</a> </td>
                </tr>
                ';
            }
            echo '
            </tbody>
                  <tfoot>
                    <tr>
                      <th>Id producto</th>
                      <th>Nombre producto</th>
                      <th>Descripcion</th>
                      <th>Caracteristicas</th>
                      <th>Marca</th>
                      <th>Existencias</th>
                      <th>Precio</th>
                      <th>ver/editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                </table>
            ';

        }
    }

?>