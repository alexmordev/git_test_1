<?php

Class CreateUsser{
    public $name;
    public $pass;
    public function __construct($name, $pass)
    {
        $this->name = $name;
        $this->pass = $pass; 
    }
}

Class VerifyPass{
    public function veryfyPass(CreateUsser $usser):bool{
        return (preg_match('/^[0,9]{6-9}$/', $usser->pass)) ? TRUE :FALSE;
    }
}