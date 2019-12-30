
<?php 
error_reporting(E_ALL ^ E_NOTICE);

include_once('inc/layout/header.php');
include_once('inc/funciones/funciones.php');

?>

<div class="contenedor-barra">
    <h1>Agenda de Contactos</h1>
</div>
<div class="contenedor bg-secundario sombra">
    <form action="#" method="post" id="contacto">
        <legend>Añadir un contacto <span>Todos los campos son obligatorios</span></legend>

    <?php include_once('inc/layout/formularios.php'); ?>

    </form>
</div>
<div class="contenedor bg-blanco sombra contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contacto">
        <p class="total-contactos"><span>2</span> Contactos</p>
        <div class="contenedor-tabla">
            <table id="listado-contactos" class="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $contactos = obtenerContactos();
                        if ($contactos->num_rows) {
                            foreach($contactos as $contacto){ ?>
                    <tr>
                        <td><?php echo  $contacto['nombre']; ?></td>
                        <td><?php echo  $contacto['empresa']; ?></td>
                        <td><?php echo  $contacto['telefono']; ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $contacto['id'];?>" class="btn-editar btn"><i class="fas fa-edit"></i></a>
                            <button type="button" data-id="<?php echo $contacto['id']; ?>" class="btn-borrar btn"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <?php  }  
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>






<?php include_once('inc/layout/footer.php'); ?>