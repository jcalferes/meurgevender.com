<?php

class indexdao {

    function comprarGuardarDatos(Cliente $cl, Compra $co) {
        try {
            $query = "INSERT INTO clientes (nombre, telefono, correo, cp, colonia, direccion) "
                    . "VALUES ('" . $cl->getNombre() . "','" . $cl->getTelefono() . "','" . $cl->getEmail() . "','" . $cl->getCp() . "','" . $cl->getCcolonia() . "','" . $cl->getDireccion() . "')";
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

    function venderGuardarDatos(Cliente $cl, Venta $ve) {
        try {
            $query = "INSERT INTO clientes (nombre, telefono, correo, cp, colonia, direccion) "
                    . "VALUES ('" . $cl->getNombre() . "','" . $cl->getTelefono() . "','" . $cl->getEmail() . "','" . $cl->getCp() . "','" . $cl->getCcolonia() . "','" . $cl->getDireccion() . "')";
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
            $query = "INSERT INTO datosvendercasa (idClientes, colonia, direccion, precio, tamanoPredio, habitaciones, banos, pisos, jardin, patio, telefono, internet, cable) "
                    . "VALUES ('$id_cliente','" . $ve->getColonia() . "','SDI','" . $ve->getPrecio() . "','" . $ve->getMedidas() . "','" . $ve->getHabitaciones() . "','" . $ve->getBanos() . "','" . $ve->getPisos() . "','" . $ve->getJardin() . "','" . $ve->getPatio() . "','" . $ve->getTelefono() . "','" . $ve->getInternet() . "','" . $ve->getTvpaga() . "')";
            $query_idventa = "SELECT LAST_INSERT_ID() ID;";
            $ctrl = mysql_query($query);
            if ($ctrl == false) {
                throw new Exception();
            }
            $ctrl = mysql_query($query_idventa);
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

    function venderGuardarImgs($id, $rutas) {
        foreach ($rutas as $dato) {
            $ruta = $dato;
            $query = "INSERT INTO imagenes(idDatosVenderCasa, ruta, idSlider) VALUES('$id', '$ruta', '0')";
            $ctrl = mysql_query($query);
            if ($ctrl == false) {
                $ctrl = mysql_error();
            }
        }
        return $ctrl;
    }

}
