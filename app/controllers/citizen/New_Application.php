<?php

class New_Application
{
    use Controller;
    
    public function index()
    {
        $this->view('citizen/new_application');
    }
}
