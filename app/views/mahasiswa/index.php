<div class="container mt-3">
  <!-- Flash -->
  <div class="row">
    <div class="col-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
        Tambah Data Mahasiswa
      </button>
    </div>
  </div>

  <!-- Judul Halaman -->
  <div class="row mb-3">
    <div class="col-lg-6">
      <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Mahasiswa..." name="keyword" id="keyword" autocomplete="off">
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit">Cari</button>
          </div>
        </div>
      </form>
      <h1>Daftar Mahasiswa</h1>

      <?php foreach ($data['mhs'] as $mhs) : ?>
        <ul class="list-group">
          <li class="list-group-item">
            <!-- Detail -->
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-right ml-1 text-white">Detail</a>

            <!-- Ubah -->
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success float-right tampilModalUbah ml-1 text-white" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>

            <!-- Hapus -->
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-right ml-1 text-white" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
          </li>
        <?php endforeach; ?>
        </ul>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Form -->
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="form-group">
            <label for="nim">Nim</label>
            <input type="number" class="form-control" id="nim" name="nim" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan" required>
              <option value="">Pilih Jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Elektro">Teknik Elektro</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>