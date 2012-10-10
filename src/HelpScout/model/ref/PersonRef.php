<?php
namespace HelpScout\model\ref;

class PersonRef {
    private $id = false;
    private $firstName;
    private $lastName;
    private $email;
    private $type;

    public function __construct($data=null) {
        if ($data) {
            $this->id         = $data->id;
            $this->firstName  = $data->firstName;
            $this->lastName   = $data->lastName;
            $this->email      = $data->email;
            $this->type       = $data->type;
        }
    }

    public function getEmail() {
        return $this->email;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getId() {
        return $this->id;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getType() {
        return $this->type;
    }
}