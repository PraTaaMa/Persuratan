<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class UploadModel extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_file'];
}