
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">consulta</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
           
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
                          nombre
                      </th>
                      <th style="width: 20%">
                          apellido
                      </th>
                      <th style="width: 10%">
                          cedula
                      </th>
                      <th style="width: 20%">
                          telefono
                      </th>
                      <th style="width: 30%" >
                          direccion
                      </th>
                      <th >
                          zona
                      </th>
                      <th >

                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($estudiantes as $key => $estudiante){
                        $i = $key + 1 ;
                        echo "<tr> 
                       <td>
                         $i
                      </td>
                      <td>
                          <a>
                              ".$estudiante->nombre."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$estudiante->apellido."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$estudiante->cedula."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$estudiante->telefono."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$estudiante->nombre."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$estudiante->nombre."
                          </a>

                      </td>
                      <td class='project-actions text-right'>

                      <a class='btn btn-info btn-sm' href='app/estudiantemodificar?id=".$estudiante->id."'>
                          <i class='fas fa-pencil-alt'>
                          </i>
                          Edit
                      </a>
                      <a class='btn btn-danger btn-sm' href='app/estudianteeliminar?id=".$estudiante->id."'>
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