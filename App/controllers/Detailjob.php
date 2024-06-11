<?php

class Detailjob {
    public function index($data = []) {
        $this->view('template/header', $data);
        $this->view('jobs/detail-job/index', $data);
        $this->view('template/footer');
    }

    public function view($view, $data = []) {
        require_once "../App/views/" . $view . ".php";
    }
}
