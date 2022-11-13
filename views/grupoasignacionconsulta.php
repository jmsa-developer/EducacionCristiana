
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Consulta Grupo</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
           
          </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <form action="simple-results.html">
                        <div class="input-group">
                            <input type="search" class="form-control form-control-lg" placeholder="Buscar">
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
                          Zona
                      </th>
                      <th style="width: 20%">
                          Dirección
                      </th>
                      <th style="width: 10%">
                          Docente
                      </th>
                      <th style="width: 20%">
                          Numero de Estudiantes
                      </th>
                      <th style="width: 30%" >
                          Día
                      </th>
                      <th >
                          Hora
                      </th>
                      <th >

                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($grupoasignaciones as $key => $grupoasignacion){
                        $i = $key + 1 ;
                        echo "<tr> 
                       <td>
                         $i
                      </td>
                      <td>
                          <a>
                              ".$grupoasignacion->zona->zona_nombre."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$grupoasignacion->direccion."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$grupoasignacion->docente->nombre."
                          </a>

                      </td>
                      <td>
                          <a>
                           ".$grupoasignacion->numero_estudiantes."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$grupoasignacion->dia."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$grupoasignacion->hora."
                          </a>

                      </td>
                      <td class='project-actions text-right'>

                      <a class='btn btn-info btn-sm' href='grupoasignacion/modificar?id=".$grupoasignacion->id."'>
                          <i class='fas fa-pencil-alt'>
                          </i>
                          Edit
                      </a>
                      <a class='btn btn-danger btn-sm' href='app/docenteliminar?id=".$grupoasignacion->id."'>
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