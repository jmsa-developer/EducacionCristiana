
   
            <h1>Bitacora</h1>
          
  

    <!-- Main content -->
    <section class="content">
  
       
            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">


                <table id="bitacora" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>#</th>
                    <th>usuario</th>
                    <th>url</th>
                    <th>accion</th>
                    <th>modelo</th>
               
                    <th>fecha hora</th>
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
                               ".$bitacora->fecha."
                          </a>

                      </td>
                      
                      </tr>";

                    }

                  ?>

<div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
                  </div>

                
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            
            <!-- /.card -->
         
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


