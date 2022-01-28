<div class="container mt-4">
    <h1>Daftar Mahasiswa</h1>
    <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-primary mb-3">Tambah Data Mahasiswa</a>
    <?php foreach($data['mahasiswa'] as $mhs): ?>
        <ul>
            <li><?= $mhs['nama'];?></li>
            <li><?= $mhs['nrp'];?></li>
            <li><?= $mhs['email'];?></li>
        </ul>
    <?php endforeach; ?>
</div>