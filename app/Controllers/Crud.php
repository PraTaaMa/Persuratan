<?php

namespace App\Controllers;
use App\Models\CrudModel;

define('_TITLE', 'CRUD');

class Crud extends BaseController
{
    private $crud_model;
    public function __construct()
    {
        $this->crud_model = new CrudModel();
    }    
    public function index()
    {
        $data_crud = $this->crud_model->findAll();

        $data = [
            'title' => _TITLE,
            'data_crud' => $data_crud
        ];
        return view('crud/index', $data);
    }

        public function create()
    {
        $data_crud = $this->crud_model->findAll();

        $data = [
            'title' => _TITLE,
        ];
        return view('crud/create', $data);
    }

    public function save()
    {
    $file = $this->request->getFile('file_pdf');

    $namaFile = null;

    if ($file && $file->isValid() && !$file->hasMoved()) {

        // Validasi hanya PDF
        if ($file->getExtension() != 'pdf') {
            return "File harus PDF!";
        }

        // Rename biar unik
        $namaFile = $file->getRandomName();

        // Pindahkan ke folder uploads
        $file->move('uploads', $namaFile);
    }

    $this->crud_model->save([
        'no_id' => $this->request->getVar('no_id'),
        'asalSurat' => $this->request->getVar('asalSurat'),
        'ni_AsalSurat' => $this->request->getVar('ni_AsalSurat'),
        'namaPengirim' => $this->request->getVar('namaPengirim'),
        'emailPengirim' => $this->request->getVar('emailPengirim'),            
        'noTelpSender' => $this->request->getVar('noTelpSender'),
        'noTelpCorp' => $this->request->getVar('noTelpCorp'),
        'sifatDoc' => $this->request->getVar('sifatDoc'),
        'noSurat' => $this->request->getVar('noSurat'),            
        'perihal' => $this->request->getVar('perihal'),
        'tujuanSurat' => $this->request->getVar('tujuanSurat'),

        // ⬇️ Tambahan penting
        'file_pdf' => $namaFile
    ]);

    session()->setFlashdata('success','data berhasil di tambahkan');
    return redirect()->to('/reads');
    }
    
}
