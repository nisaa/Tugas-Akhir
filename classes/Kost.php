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
    private $description;
    private $image;
    private $owner_name;
    private $phone;

    private $db;

    public function __construct($kost_name = "", $address = "", $type = "", $dweller = "", $campus_category = "", $price = "", $description = "", $image = "", $owner_name = "", $phone = "")
    {
        $this->setKostname($kost_name);
        $this->setAddress($address);
        $this->setType($type);
        $this->setDweller($dweller);
        $this->setCampuscategory($campus_category);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setImage($image);
        $this->setOwnername($owner_name);
        $this->setPhone($phone);
    }

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

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
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

    /*public function add()
    {
        $sql = "INSERT INTO kosan(nama_kosan, alamat_kosan, type_kosan, jenis_hunian, kategori_kampus, harga_kosan, keterangan, gambar_kosan, nama_pemilik, nomor_tlp) VALUES (:name, :address, :type, :dweller, :campus_category, :price, :description, :image, :owner_name, :phone)";

        $statement = $this->getDb()->prepare($sql);

        $statement->bindParam(":name", $this->name, PDO::PARAM_STR);
        $statement->bindParam(":address", $this->address, PDO::PARAM_STR);
        $statement->bindParam(":type", $this->type, PDO::PARAM_STR);
        $statement->bindParam(":dweller", $this->dweller, PDO::PARAM_STR);
        $statement->bindParam(":campus_category", $this->campus_category, PDO::PARAM_STR);
        $statement->bindParam(":price", $this->price, PDO::PARAM_STR);
        $statement->bindParam(":description", $this->description, PDO::PARAM_STR);
        $statement->bindParam(":image", $this->image, PDO::PARAM_STR);
         $statement->bindParam(":owner_name", $this->owner_name, PDO::PARAM_STR);
        $statement->bindParam(":phone", $this->phone, PDO::PARAM_STR);

        $statement->execute();

        $_SESSION['success_message'] = "Data kosan berhasil ditambah!";

        return true;
    }*/

    public function fetch()
    {
        $sql = "SELECT * FROM kosan LIMIT 4";
        $statement = $this->getDb()->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

