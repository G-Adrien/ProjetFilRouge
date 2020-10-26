<?php 

class Account{
    //propriété
    protected int $id;
    protected int $amount;
    protected string $opening_date;
    protected string $account_type;
    protected int $user_id;
    
    //méthode

    //setter
    public function setId(int $id) {
        $this->id = $id;
    }

    public function setAmount(int $amount) {
        $this->amount = $amount;
    }

    public function setOpening_date(string $opening_date) {
    $this->opening_date = $opening_date;
    }

    public function setAccount_type(string $account_type) {
    $this->account_type = $account_type;
    }

    public function setUser_id(int $user_id) {
    $this->user_id = $user_id;
    }
    // getter
    public function getId() {
        return $this->id;
    }

    public function getAmount() {
    return $this->amount;
    }

    public function getOpening_date() {
    return $this->opening_date;
    }

    public function getAccount_type() {
    return $this->account_type;
    }

    public function getUser_id() {
    return $this->user_id;
    }

}