<div class="contrainer mt-3" >

<div class="row">
    <div class="col-lg-6">
        <?php flasher::flash();?>
    </div>
</div>

    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolData" data-bs-toggle="modal" data-bs-target="#formModal"> 
                Tambah Data Siswa
        </button>
        <br><br>
            <h2> Daftar Siswa</h2>
            <ul class="list-group">
                <?php foreach ($data['siswa'] as $siswa) :?>
                <li class="list-group-item  align-items-center ">
                    <?= $siswa['nama']; ?>
                    <a href="<?= ARARA; ?>/siswa/hapus/<?= $siswa ['id_siswa'];?>" class= "badge bg-danger float-end me-1" onclick="return confirm ('yakin?');" >Hapus</a>
                    <a href="<?= ARARA; ?>/siswa/ubah/<?= $siswa ['id_siswa'];?>" class= "badge bg-success float-end me-1 tampilUbahSiswa" data-bs-toggle="modal" 
                        data-bs-target="#formModal" data-id = "<?= $siswa['id_siswa']; ?>" >Ubah</a>
                    <a href="<?= ARARA; ?>/siswa/detail/<?= $siswa ['id_siswa'];?>" class= "badge bg-primary float-end me-1" >Detail</a>
                </li> 
                <?php endforeach; ?>   
            </ul>
        
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="forModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="<?= ARARA; ?>/siswa/tambah" method="post">
        <input type="hidden" name="id_siswa" id="id_siswa">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class= "form-control" id="nama" name="nama" >
            </div>
            <div class="form-group">
                <label for="kelas" class="form-label">Kelas:</label>
                <input type="text" class= "form-control" id="kelas" name="kelas">
            </div>

            <div class="form-grup">
                <label for="jurusan">Jurusan</label>
                <select class="form-control"id="jurusan" name="jurusan">
                    <option value="Teknik Informatika">Rekayasan Perangkat Lunak</option>
                    <option value="Teknik Komputer dan jaringan">Teknik Komputer dan jaringan</option>
                    <option value="ATPH">Agrobisnis </option>
                    <option value="BDP">Bisnis Daring dan Pemasaran</option>
                    <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                    <option value="Kimia Industri">Kimia Industri</option>
                    <option value="Tata Boga ">Tata Boga</option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
      </div>
    </div>
  </div>
</div>