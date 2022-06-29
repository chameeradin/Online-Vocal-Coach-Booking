<?php
  class Transaction {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addTransaction($data) {
      // Prepare Query
      $this->db->query('INSERT INTO trans (tid, cid, package, amount, currency, status) VALUES(:tid, :cid, :package, :amount, :currency, :status)');

      // Bind Values
      $this->db->bind(':tid', $data['tid']);
      $this->db->bind(':cid', $data['cid']);
      $this->db->bind(':package', $data['package']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':currency', $data['currency']);
      $this->db->bind(':status', $data['status']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getTransactions() {
      $this->db->query('SELECT * FROM trans ORDER BY tid DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }