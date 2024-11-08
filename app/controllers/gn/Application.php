<?php

class Application
{
    use Controller;
    
    public function index()
    {
        $this->view('gn/Application');
    }
}
