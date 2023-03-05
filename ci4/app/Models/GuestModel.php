<?php

namespace App\Models;

use CodeIgniter\Model;

class GuessModel extends Model
{
    protected $table = 'vagarcia_myguests';

    public function getGuest(){
        return $this -> findAll();
    }
    
}