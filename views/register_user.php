  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REGISTRO USURIO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">formulario</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


<form method="post" name="register">
<section class="content">
<div class="container-fluid">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">

                    <label>NOMBRE</label>

                    <input type="text" class="form-control" maxlength="20" placeholder="Ingrese nombre" name="nombre" required/>

                </div>

                <div class="form-group">

                    <label>CEDULA</label>

                    <input type="text" class="form-control" placeholder="Ingrese cedula" name="cedula" required />

                </div>

            </div>


            <div class="col-md-6">

                <div class="form-group">

                    <label>APELLIDOS</label>

                    <input type="text" class="form-control" maxlength="30" placeholder="Ingrese apellido" name="apellido" required />

                </div>

                <div class="form-group">

                    <label>EMAIL</label>

                    <input type="email" class="form-control" name="email" placeholder="Ingrese email" required>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">

                    <label>USUARIO</label>

                    <input type="text" class="form-control" name="usuario" placeholder="Ingrese su usuario" required/>

                </div>



            </div>
            <div class="col-md-6">


                <div class="form-group">

                    <label>CLAVE</label>

                    <input type="password" class="form-control" name="clave" placeholder="Ingrese su clave" required />

                </div>


            </div>
            <button type="submit" class="btn btn-primary col start">
                <i class="fas fa-upload"></i>
                <span>GUARDAR</span>
            </button>
</DIV>
            </section>

        </form>
</div>
