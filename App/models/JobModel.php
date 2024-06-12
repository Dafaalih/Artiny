<?php

class JobModel {
    private $table = "job";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                  (job_tittle, company, location, category, description) 
                  VALUES (:job_tittle, :company, :location, :category, :description)";

        try {
            $this->db->query($query);
            $this->db->bind(":job_tittle", $data["job_tittle"]);
            $this->db->bind(":company", $data["company"]);
            $this->db->bind(":location", $data["location"]);
            $this->db->bind(":category", $data["category"]);
            $this->db->bind(":description", $data["description"]);

            $this->db->execute();
            return $this->db->rowCount();
        } catch (Exception $e) {
            echo "Query Failed: " . $e->getMessage() . "<br>";
            return false;
        }
    }

    public function getAllList()
        {
            $query = "SELECT id, job_tittle, company, location, description FROM " . $this->table;
            $this->db->query($query);
            return $this->db->resultSet();
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

        try {
            $this->db->query($query);
            $this->db->bind(":job_tittle", $data["job_tittle"]);
            $this->db->bind(":company", $data["company"]);
            $this->db->bind(":location", $data["location"]);
            $this->db->bind(":category", $data["category"]);
            $this->db->bind(":description", $data["description"]);
            $this->db->bind(":id", $id);

            $this->db->execute();
            return $this->db->rowCount();
        } catch (Exception $e) {
            echo "Query Failed: " . $e->getMessage() . "<br>";
            return false;
        }
    }

    public function hapusData($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id = :id";

        try {
            $this->db->query($query);
            $this->db->bind(":id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        } catch (Exception $e) {
            echo "Query Failed: " . $e->getMessage() . "<br>";
            return false;
        }
    }
}

