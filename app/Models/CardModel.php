<?php

namespace App\Models;

use CodeIgniter\Model;

class CardModel extends Model{
    protected $table = 'gift_cards';
    protected $allowedFields = ['card_title', 'card_paragraph'];
}