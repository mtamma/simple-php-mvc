<?php

class About
{
    public function index ($name='Mardi', $profession='Programmer') {
        echo "Hello, my name is $name, I am a $profession";
    }

    public function page () {
        echo 'about/page';
    }
}