<?php

class Appointment
{
    use Controller;
    
    public function index()
    {
        $this->view('citizen/Appointment');
    }
}
