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
}