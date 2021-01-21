<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table = 'tbl_siswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nis', 'nama', 'gender', 'kelas', 'alamat'];

    public function getSiswa($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        } else {
            return $this->where(['nis' => $slug])->first();
        }
    }
}
