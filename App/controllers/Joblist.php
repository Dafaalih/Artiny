<?php
class Joblist extends Controller {
    public function index()
    {
        $data["judul"] = "Artiny";
        $data['jobs'] = $this->model("JobModel")->getAllList();
        $this->view("jobs/list/job", $data['jobs']);
    }
    
    public function tambahData()
    {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' > 0) {
        if ($this->model("JobModel")->tambahData($_POST)) {
            Flasher::setFlash('Data Job', 'berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('Data Job', 'gagal', 'ditambahkan', 'danger');
        }
        header("Location:" . BASEURL . "/Job");
        
        exit;
    } else {
        echo "Invalid request method.";
        exit;
    }
}


    public function getUbahData($id)
    {
        echo json_encode($this->model("JobModel")->getDataById($id));
    }

    public function editData($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model("JobModel")->editData($_POST, $id) > 0) {
                Flasher::setFlash('Data Job', 'berhasil', 'diubah', 'success');
            } else {
                Flasher::setFlash('Data Job', 'gagal', 'diubah', 'danger');
            }
            header("Location:" . BASEURL . "/Job");
            exit;
        } else {
            echo "Invalid request method.";
            exit;
        }
    }

    public function hapusData($id)
    {
        if ($this->model("JobModel")->hapusData($id) > 0){
            Flasher::setFlash('Data Job', 'berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('Data Job', 'gagal', 'dihapus', 'danger');
        }
        header("Location:" . BASEURL . "/Job");
        exit;
    }
}
