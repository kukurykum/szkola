<?php
//Mateusz Białas 3c
class Osoba {

    private $name;
    private $surname;
    private $sex;
    private $birthdate;
    private $phonenumber;


    function __construct($name, $surname, $sex, $birthdate=null, $phonenumber){
        $this->name = $name;
        $this->surname = $surname;
        $this->sex = $sex;
        $this->birthdate = $birthdate;
        $this->phonenumber = $phonenumber;
    }

    function __destruct() {
        // TODO: Implement __destruct() method.
    }

    function getInfo(){
        if($this->sex == "m"){
            echo "I'm Mr $this->name. $this->name $this->surname.<br>";
        }
        else if ($this->sex == "f"){
                echo "I'm Mrs. $this->name. $this->name $this->surname.<br>";
        }
        else {
                echo "I'm $this->name. $this->name $this->surname.<br>";
        }

        if($this->birthdate != null){
            echo "I was born on ".date('F j, Y',strtotime($this->birthdate)).", 
            and have already lived ". $this->getDays($this->birthdate)." days<br><br>";
        }

        echo "My phone number is $this->phonenumber.<br>";
        echo "Call me if You came to Paris.<br><br><br>";
    }

    function getPhoneNumber() {
        return $this->phonenumber;
    }

    function setPhoneNumber($phonenumber){
        if (preg_match("/^\d{9}$/", $phonenumber) == 1){
            $this->phonenumber = $phonenumber;
        } else{
            echo " invalid phone number ";
        }
    }

    // Zaczyna sie wielka litera, minimum 2 litery i polskie znaki
    function setSurname($surname){
        if (preg_match("/^[A-Z]([a-z-ąćęłńóśźż' ]+){2}$/",$surname) >= 1){
            $this->surname = $surname;
        } else{
            echo " invalid surname ";
        }
    }

    function getDays($birthdate){
        return (int)((time() - strtotime($birthdate)) / 86400 - 1);
    }
}

