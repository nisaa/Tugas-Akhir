<?php
namespace App;

use PDO;
use Exception;

class Location
{
    private $name;
    private $address;
    private $lat;
    private $lon;

    private $kost;
    private $db;

    public function __construct($kost = null) {
        if (!is_null($kost)) {
            $this->kost = $kost;
        }
    }

    public function getDb()
    {
        if (is_null($this->db)) {
            $this->setDb();

            return $this->db;
        } else {
            return $this->db;
        }
    }

    private function setDb()
    {
        try {
            $connection = new Connection;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }

        $this->db = $connection->db;
    }

    public function insert($lokasi) {
        $sql = "INSERT INTO lokasi(kode_kosan, nama, alamat, lat, lon) VALUES (:kode_kosan, :nama, :alamat, :lat, :lon)";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':kode_kosan', $this->kost->getId(), PDO::PARAM_STR);

        foreach ($lokasi as $key => $value) {
            $statement->bindParam(':' . $key, $value, PDO::PARAM_STR);
        }

        $statement->execute();
    }
}
