<?php

namespace App\Models;
use App\Utils\Database;
use PDO;

class Todo extends CoreModel {

    private $id_todo;
    private $titleListTodo;
    private $contentTodo;
    private $deadlineTodo;
    private $checkTodo;


    /**
     * Get the value of id_todo
     */ 
    public function getIdTodo()
    {
        return $this->id_todo;
    }

    /**
     * Set the value of id_todo
     *
     * @return  self
     */ 
    public function setIdTodo($id_todo)
    {
        $this->id_todo = $id_todo;

        return $this;
    }

    /**
     * Get the value of titleListTodo
     */ 
    public function getTitleListTodo()
    {
        return $this->titleListTodo;
    }

    /**
     * Set the value of titleListTodo
     *
     * @return  self
     */ 
    public function setTitleListTodo($titleListTodo)
    {
        $this->titleListTodo = $titleListTodo;

        return $this;
    }

    /**
     * Get the value of contentTodo
     */ 
    public function getContentTodo()
    {
        return $this->contentTodo;
    }

    /**
     * Set the value of contentTodo
     *
     * @return  self
     */ 
    public function setContentTodo($contentTodo)
    {
        $this->contentTodo = $contentTodo;

        return $this;
    }

    /**
     * Get the value of deadlineTodo
     */ 
    public function getDeadlineTodo()
    {
        return $this->deadlineTodo;
    }

    /**
     * Set the value of deadlineTodo
     *
     * @return  self
     */ 
    public function setDeadlineTodo($deadlineTodo)
    {
        $this->deadlineTodo = $deadlineTodo;

        return $this;
    }

    /**
     * Get the value of checkTodo
     */ 
    public function getCheckTodo()
    {
        return $this->checkTodo;
    }

    /**
     * Set the value of checkTodo
     *
     * @return  self
     */ 
    public function setCheckTodo($checkTodo)
    {
        $this->checkTodo = $checkTodo;

        return $this;
    }

    public function findAll()
    {
        $sql = '
        SELECT *
        FROM `todo`
        ';
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, self::class);
        return $results;
    }
}