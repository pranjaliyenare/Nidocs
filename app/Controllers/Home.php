<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['page'] = 'index';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/index');
        echo view('default/footer');
        // return view('welcome_message');
    }

    //about
    public function about()
    {
        $data['page'] = 'about';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/about');
        echo view('default/footer');
    }

    //services
    public function services()
    {
        $data['page'] = 'services';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/services');
        echo view('default/footer');
    }

    //contact
    public function contact()
    {
        $data['page'] = 'contact';
        echo view('default/header', $data);
        echo view('default/navbar');
        echo view('pages/contact');
        echo view('default/footer');
    }
}
