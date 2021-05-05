<?php

class About extends Controller
{
    public function index ($name='Mardi', $profession='Programmer') {
        $data = array (
            'title' => 'About Me',
            'name' => $name,
            'profession' => $profession
        );
        $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page () {
        echo 'about/page';
    }
}