<div class="container mt-4">
    <div class="row">
        <div class="col-lg-10">
        <h3>Data Matakuliah</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">  </th>
                            <th scope="col">Kode Matakuliah</th>
                            <th scope="col">Nama Matakuliah</th>
                            <th scope="col">SKS</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach( $data['mkt'] as $mkt ) : ?>
                            <tr>
                            <th scope="row"><?= $mkt['id']; ?></th>
                            <td><?= $mkt['kode_mk']; ?></td>
                            <td><?= $mkt['nama_mk']; ?></td>
                            <td><?= $mkt['sks']; ?></td>
                            <td><?= $mkt['dosen_mk']; ?></td>
                            <td>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mkt['id']; ?>" class="badge badge-warning float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mkt['id']; ?>">Pilih Matakuliah</a>
                            </td>
                            </tr>
                            <tr>
                                <td colspan="6">
                                <span class="badge badge-primary float-left">S1 Teknik Informatika</span>
                                <span class="badge badge-secondary float-left ml-3">Teknik Elektro</span>
                                <span class="badge badge-warning float-left ml-3">FT</span>
                                <span class="badge badge-danger float-left ml-3">2018</span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </li>
            </ul>   
        </div>   
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nim">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
          </div>

          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Teknik Komputer">Teknik Komputer</option>
              <option value="Manajemen Informatika">Manajemen Informatika</option>
              <option value="Manajemen Informasi">Manajemen Informasi</option>
              <option value="Teknologi Informasi">Teknologi Informasi</option>
            </select>
          </div>
          <div class="form-group">
            <label for="matakuliah">Matakuliah yang akan diambil</label>
            <select class="form-control" id="matakuliah" name="matakuliah">
              <option value="NINF0034">Pemrograman Web</option>
              <option value="NICF0134">Pemrograman Berorientasi Object</option>
              <option value="NINF0111">Pemrograman Deklaratif</option>
              <option value="NINF0603">Pemrograman Dasar</option>
              <option value="NINF1821">Struktur Data</option>
              <option value="NINF0201">Pemrograman Mobile</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>