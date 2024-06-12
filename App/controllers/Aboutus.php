<?php

class Aboutus extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template/header", $data);
    $this->view("Aboutus/index", $data);
    $this->view("template/footer");
  }
}