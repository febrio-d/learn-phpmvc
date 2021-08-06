<?php

class About extends Controller
{
    public function index()
    {
        $data['title'] = 'About';

        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }

    public function pages()
    {
        $data['title'] = 'Pages';

        $this->view('templates/header', $data);
        $this->view('about/pages');
        $this->view('templates/footer');
    }
}
