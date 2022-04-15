<div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>
  
    <div class="row">
        <div class="col-lg-12">
          <h3>Data Mahasiswa dan Matakuliah</h3>
          <ul class="list-group">
              <li class="list-group-item">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NIM</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Jurusan</th>
                      <th scope="col">Matakuliah</th>
                      <th scope="col">Pilihan</th>
                    </tr>
                  </thead>
                  <?php foreach( $data['mhs1'] as $mhs ) : ?>
                  <tbody>
                    <tr>
                      <th scope="row"><?= $mhs['nim']; ?></th>
                      <td><?= $mhs['nama']; ?></td>
                      <td><?= $mhs['jurusan']; ?></td>
                      <td><?= $mhs['kode_mk']; ?></td>
                      <td><?= $mhs['nama_mk']; ?></td>
                      <td>
                      <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                      <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">detail</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </li>
          </ul>      
        </div>
    </div>

</div>







