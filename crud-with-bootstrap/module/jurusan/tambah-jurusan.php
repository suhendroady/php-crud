<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Input Data Jurusan</h1>
    <p class="lead">
        Isilah form berikut dengan benar.
    </p>
</div>
<form action="module/jurusan/aksi.php?module=jurusan&action=insert" method="POST">
    <div class="form-group row">
        <label for="jurusan" class="col-sm-2 col-form-label">Nama Jurusan</label>
        <div class="col-sm-10">
            <input type="text" name="nama_jurusan" class="form-control" id="staticEmail" placeholder="nama jurusan.." autofocus>
        </div>
    </div>
    <div class="form-group row">
        <label for="singkatan" class="col-sm-2 col-form-label">Singkatan</label>
        <div class="col-sm-10">
            <input type="text" name="singkatan" class="form-control" id="staticEmail" placeholder="singkatan..">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" name="submit" class="btn btn-outline-primary">Simpan Data</button>
            <button class="btn btn-outline-secondary">Kembali</button>
        </div>
    </div>
</form>