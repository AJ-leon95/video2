<div class="container">
    <div class="card">
        <center>
            <h4>Formulario Nuevo Producto</h4>
        </center>
        <div class="card-body">
            <form action="<?php echo site_url("/Productos/guardarPro") ?>" method="post">

                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="nom_co" class="form-label">Nombre Producto</label>
                            <input type="text" class="form-control" name="nom_co" id="nom_co" aria-describedby="helpId" placeholder="ingrese el nombre del producto">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="descripcion_co" class="form-label">descripcion</label>
                            <input type="text" class="form-control" name="descripcion_co" id="descripcion_co" aria-describedby="helpId" placeholder="ingrese La descripcion">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                          <label for="precio_co" class="form-label">Precio</label>
                          <input type="number"
                            class="form-control" name="precio_co" id="precio_co" aria-describedby="helpId" placeholder="Ingrese el precio">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="pedido_co" class="form-label">pedido </label>
                            <input type="text" class="form-control" name="pedido_co" id="pedido_co" aria-describedby="helpId" placeholder="Ingrese el pedido">
                        </div>
                    </div>
                </div>
                <center>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a name="" id="" class="btn btn-dark" href="<?php echo site_url("/Productos/index") ?>" role="button">Cancelar</a>
                </center>
            </form>
        </div>
    </div>
</div>
</div>