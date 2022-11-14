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
            <h3 class="card-title">ESCUELAS MODIFICAR</h3>

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
                        <label>NOMBRE DE LA ESCUELA</label>
                        <input type="text"  class="form-control"  placeholder="Ingrese nombre de la escuela" name="nombre" id="nombre" required value="<?= $escuela->nombre; ?>"/>
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>DESCRIPCIÓN</label>
                        <td><input type="text"class="form-control"  maxlength="150" placeholder="Descripción" name="descripcion" id="descripcion" required value="<?= $escuela->descripcion; ?>"/> <max 30
                        characters a-z A-Z></tr>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                <div class="form-group">
                        <label>NÚMERO DE TEMAS</label>
                        <input type="number"  class="form-control"  placeholder="Ingrese número de temas" name="tema" id="tema" required value="<?= $escuela->tema; ?>"/>
                    </div>
                    <!-- /.form-group -->

                </div>
                    <!-- /.form-group -->
            </div>
                      <!-- /.col -->
          

              
           
 
                
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
