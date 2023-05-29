<div class="container">
<div class="card">
   <center><h1>Tabla Productos</h1></center>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($producto as $registroPro){ ?>
                    <tr >

                        <td ><?php echo $registroPro->id_co ?></td>
                        <td><?php echo $registroPro->nom_co ?></td>
                        <td><?php echo $registroPro->descripcion_co ?></td>
                        <td><?php echo $registroPro->pedido_co ?></td>
                        <td><?php echo $registroPro->precio_co ?></td>
                        <td>Editar/Eliminar</td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
        
    </div>
</div>
</div>