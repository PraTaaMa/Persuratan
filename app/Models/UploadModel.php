<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class UploadModel extends Model
{
    protected $table = 'filespdf';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_file'];
}