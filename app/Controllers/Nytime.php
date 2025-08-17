<?php

namespace App\Controllers;

use App\Models\Nyt_model;
use CodeIgniter\Config\Services;

class Nytime extends BaseController
{
    protected $nytModel;

    public function __construct()
    {
        $this->nytModel = new Nyt_model();
    }

    public function index()
    {
        // Get the data from the model
        $data['results'] = $this->nytModel->get_top_news();
        $data['title'] = 'NYTimes News API';

        // Load the parser service
        $parser = Services::parser();

        return view('templates/header', $data)
             . $parser->setData($data)->render('templates/nytime_template')
             . view('templates/footer', $data);
    }
}

