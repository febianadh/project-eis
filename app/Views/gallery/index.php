<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
        <h5 class="mb-4">Halo, <?= session('nama') ?> </h5>
            <h1 class="mb-4">Daftar Galeri</h1>
            <a href="/gallery/new">Tambahkan galeri baru</a>
                        </br>
                        </br>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Nama</th>
                        <th scope="col ">Tahun</th>
                        <th scope="col ">Seniman</th>
                        <th scope="col ">Deskripsi</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($gallery2 as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['tahun'] ?></td>
                        <td><?= $item['seniman'] ?></td>
                        <td><?= $item['deskripsi'] ?></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/gallery/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Apakah Anda yakin?`)">
                                    <a href="/gallery/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <?= $pager->links('gallery2', 'custom_pagination') ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>