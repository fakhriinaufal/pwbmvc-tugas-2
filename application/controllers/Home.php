<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data = [
            "pageTitle" => "Home"
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
    public function aboutUs()
    {
        $data = [
            "pageTitle" => "About Us"
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('home/about-us');
        $this->load->view('templates/footer');
    }
    public function support()
    {
        $data = [
            "pageTitle" => "Support"
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('home/support');
        $this->load->view('templates/footer');
    }
}
