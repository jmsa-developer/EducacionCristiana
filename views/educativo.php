
  <section class="content">
  <!-- Content Wrapper. Contains page content -->
  <div class="content">
    <!-- Content Header (Page header) -->
 
    
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Agregar tema</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                
              </div>
            </div>
   

    <!-- Main content -->
    <section class="content">
      <div class="container">
       
              <!-- /.card-header -->
              <!-- form start -->
              <form>
             
                
                  <div class="card-body">
                  <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nombre del tema</label>
                                 
                 <input type="text" class="form-control" name="nombre" id="nombre" maxlength="20" placeholder="Ingrese nombre del tema" required/> 
                  </div>
                <!-- /.form-group -->
             
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                
                      <!-- /.col -->

                <!-- /.card-body -->
                <div class="card-body">
                <label>Descripcion</label>
                <textarea id="summernote" name="summernote" >
                  
                      Place <em>some</em> <u>text</u> <strong>here</strong>
                    </textarea>
                  </div>
                 
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="archivo" name="archivo">
                      <label class="custom-file-label" for="exampleInputFile">elegir archivo</label>
                    </div>
                    
                  </div> 
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                    </div>
                
              </form>
            
            <!-- /.card -->
                  
                
               
              
              <!-- /.card-body -->
              </section>
            </div>
          </div>
          </div>
          </div>
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

 
  })
</script>
<!-- Page specific script -->
<script>
  $(function () {
    bsCustomFileInput.init();
  });
  </script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

