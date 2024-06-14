<?php

class HomeCompany extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template-company/header", $data);
    $this->view("Home-signin/index", $data);
    $this->view("template-signin/footer");
  }
}