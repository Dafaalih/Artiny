<?php

class Inspirasi {
    public function index($data = []) {
        $this->view('template/header', $data);
        $this->view('inspirasi/index', $data);
        $this->view('template/footer');
    }

    public function view($view, $data = []) {
        require_once "../App/views/" . $view . ".php";
    }
}
