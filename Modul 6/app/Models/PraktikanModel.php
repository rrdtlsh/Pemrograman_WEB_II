<?php

namespace App\Models;

use CodeIgniter\Model;

class PraktikanModel extends Model
{
    public function getData()
    {
        return [
            'nama' => 'Raudatul Sholehah',
            'nim' => '2310817220002',
            'fakultas' => 'Teknik',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Mendesain dan Badminton',
            'skill' => 'HTML, JavaScript, Figma dan Adobe Photoshop',
            'asal' => 'Banjarmasin',
            'motto' => 'Jangan Berhenti Ketika Lelah, Berhentilah Ketika Selesai!😎🔥✨',
        ];
    }
}
