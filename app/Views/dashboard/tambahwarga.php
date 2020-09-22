
    <!-- Begin Page Content -->
    <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Warga</h1>

</div>

<!-- Content Row -->
<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
    <h6 class="m-0 font-weight-bold text-primary">Data Warga</h6>
  </div>
  <div class="card-body">
<form class="needs-validation" role="form" id="formwarga"  name="formwarga" method="POST" enctype="multipart/form-data" autocomplete="on">
<div class="row">
<div class="col-md-6 mb-3">
  <label for="nik">NIK</label>
  <div class="form-group">
      <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" required>
  </div>
</div>
<div class="col-md-6 mb-3">
<label for="nama">Nama Warga</label>
<div class="form-group">
  <input type="text" class="form-control" id="nama" name="nama" placeholder="nama warga">
</div>
</div>
</div>

<div class="row">
<div class="col-md-6 mb-3">
<label for="mac">Alamat Tempat Tinggal</label>
<div class="form-group">
  <input type="text" class="form-control" id="mac" name="mac" placeholder="alamat">
</div>
</div>
<div class="col-md-6 mb-3">
<label for="skpd">Kecamatan</label>
<div class="form-group">
  <select class="custom-select d-block w-100" id="skpd" name="skpd" required>
    <option value="">Pilih...</option>
    
    <option value="1">Baiturrahman</option>
    <option value="2">Kuta Alam</option>
    
  </select>
</div>
</div>

<div class="col-md-6 mb-3">
<label for="pendatang">Pendatang</label>
<div class="form-group">
  <select class="custom-select d-block w-100" id="pendatang" name="pendatang" required>
    <option value="">Pilih...</option>
    
    <option value="1">Ya</option>
    <option value="2">Tidak</option>
    
  </select>
</div>
</div>

<div class="col-md-6 mb-3">
<label for="perjalanan">Pelaku Perjalanan</label>
<div class="form-group">
  <select class="custom-select d-block w-100" id="perjalanan" name="perjalanan" required>
    <option value="">Pilih...</option>
    
    <option value="1">Ya</option>
    <option value="2">Tidak</option>
    
  </select>
</div>
</div>

</div>


<button type="submit" id="tombollogin" class="btn btn-primary btn-user">
<span id="loader" role="status" aria-hidden="true"></span>
<span class="sr-only">Loading...</span>Simpan
</button>
<input type="hidden" id="myhide" name="<?php echo csrf_token(); ?>" value="<?php csrf_hash(); ?>">

</form>
</div>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->