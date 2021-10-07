<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {


        $model = new UserModel();
        $data ['users'] = $model->findAll();
        echo view('templates/header', $data);
        echo view('templates/navbar', $data);
        echo view('pages/users');
        echo view('templates/footer', $data);

    }
}
