

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Trace Warga</h1>
       
          </div>

          <!-- Content Row -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Data Warga</h6>
            </div>
            <div class="card-body">
      <form class="needs-validation" role="form"  name="formtrace" method="POST" enctype="multipart/form-data" autocomplete="on">
      <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nik">NIK</label>
            <div class="form-group">
                <input type="text" class="form-control mb-2" id="nik" name="nik "placeholder="Masukkan NIK" required>
                <button type="submit" id="tomboltracing" class="btn btn-primary">
          <span id="loader" role="status" aria-hidden="true"></span>
					<span class="sr-only">Loading...</span>TRACE
        </button>
        <input type="hidden" id="myhide" name="<?php echo csrf_token(); ?>" value="<?php echo csrf_hash(); ?>">

            </div>
          </div>
         
        </div>
      </form>
    </div>
  </div>

      
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

     
 