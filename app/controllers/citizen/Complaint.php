<?php

class Complaint
{
    use Controller;
    
    public function index()
    {
        $this->view('citizen/Complaint');
    }
}
