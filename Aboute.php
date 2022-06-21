<?php

namespace App\Controllers;

use App\Models\DataDiri;



class Aboute extends BaseController
{

    public function __construct()
    {
        $this->data=new DataDiri();
    }

    public function index()
    {

       echo view('login/auth',[
            'data' => $this->data->first()
        ]);
    }
    
    public function add()
    {
        echo view('aboute/cv');
    }
    public function login()
    {
        $this->data->save(
            [
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),
            
            ]
        );
        return redirect()->to('/Aboute/cv');
    }
}