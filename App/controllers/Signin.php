<?php

class Signin extends Controller{
  public function index()
  {
    $this->view("signin/index");
  }

  public function signinUser()
    {
        if ($this->model("SigninModel")->signin($_POST)) {
            header("Location:" . BASEURL . "/Homesignin");
            exit;
        } else {
            Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
            header('Location:' . BASEURL);
            exit;
        }
    }

}