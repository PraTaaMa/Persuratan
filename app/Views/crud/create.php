<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

    <div class="card">
    <form action="crud-create" method="POST" enctype="multipart/form-data">
       
        <div class="card-body">
        <h2>Informasi Pengirim</h2>
            <hr>

                <?= csrf_field() ?>
            <div class="mb-3">
                <label class="form-label"></label> <!--nomor auto increment-->
                <input type="hidden" class="form-control" name="no_id">
            </div>
            <div class="mb-3">
                <label class="form-label" >Asal Surat</label>
                    <select name="asalSurat" id="#">
                    <option value="" disabled selected>Pilih Asal Surat</option>
                    <option value="Instansi Pusat">Instansi Pusat</option>
                    <option value="Instansi Daerah">Instansi Daerah</option>
                    <option value="Swasta">Swasta</option>
                    <option value="Perorangan">Perorangan</option>
                </select>            
            </div>            
            <div class="mb-3">
                <label class="form-label">Nama Instansi Asal Surat</label>
                <input type="text" class="form-control" name="ni_AsalSurat" placeholder="Nama Instansi *">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Pengirim</label>
                <input type="text" class="form-control" name="namaPengirim" placeholder="Nama Pengirim *">
            </div>            
            <div class="mb-3">
                <label class="form-label">Email Pengirim</label>
                <input type="email" class="form-control" name="emailPengirim" placeholder="Email Pengirim *">
            </div>
            <div class="mb-3">
                <label class="form-label">No Telphone Pengirim</label>
                <input type="tel" class="form-control" name="noTelpSender" placeholder="No Telphone Pengirim *">
            </div>
            <div class="mb-3">
                <label class="form-label">No Telphone Perusahaan</label>
                <input type="tel" class="form-control" name="noTelpCorp" placeholder="No Telphone Perusahaan *">
            </div>
            <div class="mb-3">
                <label class="form-label" >Sifat Dokumen</label>
                    <select name="sifatDoc" id="#">
                    <option value="" disabled selected>Pilih Sifat Dokumen</option>
                    <option value="Biasa">Biasa</option>
                    <option value="Segera">Segera</option>
                    <option value="Undangan">Undangan</option>
                    <option value="Rahasia">Rahasia</option>
                </select>            
            </div>
        </div>

        <div class="card-body">
        <h2>Informasi Surat</h2>
            <hr>

            <!--

                <label for="fileSurat">Upload Surat</label>
                <input type="file" name="file_pdf" accept=".pdf" required>
                <button type="submit">Upload</button>                
            </form>
            -->   
            <div class="mb-3">
                <label class="form-label">No Surat</label>
                <input type="text" class="form-control" name="noSurat" placeholder="No Surat *">
            </div>            
            <div class="mb-3">
                <label class="form-label">Hal</label>
                <input type="text" class="form-control" name="perihal" placeholder="Perihal *">
            </div>   
            <div class="mb-3">
                <label class="form-label" >Ditujukan Kepada</label>
                    <select name="tujuanSurat" id="#">
                    <option value="" disabled selected>Pilih Tujuan Surat</option>
                    <option value="#">A</option>
                    <option value="#">B</option>
                    <option value="#">C</option>
                    <option value="#">D</option>
                </select>            
            </div>                  
        </div>

        <br><br><button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>        
    </div>

<?= $this->endsection('content'); ?>   



