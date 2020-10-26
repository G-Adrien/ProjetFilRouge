<?php 

class Operation{
    //propriété
    protected string $lastname;
    protected string $firstname;
    protected string $email;
    protected string $city;
    protected int $city_code;
    protected string $adress;
    protected string $sex;
    protected string $password;
    protected string $birth_date;

    //méthode

    //setter
    public function setLastname(string $lastname) {
    $this->lastname = $lastname;
    }

    public function setFirstname(string $firstname) {
    $this->firstname = $firstname;
    }

    public function setEmail(string $email) {
    $this->email = $email;
    }

    public function setCity(string $city) {
    $this->city = $city;
    }

    public function setCity_code(int $city_code) {
    $this->city_code = $city_code;
    }

    public function setAddress(string $address) {
    $this->address = $address;
    }

    public function setSex(int $sex) {
    $this->sex = $sex;
    }

    public function setPassword(string $password) {
    $this->password = $password;
    }

    public function setBirth_date(string $birth_date) {
    $this->birth_date = $birth_date;
    }

    // getter
    public function getLastname() {
    return $this->lastname;
    }

    public function getFirstname() {
    return $this->firstname;
    }

    public function getEmail() {
    return $this->email;
    }

    public function getCity() {
    return $this->city;
    }

    public function getCity_code() {
    return $this->city_code;
    }

    public function getAddress() {
    return $this->address;
    }

    public function getSex() {
    return $this->sex;
    }

    public function getPassword() {
    return $this->password;
    }

    public function getBirth_date() {
    return $this->birth_date;
    }

}