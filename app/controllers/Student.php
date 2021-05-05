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

}