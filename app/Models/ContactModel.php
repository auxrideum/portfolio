<?php namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model {
    protected $table = 'contact';
    protected $allowedFields = ['nome', 'email', 'numero', 'messaggio'];

    public function getContacts() {
        return $this->findAll();
    } 
}