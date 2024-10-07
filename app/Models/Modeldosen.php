<?php

namespace App\Models;

use CodeIgniter\Model;

class Modeldosen extends Model
{
    protected $table = 'tbdsn0013';

    public function getDosen($dsnnim = null)
{
    if ($dsnnim === null) {
        return $this->findAll(); // Change to findAll()
    } else {
        return $this->where('dsnnim ', $dsnnim)->first(); // Change to where() and first()
    }
}


    public function saveDosen($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editDosen($data, $dsnnim)
    {
        $builder = $this->db->table($this->table);
        $builder->where('dsnnim', $dsnnim);
        return $builder->update($data);
    }

    public function hapusDosen($dsnnim)
    {
        $builder = $this->db->table($this->table);
        return $builder->where('dsnnim', $dsnnim)->delete();
    }
}
