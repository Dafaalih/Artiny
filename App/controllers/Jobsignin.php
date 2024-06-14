<?php

class Jobsignin extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template-signin/headersignin", $data);
    $data["jobs"] = $this->model("JobModel")->getAllList(); // Fetch jobs from the model
    $this->view("jobs-signin/list/job", $data);
    $this->view("template-signin/footer");
  }


  public function tambahData()
      {
      if ($_SERVER['REQUEST_METHOD'] == 'POST' > 0) {
          if ($this->model("JobModel")->tambahData($_POST)) {
              Flasher::setFlash('Data Job', 'berhasil', 'ditambahkan', 'success');
          } else {
              Flasher::setFlash('Data Job', 'gagal', 'ditambahkan', 'danger');
          }
          header("Location:" . BASEURL . "/Jobsignin");
          
          exit;
      } else {
          echo "Invalid request method.";
          exit;
      }
  }
}