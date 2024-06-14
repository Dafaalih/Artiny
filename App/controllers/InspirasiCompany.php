<?php

class InspirasiCompany {
    public function index($data = []) {
        $this->view('template-company/header', $data);
        $this->view('inspirasi/index', $data);
        $this->view('template-company/footer');
    }

    public function view($view, $data = []) {
        require_once "../App/views/" . $view . ".php";
    }
}
