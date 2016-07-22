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

    private $kost;
    private $db;

    public function __construct($kost = null)
    {
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

    public function fetch($limit = 4)
    {
        $sql = "SELECT * FROM fasilitas_kamar LIMIT :limit";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function fetchDetail($id)
    {
        $sql = "SELECT * FROM fasilitas_kamar WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }

    public function insert($fasilitas)
    {
        $sql = "INSERT INTO fasilitas_kamar(kode_kosan, kamar_mandi_dalam, tempat_tidur, lemari, meja, ac, tv, tv_kabel, kipas_angin, air_panas, telepon, wastafel, internet, kulkas, rak_buku) VALUES(:kode_kosan, :kamar_mandi_dalam, :tempat_tidur, :lemari, :meja, :ac, :tv, :tv_kabel, :kipas_angin, :air_panas, :telepon, :wastafel, :internet, :kulkas, :rak_buku)";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':kode_kosan', $this->kost->getId(), PDO::PARAM_STR);

        foreach ($fasilitas as $key => $value) {
            $statement->bindValue(':' . $key, $value, PDO::PARAM_STR);
        }

        $statement->execute();
    }
}
