<?php

class Home extends Controller
{
    public function index()
    {
        $data = $this->model('User_model')->getUser();
        $data['title'] = 'Home';

        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
