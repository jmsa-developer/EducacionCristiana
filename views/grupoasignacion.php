  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GRUPO DE ASIGNACIÓN</h1>
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
                <label>ESCUELA</label>
                      
                <select class="form-control"  id="escuela" name="escuela" data-placeholder="Selecciona" style="width: 100%;">
                     <option>selecciona una Escuela</option>
                     <option>Obediencia</option>
                     <option>Servidores</option>
                     <option>Vision</option>
                     <option>Academia De Lideres</option>

      
                 </select>
                    

                  </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                <label>DOCENTE</label>
                      
                <select class="form-control"  id="escuela" name="escuela" data-placeholder="Selecciona" style="width: 100%;">
                     <option>seleccione un Docente</option>
                     <option>Mary Adames</option>
                     <option>Jose Torrealba</option>
                     <option>Nancy de Melendez</option>
                     <option>Yoryanis Brito</option>

      
                 </select>
                    

                  </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                <div class="form-group">
                <label>ZONA</label>
                      
                <select class="form-control"  id="escuela" name="escuela" data-placeholder="Selecciona" style="width: 100%;">
                     <option>selecciona una Zona</option>
                     <option>Garabatal</option>
                     <option>Carucieña</option>
                     <option>Jose Felix</option>
                     <option>Cerrajones</option>

      
                 </select>
                    

                  </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                <label>Auxiliar</label>
                      
                <select class="form-control"  id="escuela" name="escuela" data-placeholder="Selecciona" style="width: 100%;">
                     <option>seleccione un Auxiliar</option>
                     <option>Mary Adames</option>
                     <option>Jose Torrealba</option>
                     <option>Nancy de Melendez</option>
                     <option>Yoryanis Brito</option>

      
                </select>
                    

                  </div>
                </div>
                    <!-- /.form-group -->
            </div>                   
  
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>DÍA </label>
                                  <tr>
                        <td><input type="text" class="form-control" maxlength="20" placeholder="Ingrese el día" name="nombre" id="nombre" /> <max 30
                        characters a-z A-Z></td>
                    </div>

                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>HORA</label>
                                        
                        <input type="time" class="form-control" maxlength="30" placeholder="Ingrese la hora" name="apellido" id="apellido"/> <max 40 
                        characters a-z A-Z>
                    </div>
                    <!-- /.form-group -->

                </div>
                    <!-- /.form-group -->
            </div> 
            <div class="row">
                      <div class="col-md-6">

                          <!-- /.form-group -->
                      
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>FECHA DE Inicio:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fecha_nacimiento" id="fecha_nacimiento">
                  
                        </div>
                    </div>

                    <div class="form-group">
                               <label>DIRECCIÓN DEL GRUPO</label>
                                <td><input type="text"class="form-control"  maxlength="30" placeholder="ingrese la dirección del grupo" /> <max 30 characters a-z A-Z></tr>
                    </div>
                          <!-- /.form-group -->
                        </div>
                              <!-- /.col -->
                        <div class="col-md-6">

                        <div class="form-group">
                  <label>FECHA DE CULMINACIÓN:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fecha_nacimiento" id="fecha_nacimiento">
                  
                        </div>
                    </div>

                    <div class="form-group">
                            <label>DESCRIPCIÓN</label>
                            <input type="text" class="form-control" maxlength="30" placeholder="ingrese la descripcio'n" /> <max 30 characters a-z A-Z>
                    </div>
                        <!-- /.form group -->                  
                      <!-- /.col -->
                      </div>
  
                      
<!-- /.row -->
<div class="col-md-6">
<div class="form-group">
                  <label>FECHA DE INGRESO:</label>
                  <input disabled name="fecha_inicio" class="form-control" id="current_date"/>
                        
                        </div>
                    <!-- /.form-group -->

                    <!-- /.form-group -->
                </div>

                                     <!-- Date -->

             
<!-- /.col -->
</div>
<!-- /.row -->
                         <!-- Date -->
    
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").value = day + "/" +  month+ "/" + year;
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
                  <a class="btn btn-success col fileinput-button" href='grupoasignacionest/registro'>
                  <i class="fas fa-arrow-right"></i>
                          <span>SIGUENTE</span>
                      </a>
                  
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
