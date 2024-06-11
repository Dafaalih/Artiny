<?php

class Signup extends Controller{
  public function index()
  {;
    $this->view("signup/index");
  }

  public function signupUser(){
    if ($this->model("SignupModel")->signup($_POST) > 0){
      Flasher::setFlash('Akun', 'berhasil', 'ditambahkan', 'success');
      header("Location:" . BASEURL . "/Signin");
      exit;
    } else{
      Flasher::setFlash('Akun', 'gagal', 'ditambahkan', 'danger');
      header("Location:" . BASEURL . "/Signin");
      exit;
    }
  }
}