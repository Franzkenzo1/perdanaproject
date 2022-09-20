<a href="/create"><button type="button" class="btn btn-secondary">Tambah</button></a> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">NPM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Created at</th>
      <th scope="col">Aksi</th>
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
      <td>
        <form action="/delete/<?= $mhs['id'] ?>" method="post">
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>

        <form action="/edit/<?= $mhs['id'] ?>" method="get">
          <input type="hidden" name="_method" value="UPDATE">
          <button type="submit" class="btn btn-warning">Edit</button>
        </form>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>