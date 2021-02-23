<?php

namespace App\Models;
use App\Utils\Database;
use PDO;

class Doing extends CoreModel {

    private $id_doing;
    private $titleListDoing;
    private $contentDoing;
    private $deadlineDoing;
    private $checkDoing;


    /**
     * Get the value of id_doing
     */ 
    public function getIdDoing()
    {
        return $this->id_doing;
    }

    /**
     * Set the value of id_doing
     *
     * @return  self
     */ 
    public function setIdDoing($id_doing)
    {
        $this->id_doing = $id_doing;

        return $this;
    }

    /**
     * Get the value of titleListDoing
     */ 
    public function getTitleListDoing()
    {
        return $this->titleListDoing;
    }

    /**
     * Set the value of titleListDoing
     *
     * @return  self
     */ 
    public function setTitleListDoing($titleListDoing)
    {
        $this->titleListDoing = $titleListDoing;

        return $this;
    }

    /**
     * Get the value of contentDoing
     */ 
    public function getContentDoing()
    {
        return $this->contentDoing;
    }

    /**
     * Set the value of contentDoing
     *
     * @return  self
     */ 
    public function setContentDoing($contentDoing)
    {
        $this->contentDoing = $contentDoing;

        return $this;
    }

    /**
     * Get the value of deadlineDoing
     */ 
    public function getDeadlineDoing()
    {
        return $this->deadlineDoing;
    }

    /**
     * Set the value of deadlineDoing
     *
     * @return  self
     */ 
    public function setDeadlineDoing($deadlineDoing)
    {
        $this->deadlineDoing = $deadlineDoing;

        return $this;
    }

    /**
     * Get the value of checkDoing
     */ 
    public function getCheckDoing()
    {
        return $this->checkDoing;
    }

    /**
     * Set the value of checkDoing
     *
     * @return  self
     */ 
    public function setCheckDoing($checkDoing)
    {
        $this->checkDoing = $checkDoing;

        return $this;
    }

    public function findAll(){
        $sql = '
        SELECT *
        FROM `doing`
        ';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
        }
}