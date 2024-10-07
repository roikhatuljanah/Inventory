<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelmahasiswa extends Model
{
    protected $table            = 'tbmhs0013';
    protected $primaryKey       = 'mhsnim';
    protected $allowedFields    = ['mhsnim', 'mhsnama', 'mhstempatlahir', 'mhstanggallahir', 'mhsjeniskelamin', 'mhsalamat', 'mhstelp'];
}
