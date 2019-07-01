<?php
namespace models;

use Illuminate\Support\Facades\DB;

class EmailUser{
    public $id;
    public $username;
    public $password;
    public $emaill;
    public $created_at;
  
    public function getId()
    {
        return $this->id;
    }

    
    public function getUsername()
    {
        return $this->username;
    }

    
    public function getPassword()
    {
        return $this->password;
    }

    
    public function getEmaill()
    {
        return $this->emaill;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $emaill
     */
    public function setEmaill($emaill)
    {
        $this->emaill = $emaill;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }
    
    public function insert(){
        DB::table('emailuser')->insert(array('username' -> $this->username , 'password' -> $this->password ,
            'email' -> $this->email , 'created_at' -> $this->created_at));
    }

}
