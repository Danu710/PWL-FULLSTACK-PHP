<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Transaki
        </div>
        <div class="card-body">
            <form action="proses/proses_tambah_spp.php" method="POST">
                  <div>
                    <label for="nipd">NIPD:</label>
                    <input class="form-control" type="text" id="nipd" name="nipd" required>
                  </div>
                  <div>
                    <label for="bulan_dibayar">Bulan Dibayar:</label>
                    <input class="form-control" type="text" id="bulan_dibayar" name="bulan_dibayar" required>
                  </div>
                  <div>
                    <label for="tahun_dibayar">Tahun Dibayar:</label>
                    <input class="form-control" type="text" id="tahun_dibayar" name="tahun_dibayar" required>
                  </div>
                  <div>
                    <label for="jumlah_bayar">Jumlah Bayar:</label>
                    <input class="form-control" type="text" id="jumlah_bayar" name="jumlah_bayar" required>
                  </div>
                  <div>
                  <button  type="submit" class="btn btn-primary mt-3">Bayar</button>
        </div>
    </form>
        </div>
    </div>
</div>