<?php

class HomeDesigner extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template-designer/header", $data);
    $this->view("Home-signin/index", $data);
    $this->view("template-signin/footer");
  }
}