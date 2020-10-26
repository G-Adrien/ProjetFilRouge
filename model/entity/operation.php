<?php 

class Operation{
    //propriété
    protected string $operation_type;
    protected int $amount;
    protected string $registered;
    protected string $label;
    protected int $account_id;
    
    //méthode

    //setter
    public function setOperation_type(string $operation_type) {
    $this->operation_type = $operation_type;
    }

    public function setAmount(int $amount) {
    $this->amount = $amount;

    public function setRegistered(string $registered) {
    $this->registered = $registered;
    }

    public function setLabel(string $label) {
    $this->label = $label;
    }

    public function setAccount_id(int $account_id) {
    $this->label = $label;
    }
    // getter
    public function getOperation_type() {
    return $this->operation_type;
    }

    public function getAmount() {
    return $this->amount;
    }

    public function getRegistered() {
    return $this->registered;
    }

    public function getLabel() {
    return $this->label;
    }

    public function getAccount_id() {
    return $this->account_id;
    }

}