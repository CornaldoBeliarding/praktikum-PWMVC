<div class="container mt-5">
<h4>Daftar mata kuliah yang diikuti oleh <?= $data['mhs1']['nama']; ?></h4>
    <div class="card" style="width: 45rem;">
      <div class="card-body">
        <table>
          <tr>
            <td>NIM</td>
            <td>:</td>
            <td><h5 class="card-subtitle mb-2 text-muted"><?= $data['mhs1']['nim']; ?></h5></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td><h6 class="card-title"><?= $data['mhs1']['nama']; ?></h6></td>
          </tr>
          <tr>
            <td>Email</td>
            <td>:</td>
            <td><?= $data['mhs1']['email']; ?></td>
          </tr>
          <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><?= $data['mhs1']['jurusan']; ?></td>
          </tr>
          <tr>
            <td>Kode Matakuliah</td>
            <td>:</td>
            <td><?= $data['mhs1']['kode_mk']; ?></td>
          </tr>
          <tr>
            <td>Nama Matakuliah</td>
            <td>:</td>
            <td><?= $data['mhs1']['nama_mk']; ?></td>
          </tr>
          <tr>
            <td>SKS</td>
            <td>:</td>
            <td><?= $data['mhs1']['sks']; ?></td>
          </tr>
          <tr>
            <td>Nama Dosen Matakuliah </td>
            <td>:</td>
            <td><?= $data['mhs1']['dosen_mk']; ?></td>
          </tr>
          <tr>
              <td>
              <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
              </td>
          </tr>
        </table>
      </div>
    </div>

</div>