
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Consulta Escuela</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
           
          </div>
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

          <div class="card-body p-0">
              <table class="table table-striped projects">
                  <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 30%" >
                          Nombre de la Escuela
                      </th>
                      <th style="width: 20%">
                          Numero de Temas
                      </th>
                      <th style="width: 10%">
                          Descripción
                      </th>



                      <th >

                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($escuelas as $key => $escuela){
                        $i = $key + 1 ;
                        echo "<tr> 
                       <td>
                         $i
                      </td>
                      <td>
                          <a>
                              ".$escuela->nombre."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$escuela->tema."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$escuela->descripcion."
                          </a>

                      </td>


                      <td class='project-actions text-right'>

                      <a class='btn btn-info btn-sm' href='escuela/modificar?id=".$escuela->id."'>
                          <i class='fas fa-pencil-alt'>
                          </i>
                          Edit
                      </a>
                      <a class='btn btn-danger btn-sm' href='app/docenteeliminar?id=".$escuela->id."'>
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
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script src="public/dist/js/consulta.js"></script>
<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").value = year + "/" +  month+ "/" + day;
</script