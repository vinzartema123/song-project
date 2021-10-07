<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post'){
            $rules = [
                'firstname' => 'required|min_length[3]|max_length[20]',
                'lastname' => 'required|min_length[3]|max_length[20]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'confirm-password' => 'matches[password]',
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{

                $model = new UserModel();

                $newData = [
                'firstname' => $this->request->getVar('firstname'),
                'lastname' => $this->request->getVar('lastname'),
                'email' => $this->request->getVar('email'),
                'password' =>password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                ];

                $model ->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Succesful Registration');
                return redirect()->to('/login');

            }
        }

        echo view('templates/header', $data);
        echo view('pages/register');
        echo view('templates/footer', $data);

    }


   
}
