<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?= Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h1>Daftar Mahasiswa</h1>
            <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#insertmhs">Tambah Data Mahasiswa</a>
            <ul class="list-group">
                <?php foreach ($data['mahasiswa'] as $mhs) : ?>
                    <li class="list-group-item"><?= $mhs['nama'] ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge bg-danger float-end mr-2" onclick="return confirm('Yakin ta pean?');">Hapus</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge bg-primary float-end mx-2">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="modal fade" id="insertmhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Mahasiswa</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="nrp" class="form-label">NRP</label>
                                    <input type="number" class="form-control" id="nrp" name="nrp">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="jurusn">Jurusan</label>
                                    <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                                        <option selected>Bukaen tolol</option>
                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Teknik Genjot Makima">Teknik Genjot Makima</option>
                                    </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>