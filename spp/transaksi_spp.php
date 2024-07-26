<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Transaki
        </div>
        <div class="card-body">
            <form action="spp/proses_tambah_spp.php" method="POST">
                  <div>
                    <label for="nipd">NIPD:</label>
                    <input class="form-control" type="text" id="nipd" name="nipd" required>
                  </div>
                  <div>
                    <label for="nama_siswa">Nama Siwa:</label>
                    <input class="form-control" type="text" id="nama_siswa" name="nama_siswa" required>
                  </div>
                  <div>
                    <label for="kelas">Kelas:</label>
                    <input class="form-control" type="text" id="kelas" name="kelas" required>
                  </div>
                  <div>
                      <label for="bulan">Bulan:</label>
                      <input class="form-control" type="text" id="bulan" name="bulan" required>
                  </div>
                  <div>
                    <label for="bayar">Jumlah Bayar:</label>
                    <input class="form-control" type="text" id="bayar" name="bayar" required>
                  </div>
                  <div>
                  <button  type="submit" class="btn btn-primary mt-3">Bayar</button>
        </div>
    </form>
        </div>
    </div>
</div>