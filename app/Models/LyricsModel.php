<?php

namespace App\Models;

use CodeIgniter\Model;

class LyricsModel extends Model{
    protected $table = 'lyrics';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'artist', 'lyrics'];
}