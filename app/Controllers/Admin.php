<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    public function login() {
        if(session()->get('isLoggedIn')){
            return redirect()->to('/home');
        }

        if($this->request->getMethod() == "post") {
            if ($this->validate([
                'username' => 'required|min_length[3]|max_length[32]',
                'password' => 'required|min_length[6]|max_length[50]',
            ])) {

                if($this->request->getVar('username') == 'auxrideum') {
                    if($this->request->getVar('password') == 'gabri2001') {
                        $newdata = [
                            'username' => $this->request->getVar('username'),
                            'password' => $this->request->getVar('password'),
                            'isLoggedIn' => TRUE
                        ];
                        
                        session()->set($newdata);
                        return redirect()->to('/home');
                    }
                }
            }
        }

        echo view("pages/admin/login");
    }
}