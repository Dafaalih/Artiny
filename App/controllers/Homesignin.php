<?php

class Homesignin extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template-signin/headersignin", $data);
    $this->view("Home-signin/index", $data);
    $this->view("template-signin/footer");
  }
}