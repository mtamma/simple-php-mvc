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
            Flasher::setFlash('success', 'adding', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;
        }

        Flasher::setFlash('failed', 'adding', 'danger');
        header('Location: ' . BASEURL . '/student');
    }

    public function delete ($id) {
        if ($this->model('Student_model')->deleteStudentById($id) > 0) {
            Flasher::setFlash('success', 'deleting', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;
        }

        Flasher::setFlash('failed', 'deleting', 'danger');
        header('Location: ' . BASEURL . '/student');
    }

    public function getedit () {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            echo json_encode($this->model('Student_model')->getStudentById($id));
            return;
        }
        echo json_encode([]);
    }

    public function edit () {
        if ($this->model('Student_model')->editStudentData($_POST) > 0) {
            Flasher::setFlash('success', 'editing', 'success');
            header('Location: ' . BASEURL . '/student');
            exit;
        }

        Flasher::setFlash('failed', 'editing', 'danger');
        header('Location: ' . BASEURL . '/student');
    }

}