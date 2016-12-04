<?php
require_once 'vistas/_commons/header.php';
?>

<h1>Lista de Hoteles</h1>
<div class="user-index-container">
    <table border="1">
        <tr>
            <th>Id Hotel</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estrellas</th>
            <th>Ciudad</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Imagen</th>
        </tr>
        <?php foreach ($hoteles as $hotel): ?>
            <tr>
                <td>
                    <a href="hotel.php?action=show&id=<?php echo $hotel->id; ?>">
                        <?php echo ($hotel->id ); ?>
                    </a>
                </td>
                <td><?php echo $hotel->nombre; ?></td>
                <td><?php echo $hotel->descripcion; ?></td>
                <td><?php echo $hotel->cantidadEstrellas; ?></td>
                <td><?php echo $hotel->ciudad; ?></td>
                <td><?php echo $hotel->direccion; ?></td>
                <td><?php echo $hotel->telefono; ?></td>
                <td><?php echo $hotel->email; ?></td>
                <td><?php echo $hotel->ubicacionFotografia; ?></td>
                
                <td>
                    <a href="hotel.php?action=edit&id=<?php echo $hotel->id; ?>">Editar</a>
                    &nbsp; | &nbsp;
                    <a href="hotel.php?action=delete&id=<?php echo $hotel->id; ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php
require_once 'vistas/_commons/footer.php';
?>