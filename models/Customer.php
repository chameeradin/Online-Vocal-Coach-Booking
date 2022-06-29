<?php
  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addCustomer($data) {
      // Prepare Query
      $this->db->query('INSERT INTO customers (cid, name, address, city, state, zip, country, phone, email, discount, language) VALUES(:cid, :name, :address, :city, :state, :zip, :country, :phone, :email, :discount, :language)');

      // Bind Values
      $this->db->bind(':cid', $data['cid']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':city', $data['city']);
      $this->db->bind(':state', $data['state']);
      $this->db->bind(':zip', $data['zip']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':discount', $data['discount']);
      $this->db->bind(':language', $data['language']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getCustomers() {
      $this->db->query('SELECT * FROM customers ORDER BY cid DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }