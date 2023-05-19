<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $session->remove('id');
        $session->remove('nama');
        $session->remove('loggedIn');

        $session->setFlashdata('success', 'Berhasil logout!');

        return redirect()->to('/login');
    }
}