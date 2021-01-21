<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $table = 'tbl_guru';
    protected $useTimestamps = true;
    protected $allowedFields = ['nip', 'nama', 'alamat', 'gender', 'hp'];

    public function getGuru($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        } else {
            return $this->where(['nip' => $slug])->first();
        }
    }
}
