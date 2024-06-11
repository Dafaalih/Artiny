<?php

class Job extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template/header", $data);
    $this->view("jobs/list/job", $data);
    $this->view("template/footer");
  }
}