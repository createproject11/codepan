<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_kategori'];

    // public function getKarir($id = false)
    // {
    //     if ($id == false) {
    //         return $this->findAll;
    //     }

    //     return $this->where(['id' => $id])->first();
    // }
}
