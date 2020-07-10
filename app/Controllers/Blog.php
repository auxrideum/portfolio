<?php namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;

class Blog extends Controller
{
    public function view($slug)
    {
        $data = [];

        $model = new BlogModel();
        $data['post'] = $model->where(['slug' => $slug])->first();

        if(!$data['post']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        echo view('templates/header');
        echo view('pages/blog/view', $data);
        echo view('templates/footer');
    }
}