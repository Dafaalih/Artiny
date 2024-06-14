<?php
class Inspirasiform extends Controller {
    public function index()
    {
        $data["judul"] = "Artiny";
        $data["inspirasi"] = $this->model("InspirasiModel")->getAllList();
        $this->view("inspirasicrud/index", $data);
    }
    
    public function tambahData()
    {
        // Handle file upload
        $image = $this->uploadImage($_FILES['image']);
        $data = [
            'description' => $_POST['description'],
            'gambar' => $image
        ];
        
        if ($this->model("InspirasiModel")->tambahData($data)) {
            Flasher::setFlash('Data List', 'berhasil', 'ditambahkan', 'success');
        } else {
            Flasher::setFlash('Data List', 'gagal', 'ditambahkan', 'danger');
        }
        header("Location:" . BASEURL . "/Inspirasiform");
        exit;
    }

    public function getUbahData($id)
    {
        echo json_encode($this->model("InspirasiModel")->getDataById($id));
    }

    public function editData($id)
    {
        // Handle file upload
        $image = $this->uploadImage($_FILES['image']);
        $data = [
            'description' => $_POST['description']
        ];
        if ($image) {
            $data['gambar'] = $image;
        }
        
        if ($this->model("InspirasiModel")->editData($data, $id) > 0) {
            Flasher::setFlash('Data Inspirasi', 'berhasil', 'diubah', 'success');
        } else {
            Flasher::setFlash('Data Inspirasi', 'gagal', 'diubah', 'danger');
        }
        header("Location:" . BASEURL . "/Inspirasiform");
        exit;
    }

    public function hapusData($id)
    {
        if ($this->model("InspirasiModel")->hapusData($id) > 0){
            Flasher::setFlash('Data Inspirasi', 'berhasil', 'dihapus', 'success');
        } else {
            Flasher::setFlash('Data Inspirasi', 'gagal', 'dihapus', 'danger');
        }
        header("Location:" . BASEURL . "/Inspirasiform");
        exit;
    }

    private function uploadImage($file)
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($file["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($file["tmp_name"]);
        
        if ($check !== false) {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                return basename($file["name"]);
            }
        }
        return false;
    }
}
