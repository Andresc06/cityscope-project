<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return $this->view('home');
    }

    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
             . view('pages/' . $page, $data)
             . view('templates/footer', $data);
    }
}