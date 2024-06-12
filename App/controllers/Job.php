<?php

class Job extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template/header", $data);
    $data["jobs"] = $this->model("JobModel")->getAllList(); // Fetch jobs from the model
    $this->view("jobs/list/job", $data);
    $this->view("template/footer");
  }


  public function tambahData()
      {
      if ($_SERVER['REQUEST_METHOD'] == 'POST' > 0) {
          if ($this->model("JobModel")->tambahData($_POST)) {
              Flasher::setFlash('Data Job', 'berhasil', 'ditambahkan', 'success');
          } else {
              Flasher::setFlash('Data Job', 'gagal', 'ditambahkan', 'danger');
          }
          header("Location:" . BASEURL . "/Job");
          
          exit;
      } else {
          echo "Invalid request method.";
          exit;
      }
  }
}