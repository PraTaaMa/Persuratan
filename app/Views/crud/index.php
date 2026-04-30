<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="card">
        <div class="card-body">
            <a href="crud-create">
            <button type="button" class="btn btn-primary">Tambah Data</button>
            </a>
            <hr>
            <?php if (session()->getFlashdata('success')) :?>
                <div class="alert alert-primary" role="alert">
                    <? session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>
            <hr>
            <table class="table">
                <thead>
                    <tbody>
                        
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Asal Surat</th>
                        <th scope="col">Nama Instansi Asal Surat</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">Email Pengiirim</th>
                        <th scope="col">No Telphone Pengirim</th>
                        <th scope="col">No Telphone Perusahaan</th>
                        <th scope="col">Sifat Dokumen</th> 
                        <th scope="col">No Surat</th>
                        <th scope="col">Perihal</th>
                        <th scope="col">Tujuan Surat</th>                                                                        
                        <!--<th scope="col">Aksi</th>-->
                    </tr>
                    
                </thead>
                <tbody>
                    <?php $no = 1; 
                    foreach ($data_crud as $value) : ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $value['asalSurat'] ?></td>
                        <td><?= $value['ni_AsalSurat'] ?></td>
                        <td><?= $value['namaPengirim'] ?></td>
                        <td><?= $value['emailPengirim'] ?></td>
                        <td><?= $value['noTelpSender'] ?></td>
                        <td><?= $value['noTelpCorp'] ?></td>
                        <td><?= $value['sifatDoc'] ?></td>
                        <td><?= $value['noSurat'] ?></td>
                        <td><?= $value['perihal'] ?></td>   
                        <td><?= $value['tujuanSurat'] ?></td>                                             
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

 <?= $this->endsection('content'); ?>   