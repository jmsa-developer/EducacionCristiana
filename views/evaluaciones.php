  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>EVALUACIONES</h1>
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
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label>Tipo de Evaluación</label>
                      
                <select class="form-control"  id="tipo" name="tipo" data-placeholder="Selecciona" style="width: 100%;">
                     <option>seleccione tipo de evaluación</option>
                     <option>Foro</option>
                     <option>Tarea</option>
                     <option>Examén</option>
                     <option>Glosario de Terminos</option>

      
                </select>
                    

                  </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>TIEMPO</label>
                        <input type="time"  class="form-control"  placeholder="Ingrese  tiempo" />
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>DESCRIPCIÓN</label>
                                        
                        <input type="text" class="form-control" maxlength="30" placeholder="Ingrese Dscripción" /> <max 40 
                        characters a-z A-Z>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>NUMERO DE INTENTOS</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask></td> <max 11
                          characters 0-9>
                    </div>
                </div>
                    <!-- /.form-group -->
            </div>
                      <!-- /.col -->
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                <label>TEMA</label>
                      
                <select class="form-control"  id="tipo" name="tipo" data-placeholder="Selecciona" style="width: 100%;">
                     <option>seleccione el Tema</option>
                     <option>Tema 1</option>
                     <option>Tema 2</option>
                     <option>Tema 3</option>
                     <option>Tema 4</option>

      
                </select>
                    

                  </div>
                              <!-- /.form-group -->

                            <!-- /.form-group -->
                          </div>
                          <!-- /.col -->
                
                     
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>VALOR ASIGNACIÓN</label>
                            <td><input type="text" class="form-control" name="" id="" placeholder="Enter email address"></td>
                          </div>
                                          <!-- /.form group -->
                                          
                <!-- Date dd/mm/yyyy -->

                </div>

            
              <!-- /.form group -->
                        </div>
                      <!-- /.col -->
                    
                           <!-- /.row -->
                           <div class="row">
                            <div class="col-md-6">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>FECHA DE INICIO:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fecha_nacimiento" id="fecha_nacimiento">
                  
                        </div>
                    </div>


                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->
                        <div class="col-md-6">
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>FECHA DE CIERRE:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fecha_nacimiento" id="fecha_nacimiento">
                  
                        </div>
                    </div>


                      
<!-- /.col -->
</div>
<!-- /.row -->
                                     <!-- Date -->
                <div class="form-group">
                  <label>FECHA DE INGRESO:</label>
                    <div id="current_date"></p>
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").innerHTML = day + "/" + month + "/" + year;
</script>
                        
                    
              
             
          
        
          

              
           
            <div class="row">
    
                     
                     
                       
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
    <!-- /.content -->
      </form>

  </div>
  <!-- /.content-wrapper -->
