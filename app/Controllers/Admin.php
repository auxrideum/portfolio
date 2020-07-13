<?php namespace App\Controllers;

use App\Models\ContactModel;
use App\Models\BlogModel;
use CodeIgniter\Controller;

class Admin extends Controller
{
    private $password_hash = '$2y$10$.gJ81D0TF.0u.kkDfXSNy.VFj3ZD69B4h3ULY0TP/jY6jmhDJSSwy';

    public function login() {
        $data = [];

        if(session()->get('isLoggedIn')){
            return redirect()->to('/admin/');
        }

        if($this->request->getMethod() == "post") {
            if ($this->validate([
                'username' => 'required|min_length[3]|max_length[32]',
                'password' => 'required|min_length[6]|max_length[50]',
            ])) {

                if($this->request->getVar('username') == 'auxrideum') {
                    if(password_verify($this->request->getVar('password'), $this->password_hash)) {
                        $newdata = [
                            'username' => $this->request->getVar('username'),
                            'password' => $this->request->getVar('password'),
                            'isLoggedIn' => TRUE
                        ];
                        
                        session()->set($newdata);
                        return redirect()->to('/admin/');
                    }
                }

                $data['error'] = 'Accesso negato';
            }
        }

        echo view("pages/admin/login", $data);
    }

    public function index() {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/admin/login');
        }

        $data = [
            "titolo" => "Dashboard",
            "username" => session()->get('username')
        ];

        echo view("pages/admin/index", $data);
    }

    public function contacts() {
        $data = [
            "titolo" => "Contatti"
        ];

        $model = new ContactModel();
        $data['contacts'] = $model->getContacts();

        echo view("pages/admin/contacts", $data);
    }

    public function blog() {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/login');
        }

        $data = [
            "titolo" => "Blog"
        ];

        $model = new BlogModel();
        $data['posts'] = $model->getPosts(false, 0);

        echo view("pages/admin/blog", $data);
    }

    public function analytics() {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/login');
        }

        $data = [
            "titolo" => "Analytics"
        ];

        echo view("pages/admin/analytics", $data);
    }

    public function projects() {
        if(!session()->get('isLoggedIn')){
            return redirect()->to('/login');
        }

        $data = [
            "titolo" => "Portfolio"
        ];

        echo view("pages/admin/projects", $data);
    }
}