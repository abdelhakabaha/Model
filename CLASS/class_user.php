<?php
class User {
    private $name ;
    private $password ;
    private $email ;
    private $creationdate;
    private $isactive;
    private $role;

    public function __construct($name, $password, $email, $creationdate, $isactive, $role) {
        $this->name = $name;
        $this->password = $password;
        $this->email = $email;
        $this->creationdate = $creationdate;
        $this->isactive = $isactive;
        $this->role = $role;
    }
    public function getName() {
        return $this->name;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getCreationdate() {
        return $this->creationdate;
    }
    public function isactive() {
        return $this->isactive;
    }
    public function getRole() {
        return $this->role;
    }   
}