<?php namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';

    public function getPosts($slug = false, $limit) {
    //    return $this->findAll($limit);

        return $this->orderBy('data', 'desc')->findAll($limit);
    } 
}