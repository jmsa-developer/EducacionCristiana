

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reportes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">reportes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">reporte </h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              
            </div>
          </div>
        
        <form class="row p-5 d-flex justify-content-center" id="formulario" method="POST" action="?pagina=reporte_" target="_blank">
            <div class="formulario__grupo col-md-8" id="grupo__tipo">
                
                <label for="tipo" class="formulario__label">Tipo de Reporte: </label>
                <div class="col-md-6">
                <div class="formulario__grupo-input">
               
            
                    <select class="form-control" style="width: 100%;" name="tipo" id="tipo" required>
                    <option value=""></option> selecione  
                    <option value="estudiante">estudiantes</option>
                        <option value="escuelas">escuelas</option>
                        <option value="zona">zonas</option>
                        <option value="pendiente">pendiente</option>
                        <option value="cursos">Cursos</option>
                        <option value="pagos">pagos</option>
                        <option value="pendiente">pendiente</option>
                        <option value="pendiente">pendiente</option>
                        <option value="pendiente">pendiente</option>
                    </select>
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error"></p>
            </div>

            <div class="formulario__grupo formulario__grupoFecha d-none col-md-6" id="grupo__desde">
                <label for="desde" class="formulario__label">Desde</label>
                <div class="formulario__grupo-input">
                    <input type="date" class="form-control" name="desde" id="desde" >
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Indique la fecha</p>
            </div>
            <div class="formulario__grupo formulario__grupoFecha d-none col-md-6" id="grupo__hasta">
                <label for="hasta" class="formulario__label">Hasta</label>
                <div class="formulario__grupo-input">
                    <input type="date"  class="form-control" name="hasta" id="hasta">
                    <i class="formulario__validacion-estado fas fa-times-circle"></i>
                </div>
                <p class="formulario__input-error">Indique la fecha</p>
            </div>
            <div class="card-body">
            <div id="actions" class="row">
              <div class="col-lg-6">
           
                    
            <button type="submit" class="btn btn-primary col start">
                    <i class="fas fa-upload"></i>
                   <span>Generar Reporte</span>
                  </button>   
            <div class="formulario__grupo formulario__grupo-btn-enviar mt-3">
            </button>
            </div>
                <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Procesando...</p>
            </div>
                
            
            </div>
          <!-- /.card-body  -->
          
            <!-- /.card -->
          </div>
        
        <!-- /.row -->
            
        </form>
        </div>
    </div>
    </div>
   