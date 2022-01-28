<div class="container mt-4">
    <h1>Detail Mahasiswa</h1>
    <ul class="list-group">
        <li class="list-group-item  justify-content-between align-item-center d-flex"><?= $data['mahasiswa']['nama'] ?>
        </li>
        <li class="list-group-item  justify-content-between align-item-center d-flex">NIM : <?= $data['mahasiswa']['nrp'] ?>
        </li>
        <li class="list-group-item  justify-content-between align-item-center d-flex">Email : <?= $data['mahasiswa']['email'] ?>
        </li>
        <li class="list-group-item  justify-content-between align-item-center d-flex">Jurusan : <?= $data['mahasiswa']['jurusan'] ?>
        </li>
    </ul>
    <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary mb-3 mt-3">Kembali</a>
</div>