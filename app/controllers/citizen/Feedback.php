<?php

class Feedback
{
    use Controller;
    
    public function index()
    {
        $this->view('citizen/Feedback');
    }
}
