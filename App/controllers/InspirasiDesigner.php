<?php

class InspirasiDesigner extends Controller{
  public function index()
  {
    $data["judul"] = "Artiny";
    $this->view("template-designer/header", $data);
    $this->view("inspirasisignin/index", $data);
    $this->view("template-signin/footer");
  }
}