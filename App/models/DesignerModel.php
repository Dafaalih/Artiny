<?php
class DesignerModel {
    private $table = 'inspirasi';
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

    private function uploadImage($file)
{
    $target_dir = "img/";
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

    public function tambahData($data)
    {
        // Debugging statements
        error_log("Description: " . $data['description']);
        error_log("Gambar: " . $data['gambar']);

        $query = "INSERT INTO " . $this->table . " (description, gambar) VALUES (:description, :gambar)";
        
        $this->db->query($query);
        $this->db->bind('description', $data['description']);
        $this->db->bind('gambar', $data['gambar']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDataById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function editData($data, $id)
    {
        $query = "UPDATE " . $this->table . " SET description = :description, gambar = :gambar WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('description', $data['description']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('id', $id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }
}
