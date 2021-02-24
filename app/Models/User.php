<?php

namespace App\Models;
use App\Utils\Database;
use PDO;

class User extends CoreModel {

    private $id_user;
    private $name;
    private $firstname;
    private $email;
    private $identifier;
    private $pseudo;
    private $password;

    public function insert() {

        $pdo = Database::getPDO();
        $sql = "
                INSERT INTO `user` (email, password, pseudo)
                VALUES (:email, :password, :pseudo)";
        $query = $pdo->prepare($sql);
        $insertedRows = $query->execute( [
            ":email" => $this->email,
            ":password" => $this->password,
            ":pseudo" => $this->pseudo,
        ]);

        if ($insertedRows > 0) {
            $this->id = $pdo->lastInsertId();
            return true;
        }
        return false;
    }

    public static function findByEmail( string $email )
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `user` WHERE `email` = :email';
        $pdoStatement = $pdo->prepare($sql);
        $pdoStatement->execute([ ':email' => $email ]);
        return $pdoStatement->fetchObject(self::class);
    }

    /**
     * Get the value of id_user
     */ 
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of firstname
     */ 
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */ 
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of identifier
     */ 
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set the value of identifier
     *
     * @return  self
     */ 
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = password_hash( $password, PASSWORD_DEFAULT );        
        return $this;  
    }
}