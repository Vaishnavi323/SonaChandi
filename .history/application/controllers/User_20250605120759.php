<?php 

defined("BASEPATH") or exit("No Direct Script Access Aloowed");

class User extends CI_Controller
{
   
    function demo()
    {
        $this->load->view("demo");
    }
    function navbar()
    {
        $this->load->view("common/navbar");
    }

    function footer()
    {
        $this->load->view("common/footer");
    }

    function Home()
    {
        $this->load->view("home");
    }
    function Login()
    {
        $this->load->view("login");
    }


    
}





?>