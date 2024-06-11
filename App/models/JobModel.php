<?php
class JobModel 
{
    private $table = "job"; // Sesuaikan dengan nama tabel Anda
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllList()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getColumnsList()
    {
        $this->db->query("SHOW COLUMNS FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function countList()
    {
        $this->db->query("SELECT COUNT(*) as total FROM " . $this->table);
        $result = $this->db->single();
        return $result['total'];
    }

    public function tambahData($data)
    {
        // Pertama, upload gambar
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Maaf, file sudah ada.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Maaf, ukuran file terlalu besar.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Maaf, hanya format JPG, JPEG, PNG & GIF yang diperbolehkan.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Maaf, file tidak diunggah.";
            return false;
        } else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                // Jika gambar berhasil diunggah, tambahkan data job ke database
                $query = "INSERT INTO " . $this->table . " 
                          (job_tittle, company, location, category, description, gambar) 
                          VALUES (:job_tittle, :company, :location, :category, :description, :gambar)";

                try {
                    $this->db->query($query);
                    $this->db->bind(":job_tittle", $data["job_tittle"]);
                    $this->db->bind(":company", $data["company"]);
                    $this->db->bind(":location", $data["location"]);
                    $this->db->bind(":category", $data["category"]);
                    $this->db->bind(":description", $data["description"]);
                    $this->db->bind(":gambar", $target_file);

                    $this->db->execute();
                    return $this->db->rowCount();
                } catch (Exception $e) {
                    echo "Terjadi kesalahan: " . $e->getMessage();
                    return false;
                }
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
                return false;
            }
        }
    }

    public function getDataById($id)
    {
        $this->db->query("SELECT * FROM ". $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function editData($data, $id)
    {
        $query = "UPDATE " . $this->table . " SET 
                    job_tittle = :job_tittle,
                    company = :company,
                    location = :location,
                    category = :category,
                    description = :description
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind(":id", $id);
        $this->db->bind(":job_tittle", $data["job_tittle"]);
        $this->db->bind(":company", $data["company"]);
        $this->db->bind(":location", $data["location"]);
        $this->db->bind(":category", $data["category"]);
        $this->db->bind(":description", $data["description"]);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(":id", $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
