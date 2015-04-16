<?php
    
namespace P87\PHMVCF\Models;

/**
 * @Entity @Table(name="users")
 **/
class User extends DORM
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    
    /** @Column(type="string") **/
    protected $userName;
    
    /** @Column(type="string") **/
    protected $password;
    
    public function getId()
    {
    	return $this->id;
    }
    
    public function getUserName()
    {
        return $this->userName;
    }
    
    public function setUserName($userName)
    {
    	$this->userName = $userName;
    }
    
    public function getPassword()
    {
        return $this->password();
    }
    
    public function setPassword($password)
    {
    	$this->password = password_hash($password, PASSWORD_DEFAULT);
    }
}
