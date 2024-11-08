<?php
class View_Complaint
{
    use Controller;
    public function index()
    {
        $this->view('citizen/View_Complaint');
    }
}
