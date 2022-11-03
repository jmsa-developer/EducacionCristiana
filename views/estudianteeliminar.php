

  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ELIMINAR ESTUDIANTE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">formulario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <form method="post" name="test">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Perfil </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>NOMBRE</label>
                                 
                 <input readonly type="text" class="form-control"name="nombre" id="nombre" maxlength="20" 
                 placeholder="Ingrese nombre" value="<?= $estudiante->nombre; ?>"/>                                 </div>
                <!-- /.form-group -->
                <div class="form-group">
                  
                      <label>CEDULA</label>
                  
                   <input readonly type="text"  class="form-control" name="cedula" id="cedula" 
                   placeholder="Ingrese  cedula" value="<?= $estudiante->cedula; ?>"/>               
                    
      
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                        <label>APELLIDOS</label>
                                        
                <input readonly type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese apellido" value="<?= $estudiante->apellido; ?>"/> 
                                 </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                        <label>TELEFONO</label>
                        <input readonly type="text" class="form-control" name="telefono" id="telefono" placeholder="Ingrese telefono" data-inputmask='"mask": "(9999) 999-9999"'  value="<?= $estudiante->telefono; ?>"/>               
                      
                        </div>
                      </div>
                  
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label>DIRECCION</label>
                
                <input readonly type="text"class="form-control" name="direccion" id="direccion" maxlength="30" placeholder="ingrese direccion" value="<?= $zona->direccion; ?>"/>               
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  
                <label>Email</label>
                            <inpu readonly type="email" class="form-control" name="email" id="email" placeholder="Enter email address"
                             value="<?= $estudiante->email; ?>"/>               
                         
      
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                  <label>ZONA</label>
                  
                  <input readonly type="text"  class="form-control" name="zona" id="zona" 
                  placeholder="Ingrese  zona" value="<?= $zona->zona; ?>"/>               
                   
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                <label>FECHA DE NACIMIENTO:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input  readonly type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento"
                      data-inputmask-inputformat="yyyy/mm/dd" data-mask value="<?= $estudiante->fecha_inicio; ?>"/>               
                  
                        </div>
                    </div>
                       
                        </div>
                     
                  
                        <!-- /.form-group -->
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                           
                          <label>NOMBRE DEL MINISTERIO </label>
        
        <select readonly class="form-control" id="nombre_m" name="nombre_m"  data-placeholder="Selecciona"
      style="width: 100%;"value="<?= $ministerio->nombre_m; ?>">               

</select>
                              </div>
                              <!-- /.form-group -->
                             
                              
                            
                              <div class="form-group">
                              <label>LIDER DEL GRUPO</label>
                    
                    <input readonly type="text"class="form-control" name="lider_gdc" id="lider_gdc"
                     maxlength="30" placeholder="ingrese lider del grupo" value="<?= $ministerio->lider_gdc; ?>"/>                                 
                              
                                
                              
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /.col -->
                
                     
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Lider del Ministerio</label>
                            <input readonly type="text" class="form-control" name="lider_ministerio" 
                            id="lider_ministerio" placeholder="Enter lider ministerio" value="<?= $ministerio->lider_ministerio; ?>"/>                                         </div>
                                          <!-- /.form group -->
                                          
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                <label>TURNO</label>
                      
                      <select readonly class="form-control"  id="turno" name="turno" data-placeholder="Selecciona"
            style="width: 100%;" value="<?= $estudiante->email; ?>">         
     
      
    </select>
                    

                    </div>
                </div>

            
              <!-- /.form group -->
                        </div>
                      <!-- /.col -->
                    
                           <!-- /.row -->
                           <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                               
                              <label>PASTOR</label>
                      
                              <select readonly class="form-control"  id="pastor" name="pastor" data-placeholder="Selecciona"
            style="width: 100%;" value="<?= $pastor->pastor; ?>">               
   
      
    </select>
                                  </div>
                                  <!-- /.form-group -->
                                  
                                  
                                
                               
                      
                              </div>
                              <div class="col-md-6">
                              <div class="form-group">
                              <label>GDC</label>
                    
                    <input readonly type="text"class="form-control" name="gdc" id="gdc" maxlength="30" 
                    placeholder="ingrese gdc" value="<?= $ministerio->gdc; ?>"/>                                                
                    </div> 
                              
                            </div>
                              <!-- /.col -->
                             
<!-- /.row -->
<!-- /.row -->
                                     <!-- Date -->
                
<script>
   $(function ()  //Money Euro
      $('[data-mask]').inputmask())

date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").value = day + "/" +  month+ "/" + year;
</script>
   
           
         
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <div class="card-body">
            <div id="actions" class="row">
              <div class="col-lg-6">
                <div class="btn-group w-100">
                  
                  <button type="submit" class="btn btn-primary col start">
                    <i class="fas fa-upload"></i>
                    <span>ELIMINAR</span>
                  </button>
                
                </div>
              </div>
          <!-- /.card-body -->
          
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
</form>
    <!-- /.content -->
  </div>
  </div>
  <!-- /.content-wrapper -->
 