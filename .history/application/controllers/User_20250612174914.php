<?php 

defined("BASEPATH") or exit("No Direct Script Access Aloowed");

class User extends CI_Controller
{
   
    function demo()
    {
        $this->load->view("User/demo");
    }
    function navbar()
    {
        $this->load->view("user/navbar");
    }

    function footer()
    {
        $this->load->view("common/footer");
    }

    function Home()
    {
        $this->load->view("User/home");
    }
    function login()
    {
        $this->load->view("User/login");
    }
    function Products()
    {
        $this->load->view("User/products");
    }
    function goldcoins()
    {
        $this->load->view("User/goldcoins");
    }
    function goldcoincart()
    {
        $this->load->view("User/goldcoincart");
    }
    function productcart()
    {
        $this->load->view("User/productcart");
    }
    function services()
    {
        $this->load->view("User/services");
    }
    function installment()
    {
        $this->load->view("User/installment");
    }
    function collections()
    {
        $this->load->view("User/collections");
    }


    
}





?>