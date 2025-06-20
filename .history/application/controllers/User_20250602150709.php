<?php 

defined("BASEPATH") or exit("No Direct Script Access Aloowed");

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }
   
    function UserForm()
    {
        $this->load->view("userform");
    }

    function AddUser()
    {
        $data=$this->input->post();
       $result= $this->UserModel->createUser($data);
       redirect("UserController/ShowAllUsers");
    }


    function ShowAllUsers()
    {
        $data['users']=$this->UserModel->getData();
        $this->load->view("UsersList",$data);
    }

    function GetUserById($id)
    {
        $data=$this->UserModel->getDataById($id);
        print_r($data);
    }

    function DeleteById($id)
    {
        $this->UserModel->deleteDataById($id);
        redirect("UserController/ShowAllUsers");

    }
    
    function UpdateUser($id)
    {
        $user["user"]=$this->UserModel->getDataById($id);
        $this->load->view("UpdateUserform",$user);
    }

    function UpdateUserPost($id)
    {
        $formdata=$this->input->post();
        $this->UserModel->updateData($id,$formdata);
        redirect("UserController/ShowAllUsers");
    }

    function Home()
    {
        $this->load->view("home");
    }


    
}





?>