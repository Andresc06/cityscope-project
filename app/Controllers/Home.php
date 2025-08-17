<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Home';
        
        return view('templates/header', $data)
             . view('pages/home', $data)
             . view('templates/footer', $data);
    }
}
