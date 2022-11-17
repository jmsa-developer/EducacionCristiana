
  <section class="content">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
 
     
        
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              
              <h3 class="card-title">consultar temas</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                
              </div>
      
   

    <!-- Main content -->
  
            <!-- /.card -->

            
       
            <!-- /.card -->

          </div>

          <div class="card">
            <div class="card-header">
                <div class="row">
                    <form>
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Buscar" name="search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div> 
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-8">
            <!-- Form Element sizes -->
            <div class="card card-success">
              
             
              </div>
          
                
                <!-- /.card-header -->
                <div class="card-body">
                <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>temas</th>
                        <th>descripcion</th>
                   
                      </tr>
                    </thead>
                    <tbody>
                    <tbody>
                  <?php
                    foreach ($educativo as $key => $educativo){
                        $i = $key + 1 ;
                        echo "<tr> 
                       <td>
                         $i
                      </td>
                      <td>
                          <a>
                              ".$educativo->nombre."
                          </a>

                      </td>
                      
                      <td>
                          <a>
                              ".$educativo->summernote."
                          </a>

                      </td>
                      <td class='project-actions text-right'>
                      <a class='btn btn-info btn-sm' href='educativo/descargar?id=".$educativo->id."'>
                          <i class='fas fa-pencil-alt'>
                          </i>
                          Descargar archivo
                      </a>

                      <a class='btn btn-info btn-sm' href='educativo/modificar?id=".$educativo->id."'>
                          <i class='fas fa-pencil-alt'>
                          </i>
                          Edit
                      </a>
                      <a class='eliminar btn btn-danger btn-sm' href='educativo/eliminar?id=".$educativo->id."'>
                      <i class='fas fa-trash'>
                      </i>
                      Delete
                  </a>
                  </td>
                  
                      </tr>";

                    }

                  ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                  </ul>
               
                                
                  </form>
                </div>
                
              
                              
           
            
              
              <!-- /.card-body -->
              </section>
            </div>
          </div>
        </div>
     

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

