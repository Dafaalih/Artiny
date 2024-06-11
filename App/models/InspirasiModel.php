<?php
class InspirasiModel {
    private $table = 'images';
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllImages() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY created_at DESC');
        return $this->db->resultSet();
    }

    public function saveImage($filename, $description) {
        $this->db->query('INSERT INTO ' . $this->table . ' (filename, description) VALUES (:filename, :description)');
        $this->db->bind('filename', $filename);
        $this->db->bind('description', $description);
        return $this->db->execute();
    }
}
?>
