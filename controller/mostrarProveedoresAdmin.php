<?php

    function cargarProveedores(){
        //Se llaman los datos
        $objetoConsultas = new consultasA();
        $arreglo = $objetoConsultas->mostrarProveedores();

        //isset = Establecido
        //Lo que existe en result esta establecido?
        if (!isset($arreglo)) {
            echo '<h2>No hay proveedores registrados en el sistema</h2>';
        } else {
            //Vista resumen
            echo '
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NIT</th>
                    <th>Nombre empresa</th>
                    <th>Telefono empresa</th>
                    <th>Direccion empresa</th>
                    <th>Nombre contacto</th>
                    <th>Telefono contacto</th>
                    <th>Correo contacto</th>
                    <th>Ver/Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
            ';
            //Se repiten los registros del arreglo f en las filas y columnas
            foreach ($arreglo as $f){
                echo '
                <tr>
                    <td> '.$f["Nit_proveedor"].'  </td>
                    <td> '.$f["Nombre_empresa_proveedor"].' </td>
                    <td> '.$f["Telefono_empresa_proveedor"].'  </td>
                    <td> '.$f["Direccion_empresa_proveedor"].'  </td>
                    <td> '.$f["Nombre_contacto"].'  </td>
                    <td> '.$f["Telefono_contacto"].'  </td>
                    <td> '.$f["Correo_contacto"].'  </td>
                    <td> <a href="" class="btn btn-success">Ver/Editar</a> </td>
                    <td> <a href="../../controller/eliminarProveedorA.php?nit_proveedor='.$f["Nit_proveedor"].'" class="btn btn-danger">Eliminar</a> </td>
                  </tr>
                ';
            }

            //Se trae la parte faltante de la tabla
            echo '
            
            </tbody>
                  <tfoot>
                  <tr>
                    <th>NIT</th>
                    <th>Nombre empresa</th>
                    <th>Telefono empresa</th>
                    <th>Direccion empresa</th>
                    <th>Nombre contacto</th>
                    <th>Telefono contacto</th>
                    <th>Correo contacto</th>
                    <th>Ver/Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </tfoot>
                </table>
            
            ';
            


        }
    }


?>