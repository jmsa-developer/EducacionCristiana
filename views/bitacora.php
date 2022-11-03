 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                    <th>usuario</th>
                    <th>url</th>
                    <th>accion</th>
                    <th>modelo</th>
                    <th>Hora</th>
                    <th>fecha</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($bitacora as $key => $bitacora){
                        $i = $key + 1 ;
                        echo "<tr> 
                       <td>
                         $i
                      </td>
                      <td>
                          <a>
                              ".$bitacora->user_id."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$bitacora->url."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$bitacora->accion."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$bitacora->modelo."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$bitacora->hora."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$bitacora->fecha."
                          </a>

                      </td>
                      
                      </tr>";

                    }

                  ?>



                
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


