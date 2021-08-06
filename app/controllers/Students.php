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
            Flasher::setFlash('has been successfully ', 'added', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        } else {
            Flasher::setFlash('failed to ', 'add', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Students_model')->deleteStudent($id) > 0) {
            Flasher::setFlash('has been successfully ', 'deleted', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        } else {
            Flasher::setFlash('failed to ', 'delete', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function edit()
    {
        if ($this->model('Students_model')->editStudent($_POST) > 0) {
            Flasher::setFlash('has been successfully ', 'edited', 'success');
            header('Location: ' . BASEURL . '/students');
            exit;
        } else {
            Flasher::setFlash('failed to ', 'edit', 'danger');
            header('Location: ' . BASEURL . '/students');
            exit;
        }
    }

    public function getedit()
    {
        echo json_encode($this->model('Students_model')->getStudentsByID($_POST['id']));
    }

    public function search()
    {
        $data['title'] = 'Students';
        $data['students'] = $this->model('Students_model')->searchStudentsData();

        $this->view('templates/header', $data);
        $this->view('students/index', $data);
        $this->view('templates/footer');
    }
}
