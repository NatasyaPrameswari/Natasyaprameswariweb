<?php
namespace App\Controllers;
use App\Models\LoginModel;

class auth extends BaseController
{
    protected $login;
    public function __construct()
    {
        $this->login = new LoginModel();
    }
    public function index()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        if ($username == '' && $password == '') {
            echo view('Login/index');
        } else {

            return $this->_login($username, $password);
        }
        
    }

    private function _login($username, $password)
    {
        $user = $this->login->getLogin($username, $password);
        if ($user) {
            session()->set([
                'username' => $user['username']
            ]);
            return redirect()->to('aboute');
        } else {
            session()->setFlashdata('pesan', 'Username dan Password Salah');
            return redirect()->to('auth');
        }
        
    }
}