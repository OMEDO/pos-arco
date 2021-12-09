<?php
 if($_SESSION["perfil"] == "Vendedor"){
   echo '<script>
	window.location = "inicio";
   </script>';
   return;
 }
?>
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
				<table class="table table-bordered table-striped dt-responsive tablaProductos" width="100%">
					<thead>
						<tr>
							<th style="width:10px">#</th>
							<!-- <th>Imagen</th> -->
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
				</table>
				<input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">
				
			</div>
		</div>
	</section>
</div>
<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->
<div id="modalAgregarProductos" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form role="form" method="post" enctype="multipart/form-data">
				<!--================================
				CABEZA DEL MODAL
				=================================-->
				<div class="modal-header" style="background:#3c8dbc; color:white">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Agregar Producto</h4>
				</div>                
				<!--==============================
				CUERPO DEL MODAL                    
				================================-->
				<div class="modal-body">
					<div class="box-body">
						<!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-th"></i></span>
								<select class="form-control input-lg" name="nuevaCategoria" id="nuevaCategoria" required>
									<option value="">Seleccionar Categoria</option>
									<?php
									$item = null;
									$valor = null;                  
									$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);   
									             
									foreach ($categorias as $key => $value) {                                      
									  echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';
									}
									?>                                    
								</select>
							</div>
						</div>
						<!-- ENTRADA CÓDIGO DE PRODUCTO -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-code"></i></span>
								<input type="text" class="form-control input-lg" name="nuevoCodigo" id="nuevoCodigo" placeholder="Ingresar Código"  required>
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
							<div class="col-xs-12 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
									<input type="number" class="form-control input-lg" name="nuevoPrecioCompra" id="nuevoPrecioCompra" min="0" step="any" placeholder="Precio de compra" required>
								</div>
							</div>
							<!-- ENTRADA PRECIO VENTA PRODUCTO -->
							<div class="col-xs-12 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
									<input type="number" class="form-control input-lg" name="nuevoPrecioVenta" id="nuevoPrecioVenta" min="0" step="any" placeholder="Precio de venta" required>
								</div>
								<br>
								<!-- checkbox para porcentaje -->
								<div class="col-xs-12 col-sm-6">
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
						<!-- ENTRADA PARA SUBIR FOTO PRODUCTO -->
						<!-- <div class="form-group">
							<div class="panel">SUBIR IMAGEN</div>
							 <input type="file" class="nuevaImagen" name="nuevaImagen">
							<p class="help-block">Peso máximo de la imagen 2MB</p>
							<img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
							<input type="hidden" name="imagenActual" id="imagenActual"> 
						</div> -->
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
			<?php
				$crearProducto = new ControladorProductos();
				$crearProducto -> ctrCrearProducto();
			?>
		</div>
	</div>
</div>
<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->
 <div id="modalEditarProducto" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form role="form" method="post" enctype="multipart/form-data">
				<!--=====================================
				CABEZA DEL MODAL
				======================================-->
				<div class="modal-header" style="background:#3c8dbc; color:white">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Editar Producto</h4>
				</div>
				<!--=====================================
				CUERPO DEL MODAL
				======================================-->
				<div class="modal-body">
					<div class="box-body">
						<!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-th"></i></span>
								<select class="form-control input-lg" name="editarCategoria"  readonly required>
									<option id="editarCategoria"></option>
								 </select>
							</div>
						</div>
						<!-- ENTRADA CÓDIGO DE PRODUCTO -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-code"></i></span>
								<input type="text" class="form-control input-lg" name="editarCodigo" id="editarCodigo"  readonly required>
							</div>
						</div>
						<!-- ENTRADA DESCRIPCIÓN DE PRODUCTO -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>
								<input type="text" class="form-control input-lg" name="editarDescripcion" id="editarDescripcion"  required>
							</div>
						</div>                        
						<!-- ENTRADA STOCK DE PRODUCTO -->
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-check"></i></span>
								<input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>
							</div>
						</div>
						<!-- ENTRADA PRECIO COMPRA PRODUCTO -->
						<div class="form-group row">
							<div class="col-xs-12 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>
									<input type="number" class="form-control input-lg" name="editarPrecioCompra" id="editarPrecioCompra" min="0" step="any"  required>
								</div>
							</div>
							<!-- ENTRADA PRECIO VENTA PRODUCTO -->
							<div class="col-xs-12 col-sm-6">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>
									<input type="number" class="form-control input-lg" id="editarPrecioVenta"  step="any" name="editarPrecioVenta" min="0"  readonly required>
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
										<input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>
										<span class="input-group-addon"><i class="fa fa-percent"></i></span>
									</div>
								</div>
							</div>
						</div>
						<!-- ENTRADA PARA SUBIR FOTO PRODUCTO -->
						<!-- <div class="form-group">
							<div class="panel">SUBIR IMAGEN</div>
							 <input type="file" class="nuevaImagen" name="editarImagen">
							<p class="help-block">Peso máximo de la imagen 2MB</p>
							<img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">
						</div> -->
						<!--=====================================
						PIE DEL MODAL
						======================================-->
						<div class="modal-footer">
							<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
							<button type="submit" class="btn btn-primary">Guardar cambios</button>
						</div>
					
			</form>
			<?php
				$editarProducto = new ControladorProductos();
				$editarProducto -> ctrEditarProducto();
			?>
			
		</div>
	</div>
</div> 
<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>   








