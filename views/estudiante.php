

  <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content">
     <!-- /.container-fluid -->
    </section>
    <form method="post" name="test">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"> Estudiante </h3>

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
                                 
                 <input type="text" class="form-control" name="nombre" id="nombre" maxlength="20" placeholder="Ingrese nombre" required/> 
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  
                      <label>CEDULA</label>
                  
                   <input type="text"  class="form-control" name="cedula" id="cedula" placeholder="Ingrese  cedula" required/>
                    
      
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                        <label>APELLIDOS</label>
                                        
                <input type="text" class="form-control" name="apellido" id="apellido" maxlength="30" placeholder="Ingrese apellido" required/> 
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                        <label>TELEFONO</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" data-inputmask='"mask": "(9999) 999-9999"' placeholder="Ingrese telefono" data-mask required/>                      
                        </div>
                      </div>
                  
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label>DIRECCION</label>
                
                <input type="text"class="form-control" name="direccion" id="direccion" maxlength="30" placeholder="ingrese direccion" required/> <max 30
                    characters a-z A-Z>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  
                <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address" required/>
                         
      
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                  <label>ZONA</label>
                  
                  <input type="text"  class="form-control" name="zona" id="zona" placeholder="Ingrese  zona" required/>
                   
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                <label>FECHA DE NACIMIENTO:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask required/>
                  
                        </div>
                    </div>
                       
                        </div>
                     
                  
                        <!-- /.form-group -->
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                           
                          <label>NOMBRE DEL MINISTERIO </label>
        
        <select class="form-control" id="ministerio_id" name="ministerio_id" data-placeholder="yurmi" style="width: 100%;" required>
        <?= $ministeriosOptions ?>
</select>
                              </div>
                              <!-- /.form-group -->
                             
                              
                            
                              <div class="form-group">
                              <label>FECHA DE INGRESO:</label>
                    <input readonly name="fecha_inicio" class="form-control" id="current_date"/>
                        
                                    </div> 
                            
                            <!-- /.form-group -->
                          </div>
                          <!-- /.col -->
                
                     
                        <div class="col-md-6">
                            
                        <label>PASTOR </label>
                      
                      <select class="form-control"  id="pastor_id" name="pastor_id"
    style="width: 100%;" required>
<?= $pastoresOptions ?>
</select>
                          </div>
                                          <!-- /.form group -->
                                          
                <!-- Date dd/mm/yyyy -->
                
                </div>

            
              
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
                    <span>GUARDAR</span>
                  </button>
                  <button type="reset" class="btn btn-warning col cancel">
                    <i class="fas fa-times-circle"></i>
                    <span>LIMPIAR</span>
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

  <script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").value = day + "/" +  month+ "/" + year;
</script>

  <!-- /.content-wrapper -->
