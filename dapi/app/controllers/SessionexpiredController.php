<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Query;

class SessionexpiredController extends MyJsonController
{

    public function errorAction()
    {
        $resp = new MyResponse(false,"BS100",$this->config->errorCodes->BS100,null);
        return $resp;
    }
}
?>
