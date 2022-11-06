  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DOCENTE</h1>
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
                        <label>NOMBRES</label>
                                  <tr>
                        <td><input type="text" class="form-control" maxlength="20" placeholder="Ingrese nombre" name="nombre" id="nombre" /> <max 30
                        characters a-z A-Z></td>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>CEDULA</label>
                        <input type="text"  class="form-control"  placeholder="Ingrese  cedula" name="cedula" id="cedula"/>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>APELLIDOS</label>
                                        
                        <input type="text" class="form-control" maxlength="30" placeholder="Ingrese apellido" name="apellido" id="apellido"/> <max 40 
                        characters a-z A-Z>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>TELEFONO</label>
                        <input type="text" class="form-control" data-inputmask='"mask": "(9999) 999-9999"' data-mask name="telefono" id="telefono"></td> <max 11
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
                        <td><input type="text"class="form-control"  maxlength="30" placeholder="ingrese lider direccion" name="direccion" id="direccion"/> <max 30
                        characters a-z A-Z></tr>
                              </div>
                              <!-- /.form-group -->
                              <div class="form-group">
                                
                              </div>
 
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>FECHA DE NACIMIENTO:</label>

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
                          <div class="form-group">
                            <label>Email</label>
                            <td><input type="email" class="form-control" name="email" id="email" placeholder="Enter email address"></td>
                          </div>
                                          <!-- /.form group -->

                                          <div class="form-group">
                           
                           <label>NOMBRE DEL MINISTERIO </label>
         
         <select class="form-control" id="ministerio_id" name="ministerio_id"  data-placeholder="Selecciona"
       style="width: 100%;">
       <?= $ministeriosOptions ?>

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
                                <label>LIDER DE MINISTERIO</label>
                              
                <input type="text" class="form-control" maxlength="30" placeholder="Enter lider del ministerio" name="lider_ministerio" id="lider_ministerio"/> <max 30
                    characters a-z A-Z>
                              
                                
                              
                            </div> 


                                  <!-- /.form-group -->
                                  <div class="form-group">
                               
                               <label>LIDER DEL GRUPO</label>
               
               <td><input type="text"class="form-control"  maxlength="30" placeholder="ingrese lider del grupo" name="lider_gdc" id="lider_gdc"/> <max 30
                   characters a-z A-Z></tr>
                             </div>
                                  
                                
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
                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->
                        <div class="col-md-6">

                        <div class="form-group">
                               
                               <label>GDC</label>
               
               <td><input type="text"class="form-control"  maxlength="30" placeholder="ingrese el Codigo del GDC" name="gdc" id="gdc"/> <max 30
                   characters a-z A-Z></tr>
                             </div>




                             <div class="form-group">
                <label>PASTOR</label> 
                      
                      <select class="form-control"  id="pastor_id" name="pastor_id" data-placeholder="Selecciona"
            style="width: 100%;">
            <?= $pastoresOptions ?>
      
    </select>
                    

                    </div>
                    <div class="form-group">
                          <label>FECHA DE INGRESO:</label>
                    <input readonly name="fecha_inicio" class="form-control" id="current_date"/>
                        
                                    </div>        
<!-- /.col -->
</div>
<!-- /.row -->
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
