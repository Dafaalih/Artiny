<?php

class Homesignin extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template/headersignin", $data);
    $this->view("Homesignin/index", $data);
    $this->view("template/footer");
  }
}