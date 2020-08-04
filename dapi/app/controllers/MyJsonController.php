<?php

abstract class MyJsonController extends Phalcon\Mvc\Controller {
  public function afterExecuteRoute(\Phalcon\Mvc\Dispatcher $dispatcher) {
	  $this->view->disable();
      $data = $dispatcher->getReturnedValue();
      if (is_object($data) && get_class($data) == "MyResponse") {
		$data = json_encode($data->getArray());
        //$data = array_map('utf8_encode', $data);
		$this->response->setContentType('application/json', 'UTF-8');
	  }else if (is_array($data)) {
        $data = json_encode($data);
       // $data = array_map('utf8_encode', $data);
		$this->response->setContentType('application/json', 'UTF-8');
      }
	  $this->response->setContent($data);
	  $this->response->send();
  }
}