<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Query;


class EmployeesController extends MyJsonController
{
    
    public function authAction()
    {
        $resp = new MyResponse(false,"BS104",$this->config->errorCodes->BS104,null);
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $employee = Employees::findFirst([
                        "email = ?1 AND displayflag = ?2",
                        "bind" => [
                            1 => $email,
                            2 => "1",
                         ],
                    ]);
        if($employee)
        {
            if ($this->security->checkHash($password, $employee->password))
            {
                $accesstoken = $employee->accesstoken;
              
                if(!empty($accesstoken))
                {
                     
                    $this->session->set("token", $accesstoken);
                    if($employee->isadmin == 1)
                        $this->session->set("U_ADMIN", 1);
                    if($employee->isadmin == 0)
                        $this->session->set("U_ADMIN", 0);
                    $this->session->set("U_NAME", ucwords($employee->name));
                    $this->session->set("U_USERTYPE", ucwords($employee->usertype));
                    $resp->success = true;
                    $resp->errorcode = "BS105";
                    $resp->errormsg = $this->config->errorCodes->BS105;
                    $resp->data = array("user_id"=>$employee->empid,"token"=>$accesstoken,"name"=>$employee->name);
//                  
                }else{
                    $resp->success = false;
                    $resp->errorcode = "BS106";
                    $resp->errormsg = $this->config->errorCodes->BS106;
                    $resp->data = null;
//                 
                }

            }
        }
        
    
        return $resp;
    }


}
?>
