<?php namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;

class Blog extends Controller
{
    public function view($slug)
    {
        $model = new BlogModel();
        $post = $model->where(['slug' => $slug])->first();

        if(!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        print_r($post);
    }
}