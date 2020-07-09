<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return redirect()->to("home");
	}

	public function contattami()
	{
		if ($this->request->getMethod() == 'post') {
			if ($this->validate([
				'nome' => 'required|min_length[3]|max_length[32]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'numero'  => 'required|min_length[9]|max_length[20]|numeric',
				'messaggio' => 'required|min_length[10]|max_length[512]'
			])) {
				$model = model('App\Models\ContactModel', false);

				$model->save([
					'nome' => $this->request->getVar('nome'),
					'email' => $this->request->getVar('email'),
					'numero' => $this->request->getVar('numero'),
					'messaggio' => $this->request->getVar('messaggio'),
				]);

				echo "ok!";
			}
		}

		echo view("contattami");
	}
}
