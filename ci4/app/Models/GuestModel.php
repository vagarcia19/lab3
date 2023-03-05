<?php

namespace App\Models;

use CodeIgniter\Model;

class GuessModel extends Model
{
    protected $table = 'vagarcia_myguests';

    protected $allowFields = ['name', 'email', 'website', 'comment', 'gender'];

    public function getGuest($slug = false){
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();return $this -> findAll();
    }
    
}