<?php
class WelcomeController extends ControllerBase{
	// Index
	public function indexAction(){
		$this->forward('desktop');
	}
	public function testAction(){
		//$this->view->disable();
		//$admin = $this->session->get('Admin');
		//print_r($_SESSION);
		$C = $this->dispatcher->getControllerName();
		$menu = Menus::findFirst(array("url = :url:",'bind' => array('url' => $C)));
		if($menu->fid){
			$this->_getMenuPositive($menu->id);
		}else{
			$this->_getMenuPositive($menu->id);
		}
		//$this->flash->success('Goodbye!');
		//echo 1232;
		//echo $c = $this->dispatcher->getControllerName();
		//print_r($_SESSION);
		
		//$this->response->setStatusCode(404, "Not Found");
		//$this->forward('users/login');
		//$this->view->partial('welcome/index');
		//$this->view->partial('welcome/index');
	}
	
	private function _getMenuNegative($id=''){
		echo '反';
	}
}