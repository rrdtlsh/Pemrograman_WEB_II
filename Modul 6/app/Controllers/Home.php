<?php

namespace App\Controllers;

use App\Models\PraktikanModel;

class Home extends BaseController
{
    public function landing()
    {
        return view('landing');
    }

    public function index()
    {
        $model = new PraktikanModel();
        $data = $model->getData();
        return view('beranda', $data);
    }

    public function profil()
    {
        $model = new PraktikanModel();
        $data = $model->getData();
        return view('profil', $data);
    }
}
