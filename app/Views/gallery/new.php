<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Buat Galeri Baru</h5>

            <form action="/gallery/" method="post">

                <div class="form-group">
                    <label for="nama-galeri">Nama</label>
                    <input type="text" class="form-control" id="nama-galeri" aria-describedby="emailHelp" 
                        placeholder="Masukkan Nama Galeri" required name="nama">
                </div>

                <div class="form-group">
                    <label for="tahun-galeri">Tahun</label>
                    <input type="number" min="0" class="form-control" id="tahun-galeri" aria-describedby="emailHelp" 
                        placeholder="Masukkan Tahun Galeri" required name="tahun">
                </div>

                <div class="form-group">
                    <label for="seniman-galeri">Seniman</label>
                    <input type="text" class="form-control" id="seniman-galeri" aria-describedby="emailHelp" 
                        placeholder="Masukkan Nama Seniman" required name="seniman">
                </div>

                <div class="form-group">
                    <label for="deskripsi-galeri">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi-galeri" aria-describedby="emailHelp" 
                        placeholder="Masukkan Deskripsi Galeri" required name="deskripsi">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>