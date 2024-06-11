<?php
class Jobform extends Controller {
    public function index()
    {
        $data["judul"] = "Artiny";
        $data["jobs"] = $this->model("JobModel")->getAllList(); // Ubah nama variabel untuk konsistensi
        $this->view("jobs/add-job/index", $data);
    }
    
    public function tambahData()
    {
        if ($this->model("JobModel")->tambahData($_POST)) {
            Flasher::setFlash('Data Job', 'berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('Data Job', 'gagal', 'ditambahkan', 'danger');
        }
        header("Location:" . BASEURL . "/Job");
        exit;
    }

    public function getUbahData($id)
    {
        echo json_encode($this->model("JobModel")->getDataById($id));
    }

    public function editData($id)
    {
        if ($this->model("JobModel")->editData($_POST, $id) > 0) {
            Flasher::setFlash('Data Job', 'berhasil', 'diubah', 'success');
        } else {
            Flasher::setFlash('Data Job', 'gagal', 'diubah', 'danger');
        }
        header("Location:" . BASEURL . "/Job");
        exit;
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
