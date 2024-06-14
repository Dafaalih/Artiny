<?php

class Inspirasisignin extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template-signin/headersignin", $data);
    $this->view("inspirasisignin/index", $data);
    $this->view("template-signin/footer");
  }
}