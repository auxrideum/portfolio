<?php namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\ContactModel;
use App\Models\PortfolioModel;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function home()
    {
        $model = new BlogModel();
        $data['posts'] = $model->getPosts(false, 4);

        echo view('templates/header');
        echo view('pages/home', $data);
        echo view('templates/footer');
    }

    public function blog()
    {
        $model = new BlogModel();
        $data['posts'] = $model->getPosts(false, 30);

        echo view('templates/header');
        echo view('pages/blog', $data);
        echo view('templates/footer');
    }

    public function portfolio()
    {
        $model = new PortfolioModel();
        $data['projects'] = $model->getProjects();

        echo view('templates/header');
        echo view('pages/portfolio', $data);
        echo view('templates/footer');
    }

    public function chisono()
    {
        echo view('templates/header');
        echo view('pages/chi-sono');
        echo view('templates/footer');
    }

    public function contattami() {
        $data = [];

        if($this->request->getMethod() == "post") {
            if (!$this->validate([
                'nome' => 'required|min_length[3]|max_length[32]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'numero'  => 'min_length[9]|max_length[20]|numeric',
                'messaggio' => 'required|min_length[10]|max_length[512]'
            ])) {
                $data['validation'] = $this->validator;
            }
            else {

                $model = new ContactModel();

                $cols = [
                    'nome' => $this->request->getVar('nome', FILTER_SANITIZE_STRING),
					'email' => $this->request->getVar('email', FILTER_SANITIZE_EMAIL),
					'numero' => $this->request->getVar('numero'),
					'messaggio' => $this->request->getVar('messaggio', FILTER_SANITIZE_STRING),
                ];
                
                $model->insert($cols);

                $data['success'] = true;
            }
        }

        echo view('templates/header');
        echo view('pages/contattami', $data);
        echo view('templates/footer');
    }

    public function notfound() {
        echo "404 - Page not found";
    }
}