<?php
session_start();
class ValidAccessToken{
    private $uid;
    private $utype;
    private $udpid;

    function isValid(){
        $isvalid = false;
        //echo "<pre>";
        //print_r($_REQUEST);
        //echo "the pst value is :".$_REQUEST['token'];
        
        //echo "POST Token Value : " . $_POST['token'] . "<br/>";
        //echo "GET Token Value : " . $_GET['token'] . "<br/>";
        //echo "SESSION Token Value : " . $_SESSION['token'] . "<br/>";
        
        if(isset($_POST['token']))
        {
            $tokenvalue  = $_POST['token'];
        }
        else if(isset($_GET['token']))
        {
            $tokenvalue  = $_GET['token'];
        }
        elseif(isset($_SESSION['token']))
        {
            $tokenvalue  = $_SESSION['token'];
        }
        else
        {
            $tokenvalue  = "";
        }
        //echo "Token Value : " . $tokenvalue . "\n";die;
        //error_log("the token val is :".$_SESSION['token']);
        //error_log("the token val is :".$tokenvalue);
        //$tokenvalue = '$2y$08$aE9QSlJUKzByaXN3NHh6QOWb9CE4tliyQrfLfeIbd.I5sMCfgAYUC';
        if($tokenvalue)
        {	
            //echo "the token value is".$tokenvalue;
            $accessToken = Employees::findFirstByAccesstoken($tokenvalue);
            //echo "<pre>";
            //print_r($accessToken);
            if($accessToken){
                $this->uid = $accessToken->empid;
                $this->utype = $accessToken->isadmin;
                $this->udpid = $accessToken->dpid;
                $isvalid = true;
            }
        }
        return $isvalid;
    }

    function getUid(){
        return $this->uid;
    }
    function getUtype(){
        return $this->utype;
    }
    function getDepartment(){
        return $this->udpid;
    }
}
