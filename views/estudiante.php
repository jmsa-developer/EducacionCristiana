

  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ESTUDIANTE</h1>
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
                                 
                 <input type="text" class="form-control"name="nombre" id="nombre" maxlength="20" placeholder="Ingrese nombre" /> <max 30
                            characters a-z A-Z>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  
                      <label>CEDULA</label>
                  
                   <input type="text"  class="form-control" name="cedula" id="cedula" placeholder="Ingrese  cedula" />
                    
      
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                        <label>APELLIDOS</label>
                                        
                <input type="text" class="form-control" name="apellido" id="apellido" maxlength="30" placeholder="Ingrese apellido" /> <max 40
                                  characters a-z A-Z>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                        <label>TELEFONO</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" data-inputmask='"mask": "(9999) 999-9999"' data-mask></td>
                          <max 11
                          characters 0-9>
                        </div>
                      </div>
                  
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                      <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                <label>DIRECCION</label>
                
                <input type="text"class="form-control" name="direccion" id="direccion" maxlength="30" placeholder="ingrese direccion" /> <max 30
                    characters a-z A-Z>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  
                <label>Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address">
                         
      
                  </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                  <label>ZONA</label>
                  
                  <input type="text"  class="form-control" name="zona" id="zona" placeholder="Ingrese  zona" />
                   
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                <label>FECHA DE NACIMIENTO:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  
                        </div>
                    </div>
                       
                        </div>
                     
                  
                        <!-- /.form-group -->
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                           
                          <label>NOMBRE DEL MINISTERIO </label>
        
        <select class="form-control" id="" name=""  data-placeholder="Selecciona"
      style="width: 100%;">
<option>selecciona</option>
<option>Ministrio Iglekids</option>
<option>ministerio para Jovenes</option>
<option>Ministerio para Matrimonios</option>
<option>Ministerio para la Familia</option>
<option>Viña Loma 1</option>
<option>Viña Loma 2</option>
<option>Viña Centro</option>
<option>Viña los Pocitos</option>
<option>Viña Pavia</option>
<option>Viña Cuji</option>
<option>Viña Curariguita</option>
<option>Viña Puerto Ordaz</option>
<option>Viña Sagrada Familia</option>
</select>
                              </div>
                              <!-- /.form-group -->
                             
                              
                            
                              <div class="form-group">
                              <label>LIDER DEL GRUPO</label>
                    
                    <input type="text"class="form-control" name="apellido" id="apellido" maxlength="30" placeholder="ingrese lider del grupo" /> <max 30
                        characters a-z A-Z>
                              
                                
                              
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /.col -->
                
                     
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Lider del Ministerio</label>
                            <td><input type="text" class="form-control" name="" id="" placeholder="Enter email address"></td>
                          </div>
                                          <!-- /.form group -->
                                          
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                <label>TURNO</label>
                      
                      <select class="form-control"  id="turno" name="turno" data-placeholder="Selecciona"
            style="width: 100%;">
      <option>selecciona</option>
      <option>1er</option>
      <option>2do</option>
      <option>3er</option>
      
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
                      
                      <input type="text" class="form-control" name="pastor" id="pastor" maxlength="30" placeholder="ingrese pastor" /> <max 30
                          characters a-z A-Z>
                                  </div>
                                  <!-- /.form-group -->
                                  
                                  
                                
                               
                      
                              </div>
                              <!-- /.col -->
                        <div class="col-md-6">
                          <div class="form-group">
                          <label>FECHA DE INGRESO:</label>
                    <input disabled name="fecha_inicio" class="form-control" id="current_date"/>
                        
                                    </div>
                         
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
  <!-- /.content-wrapper -->
