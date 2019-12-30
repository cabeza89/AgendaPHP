<?php 

function obtenerContactos(){
    include_once('inc/funciones/conexion.php');
    try {
        return $conn->query("SELECT id, nombre, empresa, telefono FROM contactos");
    } catch (Exception $e) {
        echo 'Error!!'.$e->getMessage();
        return false;
    }
}