<?php

use Phalcon\Mvc\Model;

class Employeeslog extends Model
{
    public $emplogid;
    public $empcode;
    public $empid;
    public $name;
    public $did;
    public $email;
    public $password;
    public $isadmin;
    public $dpid;
    public $manager;
    public $slmanager;
    public $bid;
    public $displayflag;
    public $accesstoken;
    public $usertype;
    public $action;
    public $createby;
    public $createdatetime;

	public function initialize()
    {
       //$this->hasOne("uid", "AccessToken", "uid");
       
    }

    public function getSource(){
        return 'employeeslog';
    }
    public function displayErrors()
    {
        foreach ($this->getMessages() as $message) {
            echo $message;
        }
    }
}
?>
