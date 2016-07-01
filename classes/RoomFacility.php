<?php
namespace App;

use PDO;
use Exception;

class RoomFacility
{
    private $bathroom;
    private $bedroom;
    private $cupboard;
    private $table;
    private $ac;
    private $tv;
    private $cable_tv;
    private $fan;
    private $water_heater;
    private $phone;
    private $wastafel;
    private $internet;
    private $refrigerator;
    private $book_rack;

    private $db;

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

    public function fetch($limits = 4)
    {
        $sql = "SELECT * FROM fasilitas_kamar LIMIT :limits";

        $statement = $this->getDb()->prepare($sql);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
