<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5"> 
<div id="layoutSidenav_content">
                
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        

                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <table>
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Nama</td>
                                <td>Tahun</td>
                                <td>Seniman</td>
                                <td>Deskripsi</td>
                                <td>Action</td>
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
                                <form action="gallery/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Apakah Anda yakin?`)">
                                    <a href="gallery/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                            </td>
                        </tr>
</div>   
</div>
</div>

        <?php endforeach ?>
        </tbody>
    </table>
       </main>
<?= $this->endSection() ?>