
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">consultar usuarios</h3>

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
                          rol
                      </th>
                      <th style="width: 30%" >
                          direccion
                      </th>
                     
                      <th >

                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($usuario as $key => $usuario){
                        $i = $key + 1 ;
                        echo "<tr> 
                       <td>
                         $i
                      </td>
                      <td>
                          <a>
                              ".$usuario->nombre."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$usuario->apellido."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$usuario->cedula."
                          </a>

                      </td>
                      <td>
                          <a>
                               ".$usuario->rol_id."
                          </a>

                      </td>
                     
                      <td class='project-actions text-right'>

                      <a class='btn btn-info btn-sm' href='usuario/modificar?id=".$usuario->id."'>
                          <i class='fas fa-pencil-alt'>
                          </i>
                          Edit
                      </a>
                      <a class='btn btn-danger btn-sm' href='usuario/eliminar?id=".$usuario->id."'>
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

<script>
date = new Date();
year = date.getFullYear();
month = date.getMonth() + 1;
day = date.getDate();
document.getElementById("current_date").value = year + "/" +  month+ "/" + day;
</script