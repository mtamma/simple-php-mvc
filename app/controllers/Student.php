<?php

class Student extends Controller
{
    public function index () {
        $data = array(
            'title' => 'List Student',
            'students' => $this->model('Student_model')->getAllStudent()
        );
        $this->view('template/header', $data);
        $this->view('student/index', $data);
        $this->view('template/footer');
    }

    public function detail ($id) { 
        $data = array(
            'title' => 'Detail Student',
            'student' => $this->model('Student_model')->getStudentById($id)
        );
        $this->view('template/header', $data);
        $this->view('student/detail', $data);
        $this->view('template/footer');
    }

    public function add () {
        if ($this->model('Student_model')->addStudentData($_POST) > 0) {
            header('Location: ' . BASEURL . '/student');
            exit;
        }
    }

}