<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Administrar productos
        </h1>
        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Administrar productos</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProductos">
                    Agregar Productos
                </button>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas">
                    <thead>
                        <tr>
                            <th style="width:10px">#</th>
                            <th>Imagen</th>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Categoria</th>
                            <th>Stock</th>
                            <th>Precio compra</th>
                            <th>Precio Venta</th>
                            <th>Agregado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail"
                                    width="40px"></td>
                            <td>0021</td>
                            <td>Coca Cola 600 ML</td>
                            <td>Refrescos</td>
                            <td>100</button></td>
                            <td>$10.00</td>
                            <td>$15.00</td>
                            <td>2021-10-17 12:51;32</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail"
                                    width="40px"></td>
                            <td>0021</td>
                            <td>Coca Cola 600 ML</td>
                            <td>Refrescos</td>
                            <td>100</button></td>
                            <td>$10.00</td>
                            <td>$15.00</td>
                            <td>2021-10-17 12:51;32</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail"
                                    width="40px"></td>
                            <td>0021</td>
                            <td>Coca Cola 600 ML</td>
                            <td>Refrescos</td>
                            <td>100</button></td>
                            <td>$10.00</td>
                            <td>$15.00</td>
                            <td>2021-10-17 12:51;32</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>



<!--=====================================
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarProductos" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <!--=====================================
                CABEZA DEL MODAL
                ======================================-->
                <div class="modal-header" style="background:#3c8dbc; color:white">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Producto</h4>
                </div>
                <!--=====================================
                CUERPO DEL MODAL
                ======================================-->
                <div class="modal-body">
                    <div class="box-body">
                        <!-- ENTRADA CÓDIGO DE PRODUCTO -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-code"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevoCodigo"
                                    placeholder="Ingresar Código" required>
                            </div>
                        </div>
                        <!-- ENTRADA DESCRIPCIÓN DE PRODUCTO -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
                                <input type="text" class="form-control input-lg" name="nuevaDescripcion"
                                    placeholder="Ingresar Descripción" required>
                            </div>
                        </div>
                        <!-- REGISTRAR  TIPO DE USUARIO -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-th"></i></span>
                                <select class="form-control input-lg" name="nuevaCategoria">
                                    <option value="">Seleccionar Categoria</option>
                                    <option value="Taladro">Taladro</option>
                                    <option value="Andamio">Andamio</option>
                                    <option value="Construccion">Construccion</option>
                                </select>
                            </div>
                        </div>
                        <!-- ENTRADA STOCK DE PRODUCTO -->
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                <input type="number" class="form-control input-lg" name="nuevoStock" min="0"
                                    placeholder="Cantidad disponible" required>
                            </div>
                        </div>
                        <!-- ENTRADA PRECIO COMPRA PRODUCTO -->
                        <div class="form-group row">
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
                                    <input type="number" class="form-control input-lg" name="nuevoPrecioCompra" min="0"
                                        placeholder="Precio de compra" required>
                                </div>
                            </div>
                            <!-- ENTRADA PRECIO VENTA PRODUCTO -->
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
                                    <input type="number" class="form-control input-lg" name="nuevoPrecioVenta" min="0"
                                        placeholder="Precio de venta" required>
                                </div>
                                <br>
                                <!-- checkbox para porcentaje -->
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal porcentaje" checked>Utilizar
                                            Porcentaje
                                        </label>
                                    </div>
                                </div>
                                <!-- ENTRADA PARA PORCENTAJE -->
                                <div class="col-xs-6" style="padding:0">
                                    <div class="input-group">
                                        <input type="number" class="form-control input-lg nuevoPorcentaje" min="0"
                                            value="40" required>
                                        <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ENTRADA FOTO PRODUCTO -->
                        <div class="form-group">
                            <div class="panel">SUBIR IMAGEN</div>
                             <input type="file" id="nuevaImagen" name="nuevaImagen">
                            <p class="help-block">Peso máximo de la imagen 2MB</p>
                            <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="100px">
                        </div>
                        <!--=====================================
                        PIE DEL MODAL
                        ======================================-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>