<?php

Class SignupModel{
  private $table = "akun";
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function signup($data)
  {
    $query = "INSERT INTO akun (name, email, password) VALUES (:name, :email, :password)";
    
    $this->db->query($query);
    $this->db->bind("name", $data["name"]);
    $this->db->bind("email", $data["email"]);
    $this->db->bind("password", $data["password"]);

    $this->db->execute();
    return $this->db->rowCount();

  }
}