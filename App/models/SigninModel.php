<?php

class SigninModel{
  private $table ="akun";
  private $db;


  public function __construct()
  {
    $this->db = new Database();
  }

  public function signin($data) {
    $query = "SELECT * FROM " . $this->table . " WHERE email = :email";
    
    $this->db->query($query);
    $this->db->bind("email", $data["email"]);
    
    $this->db->execute();
    $user = $this->db->single();  
    

    if ($data["password"] === $user["password"] && $data["role"] === $user["role"]) {
            return true;
    }
    return false;
  }

  public function SigninDesigner($data){

  }
}