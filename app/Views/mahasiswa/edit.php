<form class="mx-5" action="/store" method="post">
  <div class="form-group">
    <label for="NPM">NPM Mahasiswa</label>
    <input type="number" class="form-control" id="NPM" name="NPM" value="<?= $npm ?>" readonly>
  </div>
  <div class="form-group">
    <label for="Nama">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="Nama" name="Nama" value="<?= $nama ?>">
  </div>
  <div class="form-group">
    <label for="Alamat">Alamat Mahasiswa</label>
    <textarea class="form-control" id="Alamat" rows="3" name="Alamat"><?= $alamat ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>