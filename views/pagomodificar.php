  <!-- Content Wrapper. Contains page content -->
  <div class="">
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
            <h3 class="card-title">PAGO MODIFICAR</h3>

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
                <!-- Date dd/mm/yyyy -->
                <div class="form-group">
                  <label>FECHA DEL PAGO:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask name="fecha_pago" id="fecha_pago" required value="<?= $pago->fecha_pago; ?>"/>
                  
                        </div>
                    </div> 
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>NÚMERO DE REFERENCIA</label>
                        <input type="text"  class="form-control"  placeholder="Ingrese  número referencia" name="numero_referencia" id="numero_referencia" required value="<?= $pago->numero_referencia; ?>"/>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                             <div class="form-group">
                           
                                <label>TIPO DE PAGO </label>
         
                                        <select class="form-control" id="tipo_id" name="tipo_id"  data-placeholder="Selecciona"
                                        style="width: 100%;" required value="<?= $pago->tipo->tipo_nombre; ?>">
                                         <?= $tiposOptions ?>

                                    </select>
                            </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>PAGO TOTAL</label>
                        <input type="text"  class="form-control"  placeholder="Ingrese  pago" name="pago_total" id="pago_total" required value="<?= $pago->pago_total; ?>"/>
                    </div>
                </div>
                    <!-- /.form-group -->
            </div>
                      <!-- /.col -->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>DESCRIPCIÓN</label>
                        <td><input type="text"class="form-control"  maxlength="30" placeholder="Descripción" name="descripcion" id="descripcion" required value="<?= $pago->descripcion; ?>"/> <max 30
                        characters a-z A-Z></tr>
                              </div>
                              <!-- /.form-group -->
                              <div class="form-group">
                                
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
