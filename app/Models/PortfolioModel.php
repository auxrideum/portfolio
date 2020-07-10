<?php namespace App\Models;

use CodeIgniter\Model;

class PortfolioModel extends Model
{
    protected $table = 'projects';

    public function getProjects() {
        return $this->findAll();
    } 
}