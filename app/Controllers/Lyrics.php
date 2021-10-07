<?php

namespace App\Controllers;

use App\Models\LyricsModel;
use App\Models\UserModel;

class Lyrics extends BaseController
{
    public function index()
    {

        $data = [];
        $model = new LyricsModel();
        $data ['lyrics'] = $model->findAll();
        echo view('templates/header', $data);
        echo view('templates/navbar', $data);
        echo view('pages/lyrics');
        echo view('templates/footer', $data);

    }

    public function update($id = null){
        $db      = \Config\Database::connect();
        $builder = $db->table('lyrics');

        $data = [];
		helper(['form']);
		$model = new LyricsModel();

            $data = [
                'title' => $this->request->getPost('title'),
                'artist' => $this->request->getPost('artist'),
                'lyrics' => $this->request->getPost('lyrics'),
                ];
              

                $builder->where('id', $this->request->getPost('id'));
                $builder->update($data);
        
            return redirect()->to('/lyrics');
    }
    public function delete($id = null){
        $uri = service('uri');
        $db      = \Config\Database::connect();
        $builder = $db->table('lyrics');

        $data = [];
		helper(['form']);
		$model = new LyricsModel();


        $builder->where('id', $uri->getSegment(3) );
        $builder->delete();

        return redirect()->to('/lyrics');
    }

    

}