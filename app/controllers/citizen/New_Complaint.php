<?php
class New_Complaint
{
    use Controller;
    public function index()
    {
        $this->view('citizen/New_Complaint');
    }
}
