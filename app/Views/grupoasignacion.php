  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content">
      <!-- /.container-fluid -->
    </section>

      <form method="post" name="test" action="grupoasignacion/registrofinal">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">GRUPO DE ASIGNACIÓN </h3>

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
                        <label>DIRECCIÓN DEL GRUPO</label>
                    <td><input type="text"class="form-control"  maxlength="30" placeholder="ingrese la dirección del grupo" name="direccion" id="direccion" required/> <max 30 characters a-z A-Z></tr>
                  </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                <label>DOCENTE</label>
                      
                <select class="form-control"  id="docente_id" name="docente_id" data-placeholder="Selecciona" style="width: 100%;">
                <?= $docentesOptions ?>

      
                 </select>
                    

                  </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                <div class="form-group">
                <label>ZONA</label>
                      
                <select class="form-control"  id="zona_id" name="zona_id" data-placeholder="Selecciona" style="width: 100%;">
                <?= $zonasOptions ?>


      
                 </select>
                    

                  </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Auxiliar </label>
                                  <tr>
                        <td><input type="text" class="form-control" maxlength="20" placeholder="Ingrese el día" name="auxiliar" id="auxiliar" /> <max 30
                        characters a-z A-Z></td>
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
                        <td><input type="text" class="form-control" maxlength="20" placeholder="Ingrese el día" name="dia" id="dia" /> <max 30
                        characters a-z A-Z></td>
                    </div>

                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>HORA</label>
                                        
                        <input type="time" class="form-control" maxlength="30" placeholder="Ingrese la hora" name="hora" id="hora"/> <max 40 
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
                    <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fecha_inicio" id="fecha_inicio">
                  
                        </div>
                    </div>

                    <div class="form-group">
                            <label>DESCRIPCIÓN</label>
                            <input type="text" class="form-control" maxlength="30" placeholder="ingrese la descripción" name="descripcion" id="descripcion"/> <max 30 characters a-z A-Z>
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
                    <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fecha_culminacion" id="fecha_culminacion">
                  
                        </div>
                    </div>


                        <!-- /.form group -->                  
                      <!-- /.col -->
                      </div>
  
                      

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
                    <button type="submit" class="btn btn-success fileinput-button">
                        <i class="fas fa-arrow-right"></i>
                        <span>SIGUENTE</span>
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
