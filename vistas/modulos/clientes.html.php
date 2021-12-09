<div class="content-wrapper">    
  <section class="content-header">
        <h1>
          Administrar clientes       
        </h1>
        <ol class="breadcrumb">
          <li><a href="inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>        
          <li class="active">Administrar clientes</li>
        </ol>
      </section>    
      <section class="content">     
        <div class="box">
          <div class="box-header with-border">            
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCliente">
                  Agregar clientes
                </button>          
          </div>
          <div class="box-body">
            <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
              <thead>
                <tr>
                  <th style="width:10px">#</th>
                  <th>Nombre</th>
                  <th>Documento ID</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Dirección</th>
                  <th>Fecha de Nacimiento</th>
                  <th>Total compras</th>
                  <th>Ultima compra</th>
                  <th>Ingreso al sistema</th>
                  <th>Acciones</th>
                </tr>
              </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Omar Mendoza</td>
                <td>MXNVEACRUZ123654</td>
                <td>omendoza91@hotmail.com</td>
                <td>9211116344</td>
                <td>Coatzacoalcos Ver</td>
                <td>22/06/1991</td>
                <td>15</td>
                <td>26/10/2021</td>
                <td>26/10/2021</td>                
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
      </div>
    </section>   
 </div>
 <!--==============================
      MODAL AGREGAR CLIENTE                   
 ================================-->
<div id="modalAgregarCliente" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" method="post" >
        <!--==============================
            CABEZA DEL MODAL                    
        ================================-->
            <div class="modal-header" style="background:#3c8dbc; color:white">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Agregar cliente</h4>          
            </div>
        <!--==============================
            CUERPO DEL MODAL                    
        ================================-->
        <div class="modal-body">
          <div class="box-body">
            <!-- REGISTRAR NOMBRE -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>
              </div>
            </div>          
            <!-- REGISTRAR DOCUMENTO ID -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>
              </div>
            </div>  
            <!-- REGISTRAR EMAIL -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>
              </div>
            </div>  
            <!-- REGISTRAR TELÉFONO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>
              </div>
            </div>  
            <!-- REGISTRAR DIRECCION -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>
              </div>
            </div>  
            <!-- REGISTRAR FECHA DE NACIMIENTO -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha de nacimiento" data-inputmask="'alias':'yyyy/mm/dd'" data-mask required>
              </div>
            </div>  
          </div>      
        </div>
        <!--==============================
            PIE DEL MODAL                    
        ================================-->
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
          <button type="submit" class="btn btn-primary">Guardar Cliente</button>
        </div>
      </form>
    </div>
  </div>
</div>
  