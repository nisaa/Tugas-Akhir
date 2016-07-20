<?php
namespace App;

use PDO;
use Exception;

class Kost
{
    private $id;
    private $kost_name;
    private $address;
    private $type;
    private $dweller;
    private $campus_category;
    private $price;
    private $price2;
    private $description;
    private $image;
    private $owner_name;
    private $creator_id;
    private $phone;
    private $phone2;

    private $db;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getKostname()
    {
        return $this->kost_name;
    }

    public function setKostname($kost_name)
    {
        $this->kost_name = $kost_name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getDweller()
    {
        return $this->dweller;
    }

    public function setDweller($dweller)
    {
        $this->dweller = $dweller;
    }

    public function getCampuscategory()
    {
        return $this->campus_category;
    }

    public function setCampuscategory($campus_category)
    {
        $this->campus_category = $campus_category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice2()
    {
        return $this->price2;
    }

    public function setPrice2($price)
    {
        $this->price2 = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getOwnername()
    {
        return $this->owner_name;
    }

    public function setOwnername($owner_name)
    {
        $this->owner_name = $owner_name;
    }

    public function getCreatorId()
    {
        return $this->creator_id;
    }

    public function setCreatorId($creator_id)
    {
        $this->creator_id = $creator_id;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone2()
    {
        return $this->phone2;
    }

    public function setPhone2($phone)
    {
        $this->phone2 = $phone;
    }

    public function getDb()
    {
        if(is_null($this->db)) {
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

    public function add()
    {
        $sql = "INSERT INTO kosan(nama_kosan, alamat_kosan, type_kosan, jenis_hunian, kategori_kampus, harga_kosan, harga_sewa2, keterangan, gambar_kosan, kode_pembuat, nama_pemilik, nomor_tlp, nomor_tlp2) VALUES (:name, :address, :type, :dweller, :campus_category, :price, :price2, :description, :image, :creator_id, :owner_name, :phone, :phone2)";

        $statement = $this->getDb()->prepare($sql);

        $statement->bindParam(":name", $this->kost_name, PDO::PARAM_STR);
        $statement->bindParam(":address", $this->address, PDO::PARAM_STR);
        $statement->bindParam(":type", $this->type, PDO::PARAM_STR);
        $statement->bindParam(":dweller", $this->dweller, PDO::PARAM_STR);
        $statement->bindParam(":campus_category", $this->campus_category, PDO::PARAM_STR);
        $statement->bindParam(":price", $this->price, PDO::PARAM_STR);
        $statement->bindParam(":price2", $this->price2, PDO::PARAM_STR);
        $statement->bindParam(":description", $this->description, PDO::PARAM_STR);
        $statement->bindParam(":image", $this->image, PDO::PARAM_STR);
        $statement->bindParam(":creator_id", $this->creator_id, PDO::PARAM_STR);
        $statement->bindParam(":owner_name", $this->owner_name, PDO::PARAM_STR);
        $statement->bindParam(":phone", $this->phone, PDO::PARAM_STR);
        $statement->bindParam(":phone2", $this->phone2, PDO::PARAM_STR);

        $statement->execute();

        $this->id = $this->db->lastInsertId();

        return true;
    }

    public function fetch($limit = 4)
    {
        $sql = "SELECT * FROM kosan ORDER BY kode_kosan LIMIT :limit";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_OBJ);

        return $result;
    }

    public function fetchDetail($id)
    {
        $sql = "SELECT * FROM kosan WHERE kode_kosan = :id";

        $statement = $this->getDb()->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_OBJ);

        return $result;
    }
}

