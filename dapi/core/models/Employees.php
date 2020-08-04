<?php

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Resultset\Simple as Resultset;

class Employees extends Model
{
    public function getSource(){
        return 'employees';
    }
  
}
?>
