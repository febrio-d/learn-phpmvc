<?php

class Students extends Controller
{
    public function index()
    {
        $data['title'] = 'Students';
        $data['students'] = $this->model('Students_model')->getAllStudents();

        $this->view('templates/header', $data);
        $this->view('students/index', $data);
        $this->view('templates/footer');
    }

    public function details($id)
    {
        $data['title'] = 'Students';
        $data['stud'] = $this->model('Students_model')->getStudentsByID($id);

        $this->view('templates/header', $data);
        $this->view('students/details', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model('Students_model')->addNewStudent($_POST) > 0) {
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }
}
