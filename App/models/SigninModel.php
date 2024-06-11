<?php

class SigninModel{
  private $table ="akun";
  private $db;


  public function __construct()
  {
    $this->db = new Database();
  }

  public function signin($data)
{
    $query = "SELECT * FROM " . $this->table ."
              WHERE 
              email = :email";

    $this->db->query($query);
    $this->db->bind("email", $data["email"]);

    $this->db->execute();
    $user = $this->db->single();

    if ($user && password_verify($data["password"], $user["password"])) {
        return true;
    }
    return false;
}

}