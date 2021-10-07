<?php

namespace App\Controllers;

use App\Models\LyricsModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [];
        $model = new LyricsModel();
        helper(['form']);
        if( ! $this->validate([
            'title' => 'required|min_length[2]|max_length[255]',
            'artist' => 'required',
            'lyrics' => 'required',
        ])) {
            
        echo view('templates/header', $data);
        echo view('templates/navbar', $data);
        echo view('pages/dashboard');
        echo view('templates/footer', $data);
           
        } else{
            $model -> save(
                [
                    'title' => $this->request->getVar('title'),
                    'artist' => $this->request->getVar('artist'),
                    'lyrics'=> $this->request->getVar('lyrics'),
                ]

                );

                return redirect()->to('lyrics');
        }



    }

    


   
}



