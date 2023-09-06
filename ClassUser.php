<?php
  class User{
    private $strName;
    private $strEmail;
    private $strPassword;

    function __construct(string $name, string $email, string $password){
        $this->strName = $name;
        $this->strEmail = $email;
        $this->strPassword = $password;
  
    }
    //start getter method
    public function getName():string{
        return $this->strName;
    }

    public function getEmail():string{
        return $this->strEmail;
    }

    public function getPassword():string{
        return $this->strPassword;
    }

    //start setter method
    public function setPasswordChange(string $password){
        $this->strPassword = $password;
    }
  }
    
?>