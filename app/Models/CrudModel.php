<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class CrudModel extends Model
{
	protected $table 	        = 'surat';
	protected $primaryKey	    = 'no_id';
	protected $allowedFields    = 
	[
		'asalSurat',
		'ni_AsalSurat',
		'namaPengirim',
		'emailPengirim',
		'noTelpSender',
		'noTelpCorp',
		'sifatDoc',
		'noSurat',
		'perihal',
		'tujuanSurat',
		'nama_file',
	];
}