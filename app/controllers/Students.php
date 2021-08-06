<?php

class Students extends Controller
{
    public function index()
    {
        $data = $this->model('Students_model')->getAllStudents();
        $data['title'] = 'Students';

        $this->view('templates/header', $data);
        $this->view('students/index', $data);
        $this->view('templates/footer');
    }
}
