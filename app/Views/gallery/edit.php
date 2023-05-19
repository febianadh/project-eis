<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Nama Galeri,<?= $data['nama'] ?></h5>

            <form action="/gallery/<?= $data['id'] ?>/update" method="post">
                <input type="hidden" name="_method" value="put" />

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" 
                        placeholder="Masukkan Nama Galeri" name="nama" value="<?= $data['nama'] ?>">
                </div>

                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" min="0" class="form-control" id="tahun" aria-describedby="emailHelp" 
                        placeholder="Masukkan Tahun Galeri" name="tahun" value="<?= $data['tahun'] ?>">
                </div>

                <div class="form-group">
                    <label for="seniman">Seniman</label>
                    <input type="text" class="form-control" id="seniman" aria-describedby="emailHelp" 
                    placeholder="Masukan Nama Seniman"  name="seniman" value="<?= $data['seniman'] ?>">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp" 
                    placeholder="Masukkan Deskripsi Galeri"  name="deskripsi" value="<?= $data['deskripsi'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>