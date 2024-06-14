<?php

class PerusahaanModel {
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

    public function countPerusahaan()
    {
        $this->db->query("SELECT COUNT(*) as total FROM ". $this->table);
        $result = $this->db->single();

        return $result['total'];
    }

    public function sortingPerusahaan($sort = 'job_tittle', $order = 'ASC')
    {
        $this->db->query("SELECT * FROM " . $this->table);
        $result = $this->db->resultSet();

        usort($result, function($a, $b) use ($sort, $order) {
            $valueA = $a[$sort];
            $valueB = $b[$sort];

            if ($order === 'ASC') {
                return $valueA <=> $valueB;
            } else {
                return $valueB <=> $valueA;
            }
        });

        return $result;
    }

    public function searchPerusahaan($keyword)
    {
        $columns = $this->getColumnsPerusahaan();
        $conditions = [];
        foreach ($columns as $columnInfo) {
            $column = $columnInfo['Field'];
            $conditions[] = "LOWER($column) LIKE :keyword";
        }

        $this->db->query("SELECT * FROM " . $this->table . " WHERE " . implode(" OR ", $conditions));
        $this->db->bind(":keyword", "%" . strtolower($keyword) . "%");
        $this->db->execute();
        $perusahaan = $this->db->resultSet();

        return array_values(
            array_filter(
                $perusahaan,
                function($row) use ($columns, $keyword) {
                    foreach ($columns as $columnInfo) {
                        $column = $columnInfo['Field'];
                        if (strpos(strtolower($row[$column]), strtolower($keyword)) !== false) {
                            return true;
                        }
                    }
                    return false;
                }
            )
        );
    }

    private function getColumnsPerusahaan()
    {
        $this->db->query("SHOW COLUMNS FROM " . $this->table);
        return $this->db->resultSet();
    }
}
