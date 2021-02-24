<?php

namespace App\Models;
use App\Utils\Database;
use PDO;

class Done extends CoreModel {

    private $id_done;
    private $titleListDone;
    private $contentDone;
    private $deadlineDone;
    private $checkDone;


    /**
     * Get the value of id_done
     */ 
    public function getIdDone()
    {
        return $this->id_done;
    }

    /**
     * Set the value of id_done
     *
     * @return  self
     */ 
    public function setIdDone($id_done)
    {
        $this->id_done = $id_done;

        return $this;
    }

    /**
     * Get the value of titleListDone
     */ 
    public function getTitleListDone()
    {
        return $this->titleListDone;
    }

    /**
     * Set the value of titleListDone
     *
     * @return  self
     */ 
    public function setTitleListDone($titleListDone)
    {
        $this->titleListDone = $titleListDone;

        return $this;
    }

    /**
     * Get the value of contentDone
     */ 
    public function getContentDone()
    {
        return $this->contentDone;
    }

    /**
     * Set the value of contentDone
     *
     * @return  self
     */ 
    public function setContentDone($contentDone)
    {
        $this->contentDone = $contentDone;

        return $this;
    }

    /**
     * Get the value of deadlineDone
     */ 
    public function getDeadlineDone()
    {
        return $this->deadlineDone;
    }

    /**
     * Set the value of deadlineDone
     *
     * @return  self
     */ 
    public function setDeadlineDone($deadlineDone)
    {
        $this->deadlineDone = $deadlineDone;

        return $this;
    }

    /**
     * Get the value of checkDone
     */ 
    public function getCheckDone()
    {
        return $this->checkDone;
    }

    /**
     * Set the value of checkDone
     *
     * @return  self
     */ 
    public function setCheckDone($checkDone)
    {
        $this->checkDone = $checkDone;

        return $this;
    }

    public function findAll()
    {
        $sql = '
        SELECT *
        FROM `done`
        ';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }
}