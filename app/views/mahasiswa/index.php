<div class="container mt-3">
  <!-- Flash -->
  <div class="row">
    <div class="col-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>

  <!-- Form -->
    <div class="row">
        <div class="col-6">
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
        </button>
            <h1>Daftar Mahasiswa</h1>

            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $mhs['nama']; ?>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary text-white">Detail</a>
                            </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
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