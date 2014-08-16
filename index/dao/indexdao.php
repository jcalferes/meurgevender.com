<?php

class indexdao {

    function comprarGuardarDatos(Cliente $cl, Compra $co) {
        try {
            $query = "INSERT INTO clientes (nombre, telefono, cp, colonia, direccion) "
                    . "VALUES ('" . $cl->getNombre() . "','" . $cl->getTelefono() . "','" . $cl->getCp() . "','" . $cl->getCcolonia() . "','" . $cl->getDireccion() . "')";
            $query_id = "SELECT LAST_INSERT_ID() ID;";
            mysql_query("START TRANSACTION;");
            $ctrl = mysql_query($query);
            if ($ctrl == false) {
                throw new Exception();
            }
            $ctrl = mysql_query($query_id);
            if ($ctrl == false) {
                throw new Exception();
            }
            while ($rs = mysql_fetch_array($ctrl)) {
                $id_cliente = $rs["ID"];
            }
            $query = "INSERT INTO datoscomprarcasa (idClientes, colonia, precio, medidasTerreno, habitaciones, banos, pisos, jardin, patio) "
                    . "VALUES ('$id_cliente','" . $co->getColonia() . "','" . $co->getPrecio() . "','" . $co->getMedidas() . "','" . $co->getHabitaciones() . "','" . $co->getBanos() . "','" . $co->getPisos() . "','" . $co->getJardin() . "','" . $co->getPatio() . "')";
            $ctrl = mysql_query($query);
            if ($ctrl == false) {
                throw new Exception();
            }
            mysql_query("COMMIT;");
        } catch (Exception $e) {
            $ctrl = mysql_error();
            mysql_query("ROLLBACK;");
        }
        return $ctrl;
    }

}
