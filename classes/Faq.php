<?php
namespace App;

use PDO;
use Exception;

class Faq
{
    private $question;
    private $answer;

    private $db;

    public function __construct($question = "", $answer = "")
    {
        $this->setQuestion($question);
        $this->setAnswer($answer);
    }

    public function getQuestion()
    {
        return $this->question;
    }

    public function setQuestion($question)
    {
        $this->question = $question;
    }

    public function getAnswer()
    {
        return $this->answer;
    }

    public function setAnswer($answer)
    {
        $this->answer = $answer;
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

    public function fetch()
    {
        $sql = "SELECT * FROM faq ORDER BY kode_faq";

        $statement = $this->getDb()->prepare($sql);

        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
