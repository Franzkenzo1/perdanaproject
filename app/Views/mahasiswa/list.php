<a href="/create"><button type="button" class="btn btn-secondary">Tambah</button></a> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Created at</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $nomor = 1;
    foreach($mahasiswa as $mhs){
    ?>
    <tr>
      <td><?= $mhs['npm'] ?></td>
      <td><?= $mhs['nama'] ?></td>
      <td><?= $mhs['alamat'] ?></td>
      <td><?= $mhs['created_at'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>