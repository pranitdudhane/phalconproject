<?php

class MyResponse{

	public $success;
	public $errorcode;
	public $errormsg;
	public $data; 	 
	
	function MyResponse($s, $ec, $em, $d){
		$this->success = $s; 
		$this->errorcode = $ec; 
		$this->errormsg = $em; 
		$this->data = $d; 
	}
	
	public function getArray(){
		$d = null;
		if (isset($this->data)){
			if(is_array($this->data)){
				$d = $this->data;
			}else if(is_object($this->data)){
				$d = $this->data->getArray();
			}
		}
		return array(
			"success"=>$this->success,
			"errorcode"=>$this->errorcode,
			"errormsg"=>$this->errormsg,
			"data"=>$d
			);
	}
}