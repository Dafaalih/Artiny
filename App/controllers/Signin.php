<?php

class Signin extends Controller{
  public function index()
  {
    $this->view("signin/index");
  }


   public function signinUser()
  {
    session_start();

    $result = $this->model("SigninModel")->signin($_POST);

    if ($result) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['role'] = $result['role'];

      if ($result['role'] == 0) {
          header('Location:' . BASEURL . "/Homesignin");
      } elseif ($result['role'] == 1) {
          header('Location:' . BASEURL . "/Signin");
      } else {
          Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
          header('Location:' . BASEURL);
      }
      exit;
    } else {
      Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
      header('Location:' . BASEURL);
      exit;
      }
  }
  
  public function signinAdmin()
    {
      $signinModel = $this->model("SigninModel");
      $result = $signinModel->signin($_POST);
  
      // Debugging: var_dump the result of the signin method // Ensure the script stops here so you can see the output
  
      if ($result) {
        header('Location:' . BASEURL . "/Homesignin");
        exit;
      } else {
        Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
        header('Location:' . BASEURL . "/Signin");
        exit;
      }
    }

public function signinDesigner()
{
    $result = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'role' => 'Designer'
    ];

    $signinModel = $this->model("SigninModel");
  
    $result = $signinModel->signin($_POST);

    if ($result) {
        header('Location:' . BASEURL . "/HomeDesigner");
        exit;
    } else {
        Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
        header('Location:' . BASEURL . "/Signin");
        exit;
    }
}

public function signinPerusahaan()
{
    $result = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'role' => 'Perusahaan'
    ];

    $signinModel = $this->model("SigninModel");
    $result = $signinModel->signin($_POST);

    if ($result) {
        header('Location:' . BASEURL . "/HomeCompany");
        exit;
    } else {
        Flasher::setFlash('Anda', 'gagal', 'login', 'danger');
        header('Location:' . BASEURL . "/Signin");
        exit;
    }
}

}