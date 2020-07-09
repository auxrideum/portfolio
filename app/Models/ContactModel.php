<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'contact';
    protected $allowedFields = ['nome', 'email', 'numero', 'messaggio'];

}